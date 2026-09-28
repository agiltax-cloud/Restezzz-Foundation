# Rest Ezzz Foundation

WordPress application repository for **restezzzfoundation.org**.

## Purpose
This repository is the source of truth for the rebuilt Rest Ezzz Foundation website. The rebuild is based on recovered first-party/archive material and an information architecture derived with Jesse James Garrett's Five Planes of UX.

## Repository layout

- `wp-content/themes/restezzz/` — custom production WordPress theme
- `docs/` — IA, recovery provenance, deployment contract
- `.env.example` — environment variable names only; never commit secrets

WordPress core, the database, `wp-content/uploads`, caches, backups, and secrets are runtime/server concerns and are intentionally not versioned.

## Server build agent
Start with `docs/DEPLOYMENT.md` and `docs/IA-JJG.md`.

## Status
Foundation scaffold created. Content recovery and theme implementation are in progress.
