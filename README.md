# Rest Ezzz Foundation

WordPress application repository for **restezzzfoundation.org**.

## Purpose
This repository is the source of truth for the redesigned Rest Ezzz Foundation website.

The rebuild now integrates:
- the restored live WordPress site and its current public content
- the September 28, 2026 founder interview
- current Rest Ezzz social/community activity embedded on the live site
- historical archive material
- corroborating public/partner sources
- Jesse James Garrett's Five Planes of UX
- the new Acts of Compassion direction

## Current strategic model
Rest Ezzz is being structured as a broad outreach nonprofit with three major service/community pillars:

1. **Transition to Independence** — foster-youth transition support, life skills, financial foundations, employment/entrepreneurship, housing/resources and mentorship.
2. **Family Relief & Loss Support** — the current live site publicly describes funeral-expense relief, life-insurance assistance, financial aid for families coping with loss and funeral-process support; exact current operating scope must be reconfirmed before launch.
3. **Community Outreach & Acts of Compassion** — food, essentials, clothing/shoes, hygiene, volunteer service, neighborhood projects, emergency support, events and practical acts of compassion.

Sponsors, partners, volunteers, donors, vendors and service providers form the participation/resource network across all three.

## Repository layout
- `wp-content/themes/restezzz/` — custom production WordPress theme
- `docs/` — integrated IA, content strategy, research provenance, migration and deployment contract
- `docs/research/live-site-snapshot/` — automated snapshot of the restored production website
- `.env.example` — environment variable names only; never commit secrets

WordPress core, the production database, `wp-content/uploads`, donor records, caches, backups and secrets are runtime/server concerns and are intentionally not versioned.

## Server build agent
Start with:
1. **`AGENTS.md`**
2. **`docs/content/INTEGRATED-CONTENT-PLAN.md`**
3. **`docs/BUILD-AGENT-HANDOFF.md`**
4. **`docs/IA-JJG.md`**
5. **`docs/IA-VISUAL-MAP.md`**

Production target: WordPress on the new OVH VPS behind Cloudflare. The build agent is required to use Cloudflare's **`cf` CLI** for DNS preflight, backup, controlled cutover, verification and rollback planning.

## Current production-site snapshot
A GitHub Actions crawler captures the live site through public HTML + WordPress REST endpoints. Current snapshot date: **2026-09-30**.

Key source docs:
- `docs/research/LIVE-SITE-AUDIT-2026-09-30.md`
- `docs/research/LIVE-SITE-SOCIAL-EVIDENCE.md`
- `docs/research/live-site-snapshot/`
- `docs/research/SOURCE-INTERVIEW-2026-09-28.md`

## Status
Integrated planning and live-site migration audit are in progress. Theme implementation follows the integrated plan rather than either the old website or the founder interview in isolation.
