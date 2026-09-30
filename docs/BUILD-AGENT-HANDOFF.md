# Rest Ezzz Foundation — Build Agent Handoff

## Mission
Build the integrated Rest Ezzz WordPress site on the new OVH VPS, migrate approved content/media/data from the current production site, then use Cloudflare CLI (`cf`) for a controlled DNS cutover.

## Read first
1. `content/INTEGRATED-CONTENT-PLAN.md`
2. `research/LIVE-SITE-AUDIT-2026-09-30.md`
3. `content/LIVE-SITE-MIGRATION-MATRIX.md`
4. `IA-JJG.md`
5. `IA-VISUAL-MAP.md`

## Current production is live
Current production web origin at planning time:
```text
restezzzfoundation.org  A      162.0.238.22             Proxied
www                     CNAME  restezzzfoundation.org   Proxied
```

Treat the current origin as active production and rollback, not disposable infrastructure.

## Preserve before migration
- database backup
- `wp-content/uploads` backup
- GiveWP/donor data
- current live-site snapshot in repo
- plugin/payment/form inventory
- authentic event/cause media
- current DNS snapshot

## Current known WordPress state
Public audit found:
- 12 published pages
- 72 media items
- GiveWP form ID 1207
- donor dashboard / confirmation / failure pages
- Contact Form 7 REST namespace
- WPForms REST namespace
- Avada Builder
- Instagram feed
- current logo/event media

The custom rebuild should not carry Avada demo/template dependency unless specifically required.

## Mandatory target architecture
```text
Visitor
  ↓
Cloudflare
  ↓
restezzzfoundation.org / www
  ↓
NEW OVH VPS
  ↓
Web server + PHP-FPM
  ↓
WordPress
  ↓
MariaDB/MySQL
```

## Cloudflare CLI is mandatory
Use `cf` for zone inspection, DNS inventory, pre-cutover snapshot, mutation discovery/schema, dry-run where supported, final apex cutover, verification and rollback.

Install:
```bash
npm install --global cf@latest
cf --version
```

Use environment/secret-manager credentials only:
```bash
export CLOUDFLARE_API_TOKEN="..."
export CLOUDFLARE_ACCOUNT_ID="..."
export CLOUDFLARE_ZONE_ID="..."
```

Because `cf` is beta, inspect the current mutation command at runtime:
```bash
cf cli search "update a DNS record"
cf schema <resolved-command>
```

## Do not modify mail/service DNS during web cutover
Leave MX/TXT/autodiscover/email/_domainconnect alone unless separately authorized.

## OVH pre-cutover requirements
- patched/hardened VPS
- firewall
- supported PHP + modules
- MariaDB/MySQL
- database/user secrets outside Git
- WordPress installed
- custom `restezzz` theme
- persistent uploads
- approved content/media migrated
- GiveWP/donation state migrated/configured if retained
- valid origin TLS
- canonical apex/www
- backups
- noindex/dev flags cleared
- forms + donation flow tested

## Direct origin tests
```bash
curl --resolve restezzzfoundation.org:443:$OVH_ORIGIN_IPV4 https://restezzzfoundation.org/ -I
curl --resolve www.restezzzfoundation.org:443:$OVH_ORIGIN_IPV4 https://www.restezzzfoundation.org/ -I
curl --resolve restezzzfoundation.org:443:$OVH_ORIGIN_IPV4 https://restezzzfoundation.org/wp-json/ -I
```

Do not cut DNS while any P0 test fails.

## DNS preflight
```bash
cf zones list --name restezzzfoundation.org
cf dns records list --zone restezzzfoundation.org
cf dns records list --zone restezzzfoundation.org --type A
```

Save the exact current DNS state outside source control.

Immediately before mutation, confirm the actual current apex value. If it differs from 162.0.238.22, use the actual current value as rollback instead of forcing an old assumption.

## Production cutover
```text
BEFORE
restezzzfoundation.org A <CURRENT_PRODUCTION_ORIGIN> proxied=true

AFTER
restezzzfoundation.org A <VALIDATED_OVH_IPV4> proxied=true
```

Keep:
```text
www CNAME restezzzfoundation.org proxied=true
```

Do not create/use AAAA unless OVH IPv6 is configured and tested.

## Post-cutover verification
Verify:
- apex/www HTTPS
- Cloudflare proxy
- WordPress admin/API
- forms
- donation flow
- donor dashboard if retained
- images/uploads
- redirects
- no 5xx
- cache

## Rollback
On P0 failure, restore the exact pre-cutover apex A value through `cf`, then verify.

Do not retire current production until the OVH site is stable, donor/data integrity is verified, backups are verified, and the team explicitly approves retirement.