# OVH VPS Deployment Contract

## Target
Production WordPress for `restezzzfoundation.org` on the new OVH VPS behind Cloudflare.

## Current production
The current site at `162.0.238.22` is live. Preserve it as production/rollback until OVH migration is validated.

Before cutover:
- DB backup
- uploads backup
- donor/GiveWP data backup
- current live-site snapshot
- current DNS snapshot

## Responsibilities
1. Provision/harden OVH.
2. Install supported web/PHP/database stack.
3. Keep secrets outside Git.
4. Deploy custom `restezzz` theme.
5. Create persistent uploads.
6. Migrate approved content/media using migration matrix.
7. Migrate/configure donation runtime/data deliberately.
8. Configure canonical HTTPS + TLS.
9. Keep Cloudflare proxy.
10. Use Cloudflare `cf` CLI for DNS inventory, backup, dry-run where supported, cutover and rollback.
11. Leave unrelated mail/service DNS alone.
12. Retain old production until explicit retirement approval.

## Cloudflare secrets
Use environment/secret-manager values only:
- `CLOUDFLARE_API_TOKEN`
- `CLOUDFLARE_ACCOUNT_ID`
- `CLOUDFLARE_ZONE_ID`

## Do not overwrite/discard
- production DB
- donor records
- uploads
- server secrets
- TLS/private keys
- current-origin backups
- unrelated DNS

Git contains code/planning/non-sensitive migration evidence. Operational WordPress data remains persistent infrastructure state.
