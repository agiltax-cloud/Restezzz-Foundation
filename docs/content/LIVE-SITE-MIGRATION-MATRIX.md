# Live Website Content Inventory / Migration Matrix

**Live capture date:** 2026-09-30  
**Source snapshot:** `docs/research/live-site-snapshot/`

| Source/page | Current content | Decision | New destination | Verification |
|---|---|---|---|---|
| Home | "Rest on us…" | KEEP | Hero / brand language | editorial only |
| Home | "A Trusted Platform Where Communities Unite to Support, Uplift, and Care for Those in Need" | ADAPT | Home / About | editorial |
| Home | Community commitment + five values | KEEP/ADAPT | About / Values | confirm values |
| Home | Recovery Program | VERIFY/MERGE | Family Relief | define program |
| Home | Family United programs | VERIFY/MERGE | Family Relief | define program |
| Home | Hope Program | VERIFY/MERGE | Family Relief | define program |
| Home | Funeral expense description repeated on 3 cards | MERGE | Family Relief & Loss Support | confirm current service |
| Home | Recent Causes & Events | KEEP | Community / Causes & Events | enrich content |
| Home | Embedded @rest.ezzz feed | KEEP/CURATE | Community / Stories / Acts | media permission |
| Home | Provide Financial Relief | ADAPT | Family Relief | confirm program |
| Home | Supportive Community | KEEP/ADAPT | Community | none |
| Home | Fundraising Campaigns | ADAPT | Get Involved / Fundraise | confirm workflow |
| Home | Ease Funeral Process | ADAPT | Family Relief | confirm workflow |
| About | Outreach nonprofit description | KEEP/EXPAND | About / Who We Are | add foster-transition pillar |
| About | life-insurance assistance | VERIFY | Family Relief | operational confirmation |
| About | financial aid for families coping with loss | VERIFY | Family Relief | criteria/limits |
| About | food drives | KEEP | Community Outreach | supported by social evidence |
| About | clothing/shoe donations | KEEP | Community Outreach | supported by social evidence |
| About | spiritual guidance | VERIFY | About / Support | define scope |
| About | current mission | KEEP ESSENCE / EDIT | Mission | approval |
| About | current vision | KEEP ESSENCE / EDIT | Vision | approval |
| About | Lucy Andrade • Executive Director | KEEP if current | About / Founder | confirm title |
| About | heart/lifting quote | KEEP | Acts of Compassion / brand | attribution review |
| About-2 | duplicate About | RETIRE/301 | /about/ | none |
| Sponsor | sponsor relationship | KEEP/ADAPT | Get Involved / Sponsor | define packages |
| Sponsor | public recognition / event access / impact reports | VERIFY | Sponsor benefits | operational confirmation |
| Sponsor | food provision | KEEP/ADAPT | Community | supported elsewhere |
| Sponsor | educational programs | VERIFY | Programs | do not promise yet |
| Sponsor | medical assistance | VERIFY | Programs | do not promise yet |
| Sponsor | community development | ADAPT | Community | define |
| Sponsor/Journal | fee-free fundraising | VERIFY/RETIRE | Fundraise | confirm platform |
| Causes | Turkey Donations | KEEP | Causes & Events | gather details/media |
| Causes | Sparkle of Love Toy Drive | KEEP | Causes & Events | gather details/media |
| Causes | Rimpau Park | KEEP/VERIFY | Causes & Events | detail page empty |
| Causes | World Kindness Carnival | KEEP | Causes & Events | gather details/media |
| Causes | Leo Vetrov | RETIRE | none | Avada demo |
| Sparkle | Donate Funds / Goods / Volunteer / Sponsor / Vendor | KEEP | Acts / Get Involved | strong reusable model |
| Sparkle | Zelle phone | VERIFY | event payment option | confirm active recipient |
| Donate | Donate page | KEEP/REBUILD | Donate | replace weak content |
| GiveWP | Form ID 1207 | KEEP/MIGRATE | Donate | payment config + data migration |
| GiveWP | donor dashboard / confirmation / failed | KEEP/MIGRATE | utility | migration QA |
| Journal | contact copy | MOVE/ADAPT | Contact | keep useful copy |
| Journal | phone | KEEP IF CURRENT | Contact | confirm |
| Journal | email lucy@restezzzfoundation.org | KEEP IF CURRENT | Contact | confirm mailbox |
| Journal | address | VERIFY | Contact | site/directory conflict |
| Sample Page | WordPress demo content | RETIRE | none | delete |
| author/admin | empty archive | RETIRE/NOINDEX | none | technical |

## Embedded social evidence → new architecture

| Date (UTC) | Activity | New destination |
|---|---|---|
| 2025-03-11 | Anaheim Buena Clinton beautification cleanup + volunteers | Acts of Compassion / Events |
| 2025-03-10 | Santa Ana recreation garden support + volunteers | Community Outreach |
| 2025-03-10 | community raffle for homelessness/low-income support | Fundraise / Causes |
| 2025-02-25 | hot chocolate/pastries on Santa Ana streets | Acts of Compassion |
| 2025-02-24 | Project Coffee Cup food/hygiene support | Community Outreach |
| 2025-02-24 | food, hygiene, clothes, shoes, backpacks, books with partners | Impact / Partners |
| 2025-02-20 | roofing materials/volunteers for family | Acts of Compassion |
| 2025-02-15 | emergency groceries for family | Acts of Compassion |
| 2025-02-03 | Panda Express community-services fundraiser | Fundraise |
| 2025-01-10 | LA fire-response resources/services/water | Emergency Outreach |

## Redirect baseline

```text
/about-2/                      → /about/
/journal/                      → /contact/
/sponsor/                      → /get-involved/sponsor-partner/
/causes/                       → /community/causes-events/
/sparkle-of-love/              → /community/causes-events/sparkle-of-love/
/causes/sparkle-of-love-toy-giveaway/ → canonical Sparkle event URL
/sample-page/                  → 410 or safe redirect
/author/admin/                 → noindex/disable or safe redirect
```

Preserve donation utility routes if GiveWP remains the donation system.
