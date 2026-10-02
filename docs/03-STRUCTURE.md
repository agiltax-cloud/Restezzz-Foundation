# Plane 3 — Structure

**Status: FINAL**

## Primary navigation
```text
GET HELP | OUR WORK | COMMUNITY | GET INVOLVED | ABOUT | [ DONATE ]
```

Contact appears in the utility area and footer.

## Final sitemap
```text
HOME
├── GET HELP                         /get-help/
│   └── Refer Someone               /get-help/refer-someone/
├── OUR WORK                         /our-work/
│   ├── Transition to Independence  /our-work/transition-to-independence/
│   ├── Family Relief               /our-work/family-relief/
│   └── Community Outreach          /our-work/community-outreach/
├── COMMUNITY                        /community/
│   ├── Acts of Compassion          /community/acts-of-compassion/
│   ├── Causes & Events             /community/causes-events/
│   ├── Stories & Impact            /community/stories-impact/
│   └── Community Partners          /community/partners/
├── GET INVOLVED                     /get-involved/
│   └── Sponsor & Partner           /get-involved/sponsor-partner/
├── ABOUT                            /about/
│   ├── Founder Story               /about/founder/
│   └── Transparency                /about/transparency/
├── DONATE                           /donate/
└── CONTACT                          /contact/

UTILITY
├── Privacy                          /privacy/
├── Accessibility                    /accessibility/
├── Donor Dashboard
├── Donation Confirmation
├── Donation Failed
└── 404
```

## Structural rules
- No separate FAQ page; FAQ accordions live in context.
- No separate Volunteer/Goods/Fundraise/Vendor pages; those are sections of Get Involved.
- No global site search at launch.
- No blog/journal.
- Breadcrumbs appear on every interior page except Donate utility pages.
- Events use one archive + one detail template.
- Stories use one archive + one detail template.
- Partner directory is separate from partnership acquisition.

## Core journeys
### Help seeker
Home → Get Help → relevant program context → Request Support

### Referral
Home/Get Help → Refer Someone → Submit Referral

### Youth transition
Home → Transition to Independence → Request Support / Refer Someone

### Compassion participant
Home/Community → Acts of Compassion → Opportunity → Take Action

### Event participant
Community → Causes & Events → Event → Participate

### Partner
Get Involved → Sponsor & Partner → Start a Partnership

### Donor
Home/Program/Impact → Donate → GiveWP → Confirmation

## Redirect decisions
- `/about-2/` → `/about/`
- `/journal/` → `/contact/`
- `/sponsor/` → `/get-involved/sponsor-partner/`
- `/causes/` → `/community/causes-events/`
- Sparkle duplicate URLs → one canonical event detail URL
- `/sample-page/` → 410
- `/author/admin/` → disabled/noindex
