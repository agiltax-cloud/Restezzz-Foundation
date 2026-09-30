# Implementation Plan

## Phase 0 Evidence/recovery
Recover historical HTML/assets; research public/Foundation channels; resolve critical factual gaps; approve current mission/program/contact/donation facts.

## Phase 1 Content design
Finalize content model, page briefs, CTA taxonomy, current copy, metadata, legal/privacy requirements.

## Phase 2 WordPress architecture
Custom restezzz theme; Gutenberg-first editing; menus; reusable patterns; minimal plugin dependency; environment-safe configuration.

## Phase 3 Templates/components
Global header/footer; homepage; standard page; Get Support/program templates; Referral Partner flow; Acts of Compassion; Community/Impact/Partner patterns; Get Involved; Donate; Contact; legal pages; forms only after data workflow approval.

## Phase 4 Surface
Recover/evaluate brand assets; define tokens; responsive styling; image optimization; component states; accessibility pass.

## Phase 5 Content population
Enter approved content; provenance review; media/alt text; internal links; SEO titles/descriptions; redirects if historical URLs are found.

## Phase 6 QA
Responsive/device; keyboard; forms; broken links; performance; metadata; sitemap/robots; security headers/server config; privacy/analytics review.

## Phase 7 OVH deployment + Cloudflare cutover
1. Provision and harden the OVH VPS.
2. Deploy WordPress/theme with persistent database/uploads.
3. Configure TLS and canonical hostnames.
4. Validate the OVH origin directly before public DNS changes.
5. Install/use Cloudflare `cf` CLI.
6. Inventory and snapshot the current Cloudflare DNS zone.
7. Confirm legacy apex A = `162.0.238.22`.
8. Discover/inspect the current `cf` DNS update command; use `--dry-run` when supported.
9. Change only the apex web A record to the validated OVH IPv4, keeping it proxied.
10. Preserve `www` CNAME → apex and leave mail/service records untouched.
11. Run production smoke tests.
12. Purge stale Cloudflare cache if required.
13. Roll back the apex A to `162.0.238.22` immediately if a P0 failure occurs.

Full procedure: `docs/BUILD-AGENT-HANDOFF.md`.

## Phase 8 Post-launch
Monitor errors, form delivery, performance and crawl/indexing; maintain database/uploads backups; keep legacy origin available until retirement approval; establish editorial ownership and review cadence.