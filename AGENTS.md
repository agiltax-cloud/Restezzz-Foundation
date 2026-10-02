# AGENTS.md — Rest Ezzz Foundation Build Instructions

## Authority order
Read and implement in this order:

1. `docs/FINAL-WEBSITE-BLUEPRINT.md`
2. `docs/PAGE-SPECS.md`
3. `docs/DESIGN-SYSTEM.md`
4. `docs/FORMS-AND-INTERACTIONS.md`
5. `docs/IA-JJG.md`
6. `docs/BUILD-AGENT-HANDOFF.md`
7. evidence/research documents

If older planning language conflicts with the four final specification documents above, the final specifications win.

## Product decision
Build one integrated Rest Ezzz experience around three service pillars:

1. Transition to Independence
2. Family Relief
3. Community Outreach

**Acts of Compassion is the signature participation model**, not a fourth service program.

Primary navigation is fixed:

```text
GET HELP | OUR WORK | COMMUNITY | GET INVOLVED | ABOUT | [ DONATE ]
```

Do not rename these sections or invent additional top-level navigation.

## Brand decision
Public name: **Rest Ezzz Foundation**

Brand line: **Rest on us.**

Mission:
**To uplift the human spirit by helping young people, families, and neighborhoods move through difficult transitions with practical support, compassionate action, and human connection.**

Vision:
**A community where no one has to face a difficult transition alone.**

## UX decision rule
The plan contains decisions, not options.

When an operational fact is unverified:
- keep the approved page and layout
- omit the unverified claim
- do not invent copy
- do not create an alternate UX
- publish the fact only after Foundation confirmation

## Do not build
- Avada/page-builder dependency
- global site search at launch
- blog/journal
- newsletter
- document uploads in help/referral forms
- a member portal other than GiveWP Donor Dashboard if retained
- generic demo content or stock charity copy

## Current-site migration
Preserve:
- authentic Rest Ezzz copy and imagery
- causes/events
- outreach evidence
- current donation data/history
- GiveWP records
- real partner/community content

Retire:
- Sample Page
- Leo Vetrov
- duplicate About page
- empty author archive
- Avada demo assets/copy
- demo SEO metadata
- unsupported claims

## Infrastructure requirement
Production target: WordPress on OVH VPS behind Cloudflare.

Mandatory:
- preserve current production first
- deploy/test OVH origin before cutover
- use Cloudflare `cf` CLI for DNS inventory, backup, mutation, verification and rollback
- keep unrelated mail/service DNS untouched
- retain the existing production origin until OVH is stable and retirement is explicitly approved

Never commit secrets, donor data, payment credentials, API tokens, database passwords or private keys.
