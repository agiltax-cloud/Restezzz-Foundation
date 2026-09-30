# Rest Ezzz Foundation — Build Agent Handoff

This document is the authoritative infrastructure/deployment handoff for the WordPress build agent.

## Mission
Build and deploy the new Rest Ezzz Foundation WordPress website to the **new OVH VPS**, then use the **Cloudflare CLI (`cf`)** to cut production DNS from the legacy origin to the OVH origin only after the new site passes validation.

## Mandatory architecture

```text
Visitor
  ↓
Cloudflare
  ↓
restezzzfoundation.org / www.restezzzfoundation.org
  ↓
NEW OVH VPS
  ↓
Nginx or Apache
  ↓
PHP-FPM
  ↓
WordPress
  ↓
MariaDB / MySQL
```

GitHub is the source of truth for code and planning. WordPress database, uploads, secrets and server configuration remain persistent infrastructure/runtime state.

## NON-NEGOTIABLE: Cloudflare CLI controls production DNS

The build agent **must use Cloudflare's `cf` CLI** for Cloudflare zone/DNS inspection and the final web-record cutover.

Do not instruct the human operator to manually edit the Cloudflare dashboard as the normal deployment path.

Because `cf` is currently beta, the agent must discover/inspect the exact mutation command at runtime before changing DNS:

```bash
cf --version
cf cli search "update a DNS record"
# inspect the selected command before mutation
cf schema <command-returned-by-search>
```

Use `--dry-run` whenever the selected mutation command supports it.

## Cloudflare CLI prerequisites

Install/update on the build/deployment host:

```bash
npm install --global cf@latest
cf --version
```

For unattended automation, use environment credentials rather than interactive login:

```bash
export CLOUDFLARE_API_TOKEN="..."
export CLOUDFLARE_ACCOUNT_ID="..."
export CLOUDFLARE_ZONE_ID="restezzzfoundation.org"
```

The API token should be least-privilege and limited to the Rest Ezzz zone where possible. It needs enough access to read the zone and edit DNS records.

Never commit Cloudflare tokens or deployment credentials to Git.

## Known current web DNS

At planning time, the production web origin is:

```text
restezzzfoundation.org  A      162.0.238.22             Proxied
www                     CNAME  restezzzfoundation.org   Proxied
```

The legacy IP `162.0.238.22` is the rollback target until the old host is intentionally retired.

The final OVH IPv4 address is deployment state and must come from the provisioned OVH server/environment, not be guessed or hard-coded in source control.

## DNS records that are NOT part of the website cutover

Do not modify mail/service/verification records during the website deployment unless the operator explicitly expands scope.

Examples currently known in the zone include:
- MX for Microsoft 365
- SPF/TXT records
- Microsoft tenant verification TXT
- autodiscover
- email
- _domainconnect

A separate DNS/email cleanup can be performed later. The website cutover should be tightly scoped to web-origin records.

## Pre-deployment requirements on OVH

Before touching production DNS:
1. Provision the OVH VPS.
2. Patch OS packages.
3. Configure firewall.
4. Install web server, PHP-FPM and required PHP modules.
5. Install MariaDB/MySQL.
6. Create database/user with secrets stored outside Git.
7. Install current supported WordPress core.
8. Deploy this repo's `wp-content/themes/restezzz` theme.
9. Create persistent writable `wp-content/uploads`.
10. Configure WordPress canonical URL as `https://restezzzfoundation.org`.
11. Configure web-server virtual hosts for `restezzzfoundation.org` and `www.restezzzfoundation.org`.
12. Configure valid origin TLS before cutover.
13. Use Cloudflare SSL/TLS in **Full (strict)** once the origin certificate is valid.
14. Configure backups for database + uploads.
15. Validate WordPress health before DNS changes.

## Origin validation before cutover

The new OVH origin must be validated directly before production DNS moves.

Preferred tests:

```bash
curl --resolve restezzzfoundation.org:443:${OVH_ORIGIN_IPV4} https://restezzzfoundation.org/ -I
curl --resolve www.restezzzfoundation.org:443:${OVH_ORIGIN_IPV4} https://www.restezzzfoundation.org/ -I
curl --resolve restezzzfoundation.org:443:${OVH_ORIGIN_IPV4} https://restezzzfoundation.org/wp-json/ -I
```

Also validate:
- homepage renders
- WordPress admin login page responds
- REST API is not fatally broken
- PHP has no fatal errors
- database connectivity works
- static assets load
- forms work if enabled
- redirects are correct
- HTTPS is valid
- no development/noindex flag remains accidentally enabled

Do not cut DNS while the OVH origin is failing any P0 health check.

## Cloudflare DNS preflight

Before mutation:

```bash
cf zones list --name restezzzfoundation.org
cf dns records list --zone restezzzfoundation.org
cf dns records list --zone restezzzfoundation.org --type A
```

Capture the current DNS state to a deployment/rollback artifact outside source control:

```bash
mkdir -p ~/restezzz-deploy-backups
cf dns records list --zone restezzzfoundation.org > ~/restezzz-deploy-backups/dns-before-ovh-cutover.json
```

Confirm:
- the target apex A record currently points to `162.0.238.22`
- `www` resolves through the apex as expected
- the correct Cloudflare account and zone are selected
- the final OVH origin IP is known and reachable

If any assumption is false, stop and reconcile rather than guessing.

## Mandatory dry-run

Because `cf` is beta and command surfaces can change:

```bash
cf cli search "update a DNS record"
cf schema <resolved-update-command>
```

Then construct the update using the current schema and run its `--dry-run` form if supported.

The dry run must show:
- zone = `restezzzfoundation.org`
- record = apex A for `restezzzfoundation.org`
- new content = exact OVH IPv4
- proxied = `true`

Do not proceed if the preview touches MX, TXT, autodiscover, email, _domainconnect, or unrelated records.

## Production cutover

Change only the web origin:

```text
BEFORE
restezzzfoundation.org A 162.0.238.22 proxied=true

AFTER
restezzzfoundation.org A <OVH_ORIGIN_IPV4> proxied=true
```

Keep:

```text
www CNAME restezzzfoundation.org proxied=true
```

If an AAAA record exists, update/use it only if IPv6 has been configured and tested on OVH. Do not create broken IPv6 connectivity.

## Immediate post-cutover verification

After the `cf` mutation:

```bash
cf dns records list --zone restezzzfoundation.org --type A
dig +short restezzzfoundation.org
dig +short www.restezzzfoundation.org
curl -I https://restezzzfoundation.org/
curl -I https://www.restezzzfoundation.org/
curl -I https://restezzzfoundation.org/wp-login.php
curl -I https://restezzzfoundation.org/wp-json/
```

Verify:
- HTTP → HTTPS behavior
- apex/www canonical behavior
- Cloudflare proxy is active
- site serves from OVH rather than the old origin
- no 5xx/critical error
- forms/email delivery still work
- admin access works
- assets and uploads load
- cache behavior is sane

Purge Cloudflare cache if stale pages/assets from the legacy origin appear.

## Rollback

Rollback must be possible immediately.

If the production cutover causes a P0 failure, use `cf` to restore:

```text
restezzzfoundation.org A 162.0.238.22 proxied=true
```

Then verify the record with `cf dns records list` and public DNS/HTTP checks.

Do not destroy the legacy host or remove recovery data until the new OVH deployment has been stable and the team explicitly approves retirement.

## Build/deploy order

```text
1. READ PLANNING + IA
        ↓
2. BUILD WORDPRESS/THEME
        ↓
3. PROVISION OVH
        ↓
4. DEPLOY TO OVH
        ↓
5. CONFIGURE TLS + WORDPRESS
        ↓
6. TEST OVH ORIGIN DIRECTLY
        ↓
7. CF CLI: INVENTORY + DNS BACKUP
        ↓
8. CF CLI: DRY-RUN DNS CHANGE
        ↓
9. CF CLI: CUT APEX A TO OVH
        ↓
10. VERIFY PUBLIC SITE
        ↓
11. PURGE CACHE IF NEEDED
        ↓
12. MONITOR
        ↓
13. RETAIN LEGACY ORIGIN FOR ROLLBACK/RECOVERY
```

## Completion definition

The build agent has not completed deployment merely because WordPress is running on OVH.

Completion requires:
- production site functioning on OVH
- Cloudflare DNS pointed to OVH via `cf`
- Cloudflare proxy preserved
- HTTPS healthy
- public smoke tests passing
- rollback information retained
- no unrelated DNS records changed
- legacy origin preserved until approved for retirement