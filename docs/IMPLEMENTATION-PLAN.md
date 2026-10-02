# Implementation Plan

## Phase 0 — Preservation
- preserve current production DB
- preserve uploads
- preserve GiveWP donor/payment data
- preserve current live-site snapshot
- preserve current DNS state

## Phase 1 — Build from locked specifications
Implementation authority:
1. `FINAL-WEBSITE-BLUEPRINT.md`
2. `PAGE-SPECS.md`
3. `DESIGN-SYSTEM.md`
4. `FORMS-AND-INTERACTIONS.md`
5. `IA-JJG.md`

Mission, vision, IA, page set, CTAs, forms and visual system are already decided.

## Phase 2 — WordPress architecture
- custom `restezzz` theme
- Gutenberg-first
- Pages for core static content
- structured content for Causes/Events, Acts of Compassion, Partners, Stories/Impact
- GiveWP retained
- no Avada dependency

## Phase 3 — Templates/components
Build exactly the templates defined in `PAGE-SPECS.md`:
- home
- Get Help
- Refer Someone
- Our Work
- three program pages
- Community hub
- Acts
- Events archive/detail
- Stories archive/detail
- Partners
- Get Involved
- Sponsor & Partner
- About
- Founder
- Transparency
- Donate
- Contact
- legal/404/utility

## Phase 4 — Content migration
Apply KEEP / ADAPT / MERGE / ARCHIVE / RETIRE decisions.

Mandatory cleanup:
- remove Sample Page
- remove Avada demo content
- remove Leo Vetrov
- consolidate duplicate About
- redirect Journal to Contact
- resolve/redirect old cause pages
- replace demo SEO/Open Graph data

## Phase 5 — Operational verification
This phase confirms facts; it does not redesign the UX.

Confirm before public population:
- eligibility
- service geography
- Family Relief service details
- legal/tax information
- contact information
- payment/direct-giving details
- sponsor benefits
- photo/story permissions

Unconfirmed claims remain omitted.

## Phase 6 — Donation/data migration
- migrate GiveWP donor history/configuration
- test payment gateway
- test receipt
- test confirmation/failure
- test donor dashboard
- back up before migration

## Phase 7 — QA
- responsive
- WCAG 2.2 AA
- forms/states
- donation flow
- redirects
- SEO metadata
- sitemap/canonicals
- performance
- security
- privacy

## Phase 8 — OVH + Cloudflare
1. provision/harden OVH
2. deploy/migrate
3. configure TLS
4. test origin directly
5. use Cloudflare `cf`
6. snapshot exact DNS
7. dry-run mutation when supported
8. point apex to validated OVH IP
9. preserve proxy and www
10. leave mail/service DNS untouched
11. smoke test
12. rollback to exact pre-cutover origin on P0 failure

## Phase 9 — Stabilization
Monitor forms, donations, errors, indexing and performance. Retain old production until explicit retirement approval.
