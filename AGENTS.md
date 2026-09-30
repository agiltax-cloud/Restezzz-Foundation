# AGENTS.md — Rest Ezzz Foundation Build Instructions

## Required reading before implementation
Read these in order:
1. `docs/BUILD-AGENT-HANDOFF.md`
2. `docs/IA-JJG.md`
3. `docs/IA-VISUAL-MAP.md`
4. `docs/01-STRATEGY.md`
5. `docs/02-SCOPE.md`
6. `docs/03-STRUCTURE.md`
7. `docs/04-SKELETON.md`
8. `docs/05-SURFACE.md`
9. `docs/content/CONTENT-INVENTORY.md`
10. `docs/LAUNCH-CHECKLIST.md`

## Infrastructure requirement
Production is WordPress on the new OVH VPS behind Cloudflare.

**Mandatory:** use Cloudflare's `cf` CLI for Cloudflare zone/DNS inspection and the final DNS cutover. Do not treat manual dashboard DNS editing as the standard deployment path.

The website cutover must:
- validate the OVH origin first
- snapshot current DNS
- dry-run the Cloudflare DNS mutation when supported
- update the apex A record from legacy `162.0.238.22` to the provisioned OVH IPv4
- keep the apex proxied
- preserve `www` → apex behavior
- leave MX/TXT/mail/service records untouched unless separately authorized
- verify public HTTPS after cutover
- retain `162.0.238.22` as rollback until retirement is explicitly approved

Never commit credentials, Cloudflare API tokens, database secrets, or private keys.

## Product requirement
Do not revert the project to the old funeral-first architecture. Current planning is based on the September 28, 2026 founder interview: foster-youth transition support is the primary mission, with Community Outreach and Acts of Compassion as additional pillars.

## Safety of existing state
Never overwrite the production database, uploads, secrets, or old-origin recovery data without explicit authorization.