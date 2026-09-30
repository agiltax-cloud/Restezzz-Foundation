# OVH VPS Deployment Contract

## Target
Production WordPress website for `restezzzfoundation.org` on the new OVH VPS, fronted by Cloudflare.

## Authoritative handoff
The build/deployment agent must read and follow `docs/BUILD-AGENT-HANDOFF.md` before provisioning, deployment, or DNS changes.

## Build-agent responsibilities
1. Provision a supported PHP release, PHP-FPM, MariaDB/MySQL, and Nginx or Apache on OVH.
2. Install current WordPress core outside Git-managed theme content.
3. Configure production secrets on the server; never write credentials into this repository.
4. Deploy `wp-content/themes/restezzz` from this repository.
5. Create writable persistent `wp-content/uploads`.
6. Activate the `restezzz` theme.
7. Set HTTPS canonical URLs to `https://restezzzfoundation.org`.
8. Configure valid TLS on the OVH origin.
9. Keep Cloudflare as the public DNS/proxy layer.
10. **Use Cloudflare `cf` CLI to inspect, snapshot, dry-run where supported, and mutate production web DNS.**
11. Update the apex web A record from the legacy origin `162.0.238.22` to the validated OVH origin only after origin QA passes.
12. Preserve `www` → apex behavior and Cloudflare proxying.
13. Do not modify MX/TXT/mail/service records as part of the website cutover.
14. Run backups before deployment changes and maintain database + uploads backups independently of Git.
15. Retain the legacy origin as rollback/recovery until explicitly approved for retirement.

## Cloudflare automation credentials
For non-interactive agent/CI use, supply Cloudflare credentials through environment variables such as:
- `CLOUDFLARE_API_TOKEN`
- `CLOUDFLARE_ACCOUNT_ID`
- `CLOUDFLARE_ZONE_ID`

Never commit those values.

## Do not overwrite
- Production database
- `wp-content/uploads`
- server secrets
- TLS/private keys
- legacy recovery data
- unrelated Cloudflare DNS records

## Release principle
Git contains reproducible application/theme code and documentation. WordPress content, media and secrets persist on the server/database. Production DNS is managed deliberately through Cloudflare `cf` CLI under the cutover/rollback procedure in `docs/BUILD-AGENT-HANDOFF.md`.