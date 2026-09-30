# Implementation Plan

## Phase 0 — Evidence & live-site preservation
- Live-site snapshot is stored at `docs/research/live-site-snapshot/`.
- Preserve current database, uploads, GiveWP donor data and production origin.
- Confirm open issues in `research/GAPS-AND-QUESTIONS.md`.
- Preserve authentic causes/event media.

## Phase 1 — Integrated content design
- Use `content/INTEGRATED-CONTENT-PLAN.md`.
- Complete `content/LIVE-SITE-MIGRATION-MATRIX.md`.
- Approve mission/vision.
- Confirm active Family Relief/Loss services.
- Confirm Transition to Independence operating model.
- Define Acts of Compassion opportunities.
- Finalize CTAs/page briefs.

## Phase 2 — WordPress architecture
Custom `restezzz` theme, Gutenberg-first, minimal plugin dependency.

Content architecture:
- Pages
- Programs / Support Areas
- Causes & Events
- Acts of Compassion
- Partners / Sponsors
- Stories / Impact
- Resources / FAQs

## Phase 3 — Templates/components
- header/footer
- homepage
- Get Support selector
- Transition program templates
- Family Relief template
- Community Outreach template
- Acts of Compassion
- Causes/Event archive + detail
- Sponsor/Partner
- Get Involved
- Donate
- Contact
- legal/utility

## Phase 4 — Current-content migration
Classify every current content block as KEEP / ADAPT / MERGE / ARCHIVE / RETIRE.

Mandatory cleanup:
- remove Sample Page
- remove Avada demo content
- consolidate duplicate About
- redirect `/journal/` to Contact
- preserve canonical event URLs
- resolve empty cause pages

## Phase 5 — Media migration
- copy authentic Rest Ezzz uploads
- review 2024 media individually
- exclude generic Avada demo assets
- create alt text
- document permissions
- optimize responsive formats

## Phase 6 — Donation/data migration
Evaluate current GiveWP:
- form ID 1207
- donor dashboard
- confirmation
- failure page
- payment gateways
- donor records
- receipts/emails

If GiveWP remains, migrate/configure it deliberately. Never treat donor data as Git content.
Verify Zelle/direct-payment information separately.

## Phase 7 — QA
- responsive/device
- accessibility/keyboard
- forms
- donation test
- redirects
- performance
- sitemap/robots/canonical
- privacy/analytics
- security
- current contact/legal details

## Phase 8 — OVH + Cloudflare cutover
1. Provision/harden OVH.
2. Deploy WordPress/theme/database/uploads.
3. Configure TLS/canonical hosts.
4. Test OVH origin directly.
5. Use Cloudflare `cf`.
6. Snapshot current DNS.
7. Confirm current apex A immediately before change.
8. Inspect current `cf` mutation schema and dry-run when supported.
9. Change only web apex A to validated OVH IPv4, proxied.
10. Preserve `www` and unrelated mail/service DNS.
11. Smoke test.
12. Purge stale cache if needed.
13. Roll back to exact pre-cutover A value on P0 failure.

## Phase 9 — Post-launch
Monitor errors, forms, donations, indexing and performance; maintain backups; retain old production until retirement approval.
