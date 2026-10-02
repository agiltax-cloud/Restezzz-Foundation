# Rest Ezzz — Final JJG Five Planes

**Status: DECISIONS LOCKED**

The five planes are complete. Operational facts still awaiting confirmation are publication gates, not UX alternatives.

---

## Plane 1 — Strategy

### Positioning
**Rest Ezzz helps people move through difficult transitions with practical support, human connection, and compassionate action.**

### Mission
**To uplift the human spirit by helping young people, families, and neighborhoods move through difficult transitions with practical support, compassionate action, and human connection.**

### Vision
**A community where no one has to face a difficult transition alone.**

### Service pillars
1. Transition to Independence
2. Family Relief
3. Community Outreach

### Participation model
**Acts of Compassion**

### Primary audiences
- young adults transitioning from foster care
- families facing loss or hardship
- community members needing practical resources
- referral partners
- volunteers, sponsors, donors, vendors, businesses and service providers

### Experience principles
- need first
- practical before promotional
- human connection is visible
- preserve dignity and agency
- make compassion actionable
- collect minimal sensitive information
- publish only supported claims
- mobile-first and accessible

---

## Plane 2 — Scope

### Launch functionality
- Get Help
- Refer Someone
- Transition to Independence
- Family Relief
- Community Outreach
- Acts of Compassion
- Causes & Events
- Stories & Impact
- Community Partners
- Get Involved
- Sponsor & Partner
- About
- Founder Story
- Transparency & Accountability
- Donate
- Contact
- Privacy
- Accessibility
- GiveWP donation confirmation/failure/dashboard utilities

### Launch exclusions
- no blog/journal
- no newsletter
- no global search
- no document uploads
- no case-status portal
- no member portal other than retained donor dashboard
- no Avada dependency
- no unverified service or financial claims

### Technology
- WordPress
- custom `restezzz` theme
- Gutenberg-first
- GiveWP retained for donation history/runtime
- structured content for Acts, Events, Partners and Stories

---

## Plane 3 — Structure

### Primary navigation
```text
GET HELP | OUR WORK | COMMUNITY | GET INVOLVED | ABOUT | [ DONATE ]
```

### Final IA
```text
HOME
├── GET HELP
│   └── Refer Someone
├── OUR WORK
│   ├── Transition to Independence
│   ├── Family Relief & Loss Support
│   └── Community Outreach
├── COMMUNITY
│   ├── Acts of Compassion
│   ├── Causes & Events
│   ├── Stories & Impact
│   └── Community Partners
├── GET INVOLVED
│   └── Sponsor & Partner
├── ABOUT
│   ├── Founder Story
│   └── Transparency & Accountability
├── DONATE
└── CONTACT
```

FAQ content is embedded into Get Help and relevant program pages. Volunteer, goods/services, fundraising and vendor participation are sections of Get Involved, not separate pages.

---

## Plane 4 — Skeleton

The complete page anatomy is defined in `PAGE-SPECS.md`.

### Homepage order
1. Hero
2. How We Help
3. Transition to Independence
4. Acts of Compassion
5. Community in Action
6. Causes & Events
7. Stories & Impact
8. Get Involved
9. Donate
10. Footer

### Hero
Eyebrow: **Rest on us.**

H1: **You don't have to face the next chapter alone.**

Primary CTA: **Get Help**  
Secondary CTA: **Act with Compassion**

### Get Help
Four paths:
- transitioning from foster care
- family/loss support
- community/emergency resources
- referring someone

The Request Support form is on the Get Help page.

### Forms
Final field/state/process decisions are defined in `FORMS-AND-INTERACTIONS.md`.

---

## Plane 5 — Surface

The complete production design system is defined in `DESIGN-SYSTEM.md`.

### Public brand
**Rest Ezzz Foundation**

### Core color
Current logo green: **#02A680**

### Primary action color
**#007C60**

### Dark brand color
**#133C38**

### Typography
- headings: Manrope
- body/UI: Source Sans 3

### Visual character
warm, practical, hopeful, trustworthy, community-based, forward-moving.

### Imagery
Authentic Rest Ezzz/community imagery first. No Avada demo imagery, funeral-home styling as a universal identity, or helpless-beneficiary imagery.

### Accessibility
WCAG 2.2 AA target.

---

## Implementation authority
1. `FINAL-WEBSITE-BLUEPRINT.md`
2. `PAGE-SPECS.md`
3. `DESIGN-SYSTEM.md`
4. `FORMS-AND-INTERACTIONS.md`
5. this document
6. evidence/research
