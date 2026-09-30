# Live Site Audit — September 30, 2026

## Status
The production site at `https://restezzzfoundation.org/` is responding successfully from an external GitHub Actions runner and has been captured into this repository at:

- `docs/research/live-site-snapshot/LIVE-SITE-CONTENT.md`
- `docs/research/live-site-snapshot/pages.json`
- `docs/research/live-site-snapshot/wp-pages.json`
- `docs/research/live-site-snapshot/wp-media.json`
- `docs/research/live-site-snapshot/wp-give-forms.json`
- `docs/research/live-site-snapshot/crawl-status.json`

This audit records what is actually published now. "Published" does not automatically mean "operationally current"; service promises still need owner confirmation before the rebuilt site repeats them.

## Current WordPress facts

- Site name returned by WordPress REST: **Restezzz Froundation** — typo to correct in rebuild.
- Site description: **Helping hands in times of loss**.
- Front page ID: **862**.
- 12 published WordPress pages were returned by the public REST API.
- No standard blog posts were returned.
- 72 media items were returned.
- GiveWP donation form post type is active; form ID **1207**, title **Donation Form**, published 2025-02-05 and modified 2025-02-10.
- REST namespaces show current dependencies/features including GiveWP, Contact Form 7, WPForms, Avada Builder (`awb`), and Instagram-feed functionality.

## Current primary navigation

```text
HOME | ABOUT | SPONSOR | CAUSES | CONTACT | DONATE
```

## Current contact details published by the site

- Phone: **+1 714-340-8244**
- Email: **lucy@restezzzfoundation.org**
- Website-published address: **4160 Temescal Canyon Rd, Suite 401, Corona, CA 92883**
- Footer states: **RestEzzz Foundation - 501(c)(3) 92-0817848 - 2026**

### Accuracy caution
Third-party nonprofit directories also associate Rest Ezzz with `4160 Temescal Canyon Rd Suite 401`, but some list the city/ZIP as Orange, CA 92867. The rebuild must confirm the correct public mailing/business address before launch.

The EIN / 501(c)(3) footer statement is current first-party published content but should be verified against the Foundation's IRS determination/TEOS record before being treated as legally verified website copy.

## Current homepage content

### Existing brand language worth preserving/adapting
- **Rest on us…**
- **MAKE A DIFFERENCE**
- **A Trusted Platform Where Communities Unite to Support, Uplift, and Care for Those in Need**
- **Our Commitment to the Community**
- **We Bring Comfort in Difficult Times**
- **There's no exercise better for the heart than reaching down and lifting people up**
- **Together we make all the difference**

### Existing values / commitments
- Lasting Community Impact
- Commitment to Transparency
- Meaningful Collaborations
- Innovation and Adaptability
- Active Community Engagement

These are suitable inputs for the new values/brand system after editorial review.

### Existing homepage program labels
- Recovery Program
- Family United programs
- Hope Program

All three currently display the same funeral-expense description. Do not assume they are three distinct active programs until the Foundation confirms their definitions. In the new architecture they should be merged, renamed, or retired unless each has a real operational purpose.

### Existing funeral/loss-support promises
The site currently publishes:
- Provide Financial Relief — funeral-expense burden
- Supportive Community
- Fundraising Campaigns
- Ease the Funeral Process

The About page additionally says the organization provides:
- life insurance assistance
- financial aid for families coping with loss
- food drives
- clothing and shoe donations
- spiritual guidance

This is strong evidence that loss/family relief is part of Rest Ezzz's public history and current published identity. The founder interview adds a newer strategic focus on foster-youth transition support. The rebuild should integrate both rather than silently deleting either.

## Current About content

### Published organization description
Rest Ezzz describes itself as an **outreach nonprofit organization** providing broad community support.

### Published mission
> To inspire, nurture, and give Hope to the human spirit by our Rest one family and neighborhood at a time.

The wording has grammatical issues but contains a strong authentic idea: **uplifting the human spirit one family and neighborhood at a time**.

### Published vision
> With every holding hand, every conversation, impacts a divine connection with endless smiles.

The rebuild should preserve the intended meaning while rewriting for clarity, subject to Foundation approval.

### Leadership
- **Lucy Andrade — Executive Director** is published on the About page.

## Current causes/events

The live site lists:
- Turkey Donations
- Sparkle of Love Toy Drive / Sparkle of Love Toy Giveaway
- Rimpau Park
- World Kindness Carnival
- Leo Vetrov

**Leo Vetrov** is an Avada Charity demo/template artifact and should be retired.

Several cause detail pages are effectively empty shells. Event/cause content should be rebuilt from authentic media, first-party posts and confirmed event history rather than preserving blank template pages.

## Sparkle of Love interaction model

The current Sparkle of Love form allows supporters to choose:
- Donate Funds
- Donate Goods
- Volunteer
- Be a Sponsor
- Be a Vendor

This is an excellent interaction model to reuse under **Get Involved** and **Acts of Compassion**.

The page also publishes a Zelle instruction tied to a phone number. Any direct-payment detail must be re-confirmed before migration.

## Current Sponsor page

Useful existing concepts:
- sponsorship expands reach
- public recognition
- event participation
- partnership with community initiatives
- contact/form follow-up

Claims requiring confirmation before reuse:
- "medical assistance"
- "educational programs"
- "community development"
- exclusive impact reports / networking benefits
- exact sponsor-benefit package

The sponsor page also repeats funeral/loss content from About, so it should be structurally simplified in the new build.

## Current fundraising language

The current Contact/Journal page says:
> Our platform offers a fee-free fundraising experience, with no upfront or maintenance costs.

Do not republish this claim unless Rest Ezzz actually operates that fundraising platform and can support the promise.

## Current donation infrastructure

The site has:
- `/donate/`
- GiveWP form ID 1207
- `/donor-dashboard/`
- `/donation-confirmation/`
- `/donation-failed/`

These should be evaluated as a functional migration set. Donation records and donor data are runtime/database data and must never be lost during migration.

## Current social / community evidence embedded on homepage

The homepage embeds 20 Instagram items from `@rest.ezzz` dated January–March 2025. The embedded first-party captions document real community activity, including:

- Anaheim Buena Clinton beautification cleanup with city code-enforcement collaboration and volunteer recruitment
- Santa Ana recreational-facility garden support and volunteer recruitment
- fundraising raffle for community members facing homelessness and low income
- hot chocolate and pastries distributed on streets of Santa Ana
- Project Coffee Cup collaboration distributing hygiene/food packets, clothing, shoes, backpacks and books
- collaboration with Saturated in His Love Foundation
- request for roofing materials/volunteers for a family
- emergency grocery assistance for a family
- Panda Express fundraiser for community services
- Los Angeles fire-response outreach with resources, services and water
- repeated "uplift the human spirit" / positivity messages

This social evidence strongly validates **Community Outreach** and **Acts of Compassion** as real Rest Ezzz pillars rather than newly invented concepts.

### Founder-story caution
One embedded Instagram caption publicly references Lucy Andrade as a survivor of human trafficking. That is sensitive personal history. Do not automatically migrate it into the founder story. Use only with Lucy's explicit approval for the new site.

## Media-library audit

Current REST response contains 72 media items:
- 42 from 2016
- 5 from 2017
- 2 from 2021
- 1 from 2023
- 22 from 2024

A large portion of the 2016/2017 library is Avada Charity demo/template media and should not be treated as Rest Ezzz-owned historical brand material.

More likely Rest Ezzz-specific/current assets include 2024 files such as:
- `re_logo.png`
- `cropped-re_logo.png`
- Toy Drive Event flyer
- World Kindness Carnival flyer
- current event/community images
- current donation graphic
- funeral/loss imagery uploaded in 2024

All imagery must still be reviewed for ownership/permission and relevance to the new brand.

## Pages to retire or redirect

- `/sample-page/` — WordPress sample content; delete/410 or redirect appropriately.
- `/author/admin/` — empty author archive; noindex/disable or redirect.
- duplicate About page `/about-2/` — consolidate into canonical About page and 301 redirect.
- `Leo Vetrov` cause — Avada demo/template artifact; remove.
- empty cause detail pages should be populated with real content or redirected to the new causes/events archive.

## Current-state conclusion

The live site establishes a broader identity than the founder interview alone:

1. **Transition to Independence** — current strategic priority from founder interview.
2. **Family Relief & Loss Support** — strongly represented on current live site and partner evidence.
3. **Community Outreach** — strongly demonstrated by social activity and site causes.
4. **Acts of Compassion** — directly supported by real outreach behavior and the site's heart/lifting language.
5. **Sponsors / Partners / Volunteers / Fundraising** — existing participation mechanisms worth preserving and improving.

The new website should integrate all five into one coherent system rather than choosing between the old site and the new direction.
