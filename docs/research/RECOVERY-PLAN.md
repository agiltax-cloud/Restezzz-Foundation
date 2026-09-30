# Recovery / Preservation Plan

The live site is restored, so the project has moved from emergency recovery to **preservation + migration**.

## Priority 1 — Preserve current production
Already automated:
- crawl public HTML
- capture WordPress pages
- capture media metadata
- capture WordPress REST surface
- capture GiveWP form metadata
- capture social links
- capture current page URLs

Snapshot location:
`docs/research/live-site-snapshot/`

Still required before final cutover:
- full database backup
- `wp-content/uploads` backup
- GiveWP donor/donation export/backup
- plugin/config inventory
- payment-gateway settings backup without committing secrets

## Priority 2 — Content integration
For every current page/section:
- capture original
- KEEP / ADAPT / MERGE / ARCHIVE / RETIRE
- map to new IA
- verify operational claims
- preserve authentic Rest Ezzz language

See `content/LIVE-SITE-MIGRATION-MATRIX.md`.

## Priority 3 — Current Foundation channels
- embedded Instagram feed already captured from homepage
- Facebook page ID 61568158724281
- other current social profiles
- event flyers/photos/captions

Use these to build Community, Causes/Events and Acts of Compassion.

## Priority 4 — Historical archive
Use Wayback/archive material only where it adds history, branding or assets not present on current production.

## Priority 5 — Corroboration
- official California foster-transition resources
- City of Orange/public records
- nonprofit/legal records
- partners
- current service/resource information

## Preservation rule
Do not decommission or alter the current production origin merely because the public site has been scraped. A public scrape is not a substitute for the database, uploads, donor data or configuration backups.
