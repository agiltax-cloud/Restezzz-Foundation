# Rest Ezzz Foundation — Final Website Blueprint

**Status: AUTHORITATIVE BUILD DECISION**

This document resolves the website's strategic, information-architecture, content, interaction, and visual direction. It replaces option-based planning. The build agent must implement these decisions unless a later Foundation-approved change explicitly supersedes them.

Operational facts that still require verification are handled by **publication gates**, not by presenting multiple UX options.

---

# 1. Brand Decision

## Positioning
**Rest Ezzz helps people move through difficult transitions with practical support, human connection, and compassionate action.**

## Brand line
**Rest on us.**

## Mission
**To uplift the human spirit by helping young people, families, and neighborhoods move through difficult transitions with practical support, compassionate action, and human connection.**

## Vision
**A community where no one has to face a difficult transition alone.**

## Values
1. **Compassion in Action** — kindness must become useful action.
2. **Dignity & Respect** — people seeking help retain agency, privacy, and choice.
3. **Practical Support** — Rest Ezzz focuses on concrete next steps and resources.
4. **Community Connection** — lasting help is built through people, partners, and relationships.
5. **Accountability & Transparency** — claims, donations, partnerships, and impact are represented accurately.

---

# 2. Program Architecture Decision

Rest Ezzz has **three service pillars**.

## A. Transition to Independence
The primary growth program and the clearest expression of the founder interview.

Support areas:
- Housing & Resource Navigation
- Money & Banking Foundations
- Employment & Job Readiness
- Entrepreneurship Guidance
- Life Skills & Goal Planning
- Mentorship

## B. Family Relief
The continuation of the original/live site's loss-support purpose.

Public page name: **Family Relief & Loss Support**

Support categories:
- Funeral-Expense Relief
- Insurance / Benefit Navigation
- Financial / Community Resource Coordination
- Funeral-Process Navigation

**Publication gate:** only currently confirmed services are listed. If a service cannot be confirmed, it is omitted from the public page rather than shown as an option or placeholder.

## C. Community Outreach
The established outreach work documented by the live site and Rest Ezzz social activity.

Support/activity categories:
- Food & Essentials
- Clothing / Shoes / Hygiene
- Neighborhood Projects
- Emergency / Disaster Outreach
- Community Causes & Events

## Acts of Compassion
**Acts of Compassion is not a fourth program.** It is the signature participation model that turns community needs into concrete actions people can take.

Examples:
- give time
- donate goods
- provide a professional skill/service
- help at an outreach event
- meet a specific practical need
- connect Rest Ezzz to a useful resource

---

# 3. Final Primary Navigation

```text
GET HELP | OUR WORK | COMMUNITY | GET INVOLVED | ABOUT | [ DONATE ]
```

- **Donate** is a visually distinct button.
- **Contact** is in the utility area and footer, not primary navigation.
- No global site search at launch.
- No blog/journal at launch.
- No newsletter at launch.
- No public member login except the retained GiveWP Donor Dashboard if migrated.

---

# 4. Final Information Architecture

```text
HOME
│
├── GET HELP
│   └── Refer Someone
│
├── OUR WORK
│   ├── Transition to Independence
│   ├── Family Relief & Loss Support
│   └── Community Outreach
│
├── COMMUNITY
│   ├── Acts of Compassion
│   ├── Causes & Events
│   ├── Stories & Impact
│   └── Community Partners
│
├── GET INVOLVED
│   └── Sponsor & Partner
│
├── ABOUT
│   ├── Founder Story
│   └── Transparency & Accountability
│
├── DONATE
└── CONTACT

UTILITY / LEGAL
├── Privacy
├── Accessibility
├── Donor Dashboard
├── Donation Confirmation
├── Donation Failed
└── 404
```

## Deliberate IA decisions
- FAQ content lives inside **Get Help** and relevant program pages. There is no separate FAQ page at launch.
- Volunteer, Donate Goods/Services, Fundraise, and Vendor participation are sections of **Get Involved**, not separate pages.
- Partners have a public directory under **Community Partners**; partnership acquisition lives on **Sponsor & Partner**.
- Request Help is completed directly on **Get Help** rather than creating another page.
- Causes and events use one archive plus one reusable detail template.
- Stories and Impact use one archive plus one reusable detail template.

---

# 5. Final Homepage Decision

## Header
Logo left. Primary nav center/right. Donate button. Contact utility link. Mobile menu below 900px.

## Homepage order

### 1. Hero
Eyebrow: **Rest on us.**

H1: **You don't have to face the next chapter alone.**

Supporting copy:
**Rest Ezzz helps young people, families, and neighborhoods move through difficult moments with practical support, human connection, and compassionate action.**

Primary CTA: **Get Help**  
Secondary CTA: **Act with Compassion**

Use authentic Rest Ezzz/community imagery, not generic charity stock.

### 2. How We Help
Three equal cards:
1. Transition to Independence
2. Family Relief
3. Community Outreach

Each card has one sentence and **Learn how we help**.

### 3. Transition to Independence Spotlight
This is the largest program feature on the homepage.

Show six support areas:
Housing & Resources / Money & Banking / Work / Entrepreneurship / Life Skills / Mentorship.

CTA: **Explore Transition Support**  
Secondary: **Refer a Young Person**

### 4. Acts of Compassion
H2: **Compassion becomes action.**

Show three action types:
- Give Time
- Give Goods
- Give a Skill or Service

CTA: **See Acts of Compassion**

### 5. Community in Action
Show 3–4 real, approved Rest Ezzz outreach items.

Priority examples from existing evidence:
- food/hygiene distribution
- neighborhood beautification
- emergency groceries/family support
- fire/disaster response

CTA: **See Community Outreach**

### 6. Causes & Events
Three cards maximum on homepage:
- upcoming first
- most recent active second
- one recent completed cause third

CTA: **View All Causes & Events**

### 7. Stories & Impact
Maximum three permissioned stories or evidence-backed impact items.
Do not display unsupported aggregate metrics.

CTA: **See Our Impact**

### 8. Get Involved
Four actions:
- Volunteer
- Sponsor / Partner
- Give Goods / Services
- Fundraise

CTA: **Get Involved**

### 9. Donate
Short high-contrast band.

H2: **Help someone move forward.**

CTA: **Donate**

### 10. Footer
Five link groups:
Get Help / Our Work / Community / Get Involved / About.

Also:
- verified phone/email/address
- social links
- Donate
- Privacy
- Accessibility
- Donor Dashboard if retained
- verified legal/nonprofit information

---

# 6. Content Publication Rule

The UX is decided. Unverified operational facts do not create alternative designs.

If a business fact is unverified:
- the layout remains fixed
- the page remains fixed
- the unverified statement is omitted
- the build uses approved neutral wording
- publication occurs only when the Foundation confirms the fact

This rule applies to:
- eligibility
- award amounts
- funeral assistance limits
- insurance assistance
- geographic service area
- sponsor benefits
- payment methods
- tax-deductibility/legal language
- direct financial assistance
- medical/educational assistance

---

# 7. Final Technology Decision

- WordPress on OVH VPS
- custom `restezzz` theme
- Gutenberg-first editing
- no Avada dependency in the new build
- retain GiveWP for donations and donor history unless migration testing proves it unusable
- current donor/database/uploads data are migrated, not reconstructed from Git
- Causes/Events, Acts of Compassion, Partners, and Stories use structured WordPress content types
- no page-builder lock-in
- no unnecessary plugin duplication

---

# 8. Final Migration Decision

Preserve the spirit and authentic content of the existing site while replacing its template-driven architecture.

KEEP / ADAPT:
- Rest on us
- community/uplift language
- mission intent
- family/loss-support identity
- authentic causes/events
- authentic outreach/social evidence
- Sponsor/Volunteer/Goods/Vendor participation model
- GiveWP donation history/infrastructure

REMOVE / RETIRE:
- Avada demo content/assets
- Leo Vetrov
- Sample Page
- duplicate About
- empty author archive
- demo SEO metadata
- demo Open Graph image
- duplicated/unclear program cards
- unsupported marketing claims

---

# 9. Build Authority

When documents conflict, implementation precedence is:

1. `FINAL-WEBSITE-BLUEPRINT.md`
2. `PAGE-SPECS.md`
3. `DESIGN-SYSTEM.md`
4. `FORMS-AND-INTERACTIONS.md`
5. `IA-JJG.md`
6. evidence/research documents

Research documents establish truth/provenance; they do not override final UX decisions.
