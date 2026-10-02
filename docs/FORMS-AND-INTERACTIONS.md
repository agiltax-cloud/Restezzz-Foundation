# Rest Ezzz Foundation — Final Forms & Interaction Specification

**Status: AUTHORITATIVE**

## General form rules
- No document uploads at launch.
- No Social Security number.
- No government ID.
- No medical records.
- No financial statements.
- No immigration-status fields.
- No mandatory long narrative.
- All forms use explicit labels, inline errors, error summary, success confirmation, and keyboard focus management.
- CAPTCHA/anti-spam must be privacy-conscious and accessible.
- Required fields are marked in text, not color alone.

---

# 1. Request Support Form

Location: `/get-help/`

Fields:
1. First name — required
2. Last name — required
3. Email — required if phone is blank
4. Phone — required if email is blank
5. Preferred contact — Email / Phone / Text
6. City — required
7. ZIP code — required
8. Type of support — required
   - Transition to Independence
   - Family Relief & Loss Support
   - Community / Emergency Resources
9. Briefly tell us what you need — required, 1,000 character maximum
10. Consent checkbox — required

Consent copy:
**I understand this form is a request for contact, not a guarantee of financial assistance or services.**

Success state:
**Thank you. Rest Ezzz received your request. A team member will review it and contact you using your preferred method.**

No promise of response time until Foundation sets one.

---

# 2. Refer Someone Form

Location: `/get-help/refer-someone/`

Fields:
1. Your name — required
2. Organization / relationship — required
3. Email — required
4. Phone — optional
5. Person's first name — required
6. Approximate age range — optional
7. City / ZIP — required
8. Support need — required
9. Has the person agreed to be contacted by Rest Ezzz? — Yes / No / Not yet
10. Notes — optional, 1,000 characters
11. Consent checkbox — required

Do not collect detailed case notes, court records, or medical information.

---

# 3. Get Involved Form

Location: `/get-involved/`

Fields:
1. Name — required
2. Email — required
3. Phone — optional
4. Organization / business — optional
5. How do you want to help? — required
   - Volunteer
   - Give Goods
   - Provide a Skill / Service
   - Fundraise
   - Vendor Opportunity
6. Availability / contribution — required
7. Message — optional
8. Consent checkbox — required

Conditional follow-up fields appear only when relevant.

---

# 4. Sponsor & Partner Form

Location: `/get-involved/sponsor-partner/`

Fields:
1. Contact name — required
2. Organization — required
3. Email — required
4. Phone — required
5. Website — optional
6. Partnership type — required
   - Financial Sponsorship
   - In-Kind Goods
   - Professional Services
   - Event / Community Collaboration
   - Referral / Resource Partnership
7. Tell us what you can contribute — required
8. Geography / service area — optional
9. Consent checkbox — required

---

# 5. Acts of Compassion Interaction

Each opportunity has one CTA.

If the action needs registration, CTA opens a short form with:
- name
- email
- phone optional
- number of participants if relevant
- one opportunity-specific field
- consent

If the action is goods/services, CTA routes into Get Involved with the opportunity preselected.

No account creation.

---

# 6. Contact Form

Location: `/contact/`

Fields:
- Name — required
- Email — required
- Phone — optional
- Subject — required
- Message — required
- Consent — required

General contact form must not be used as support intake; help seekers are routed to Get Help.

---

# 7. Donation Flow

Technology: GiveWP.

Flow:
```text
Donate page
  ↓
GiveWP form
  ↓
Payment gateway
  ↓
Donation Confirmation
  ↓
Receipt/email
  ↓
Donor Dashboard when applicable
```

Failure:
```text
Payment failure
  ↓
Donation Failed page
  ↓
Clear retry button
  ↓
Contact route for payment problem
```

Donation form is visually integrated into the custom theme but donor/payment data remain in GiveWP/database.

---

# 8. Interaction States

Every interactive component implements:
- default
- hover
- focus-visible
- active
- disabled when applicable
- loading
- error
- success

Forms show:
- field-level error
- page-level error summary
- success confirmation
- preserved non-sensitive user input after validation failure

---

# 9. Mobile behavior
- minimum 48px tap targets
- no hover-only information
- forms use one column
- phone/email fields use appropriate input modes
- sticky bottom CTA is **not** used
- Donate remains accessible through the mobile menu
