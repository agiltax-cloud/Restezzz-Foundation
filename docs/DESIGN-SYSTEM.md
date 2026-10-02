# Rest Ezzz Foundation — Final Design System

**Status: AUTHORITATIVE SURFACE DECISION**

The design system is based on the current Rest Ezzz logo's actual dominant green (`#02A680`) and the organization's authentic themes of comfort, compassion, community action, and forward movement.

---

# 1. Color System

## Brand
- **Rest Ezzz Green:** `#02A680`
  - logo/accent color
  - decorative accents
  - large text/icons where contrast permits

- **Action Green:** `#007C60`
  - primary buttons
  - text links requiring stronger contrast
  - active states

- **Deep Teal:** `#133C38`
  - dark section backgrounds
  - footer
  - major headings on light surfaces

## Neutrals
- **Ink:** `#1E2933`
- **Muted Text:** `#5D6868`
- **Warm Cream:** `#F7F5EF`
- **Soft Mint:** `#E8F6F2`
- **Light Gray:** `#EEF1F0`
- **White:** `#FFFFFF`

## Compassion Accent
- **Warm Coral:** `#E56B5D`
  - limited use for Acts of Compassion/event accents
  - not used for primary buttons

## Functional
- **Focus Blue:** `#0B63CE`
- **Error:** `#B42318`
- **Warning:** `#9A6700`
- **Success:** `#007C60`

## Contrast rule
- White text is never placed on `#02A680` for normal-sized body/button text.
- Primary button uses `#007C60` with white text.
- Logo green on white is used as a brand accent.

---

# 2. Typography

Self-host open-source webfonts.

## Headings
**Manrope**
- 700 for H1/H2
- 650/700 for H3/H4

## Body / UI
**Source Sans 3**
- 400 body
- 600 labels/buttons
- 700 emphasis only where needed

## Scale
- Display/H1: `clamp(2.75rem, 6vw, 4.75rem)`, line-height 1.02
- H2: `clamp(2rem, 4vw, 3rem)`, line-height 1.1
- H3: `1.5rem`, line-height 1.25
- H4: `1.25rem`, line-height 1.3
- Lead: `1.25rem`, line-height 1.6
- Body: `1.0625rem`, line-height 1.65
- Small: `0.9375rem`, line-height 1.5

Maximum paragraph measure: **70 characters**.

---

# 3. Layout

## Container
Maximum content width: **1200px**.

## Reading column
Maximum prose width: **760px**.

## Grid
- Desktop: 12 columns
- Tablet: 6 columns
- Mobile: 4 columns

## Breakpoints
- Mobile: under 640px
- Tablet: 640–899px
- Desktop: 900–1199px
- Wide: 1200px+

## Section spacing
- Desktop: 96px vertical
- Tablet: 72px
- Mobile: 56px

---

# 4. Spacing Scale

Use only:
`4 / 8 / 12 / 16 / 24 / 32 / 48 / 64 / 96` px.

No arbitrary one-off spacing values unless required for optical alignment.

---

# 5. Shape / Elevation

- Buttons: 10px radius
- Form fields: 8px radius
- Cards: 16px radius
- Large media panels: 24px radius
- Pills/status labels: 999px radius

Card border: `1px solid #DDE4E1`.

Default shadow:
`0 8px 24px rgba(19,60,56,.08)`

Hover shadow:
`0 12px 32px rgba(19,60,56,.12)`

No heavy/glossy Avada-style shadows.

---

# 6. Buttons

## Primary
Background `#007C60`  
Text white  
Min height 48px  
Padding 14px 22px

## Secondary
White background  
2px `#007C60` border  
Text `#007C60`

## Tertiary
Text link + directional arrow.

## Donate button
Same primary style; label always **Donate**.

## Focus
3px `#0B63CE` focus ring with 2px offset.

---

# 7. Header

Desktop:
- height 80px
- logo left
- nav right
- Donate button last
- Contact shown as utility text link

Header becomes 68px after scroll but does not hide.

Mobile:
- logo
- Donate text button
- menu trigger
- full-screen/large-sheet menu
- nested sections use accordion disclosure

---

# 8. Cards

## Program Card
Icon/illustration, title, 2–3 line description, text CTA.

## Act of Compassion Card
Status pill, title, location/date, short need, CTA.

## Event Card
Image 4:3, status/date, title, location, CTA.

## Story Card
Image 4:3, category, title, excerpt.

## Partner Card
Logo or name, contribution type, short description.

No entire-card hidden hover interactions. Links remain visible.

---

# 9. Imagery

Priority:
1. Authentic Rest Ezzz photography
2. Authentic community/event imagery
3. Purpose-shot transition/mentorship photography
4. Carefully selected stock only when necessary

Avoid:
- Avada demo imagery
- staged grief clichés
- helpless beneficiary imagery
- imagery implying services Rest Ezzz does not provide

## Aspect ratios
- Hero: 16:9 or 3:2 crop
- Cards: 4:3
- Stories: 4:3
- Partner logos: contained, uncropped
- Founder portrait: 4:5

Use image focal-point controls in WordPress.

---

# 10. Iconography

Use one consistent outline icon family, 2px stroke, rounded joins.

Icons support meaning but never replace text labels.

---

# 11. Motion

- 150–200ms transitions
- opacity/transform only
- no parallax
- no autoplay carousel
- no scroll-jacking
- no decorative animation required to understand content
- honor `prefers-reduced-motion`

---

# 12. Forms

- one-column layout by default
- labels above fields
- 48px minimum field height
- helper text below labels
- error text below field
- error summary above form
- success panel uses Soft Mint background
- never use placeholder text as the only label

---

# 13. Accessibility

Target **WCAG 2.2 AA**.

Required:
- keyboard complete
- skip link
- semantic landmarks
- visible focus
- color-independent states
- descriptive links
- accessible accordions
- accessible menu
- form error recovery
- 200% text zoom support
- touch targets 48px minimum
