# AGENTS.md — Rest Ezzz Foundation Build Instructions

## Required reading before implementation
Read these in order:
1. `docs/content/INTEGRATED-CONTENT-PLAN.md`
2. `docs/research/LIVE-SITE-AUDIT-2026-09-30.md`
3. `docs/BUILD-AGENT-HANDOFF.md`
4. `docs/IA-JJG.md`
5. `docs/IA-VISUAL-MAP.md`
6. `docs/01-STRATEGY.md`
7. `docs/02-SCOPE.md`
8. `docs/03-STRUCTURE.md`
9. `docs/04-SKELETON.md`
10. `docs/05-SURFACE.md`
11. `docs/content/CONTENT-INVENTORY.md`
12. `docs/content/LIVE-SITE-MIGRATION-MATRIX.md`
13. `docs/LAUNCH-CHECKLIST.md`

## Product requirement
Do **not**:
- clone the restored live website 1:1
- discard its authentic content/history
- revert to a funeral-only site
- reduce Rest Ezzz to foster-youth support only
- publish unverified operational claims

Build the **integrated direction**:
- Transition to Independence
- Family Relief & Loss Support
- Community Outreach
- Acts of Compassion
- community/sponsor/volunteer/donor resource network

The founder interview makes foster-youth transition a major strategic priority. The restored live site confirms an established public identity around family-loss relief and broad community outreach. Both must be integrated.

## Live-site migration
The current production site is a first-party source.

Use:
- `docs/research/live-site-snapshot/`
- `docs/research/LIVE-SITE-AUDIT-2026-09-30.md`
- `docs/content/LIVE-SITE-MIGRATION-MATRIX.md`

Do not migrate:
- WordPress Sample Page
- Avada demo content such as Leo Vetrov
- duplicate About page
- unsupported template claims
- old content merely because it exists

Preserve and adapt authentic Rest Ezzz language, media, causes, events and participation models.

## Infrastructure requirement
Production target is WordPress on the new OVH VPS behind Cloudflare.

**Mandatory:** use Cloudflare's `cf` CLI for Cloudflare zone/DNS inspection and the final DNS cutover. Do not treat manual dashboard DNS editing as the standard deployment path.

The website cutover must:
- preserve/snapshot current production before migration
- validate the OVH origin first
- snapshot current Cloudflare DNS
- dry-run the DNS mutation when supported
- update the apex A record from current production `162.0.238.22` to the provisioned OVH IPv4
- keep the apex proxied
- preserve `www` → apex behavior
- leave MX/TXT/mail/service records untouched unless separately authorized
- verify public HTTPS after cutover
- retain `162.0.238.22` as rollback until retirement is explicitly approved

Never commit credentials, Cloudflare API tokens, database secrets or private keys.

## Safety of existing state
Never overwrite or discard:
- production database
- donor/GiveWP data
- uploads/media
- server secrets
- current production origin
- recovery snapshots

without explicit authorization and tested backups.
