# Content Model

## Page
title, slug, summary, body sections, primary/secondary CTA, evidence references, review owner, last reviewed.

## Transition Support Program
name, plain-language summary, audience, geography, eligibility, exclusions, support types, process, next step, privacy note, evidence IDs, review date.

## Support Area
Examples: Housing & Resources, Money & Banking, Employment, Entrepreneurship, Life Skills, Mentorship.
Fields: name, need/problem, what Rest Ezzz may do, what Rest Ezzz does not promise, examples, next step, evidence IDs.

## Transition Plan
Fields: participant-defined goals, target timeframe, action categories, resource needs, next check-in.
This is a content/process model only; do not store sensitive participant data in WordPress without an approved privacy/security workflow.

## Process Step
sequence, title, explanation, responsibility, expected next step.

## Referral Path
referrer type, eligibility notes, referral information required, consent expectations, response process, contact/CTA.

## Community Outreach Event
title, date, location, audience, purpose, supplies/services, volunteer needs, partners, CTA, media, consent status, evidence/source.

## Partner / Resource Provider
name, category, relationship description, service offered, geography, contact/URL, logo, permission/status, evidence.

## Community/Impact Item
date, title, description, metric/claim, source, image, location, participant-consent status.

## Story / Testimonial
subject, relationship to Foundation, story, quote, permission status, fact verification, media permission, evidence IDs.
Never publish without approval/consent.

## Person/Team
name, role, bio, image, publish approval.

## FAQ
question, answer, audience, related program, evidence IDs, review date.

## Legacy Program
name, historical description, current-status flag, evidence IDs. Used to preserve research on funeral/insurance assistance until current status is confirmed.

## Site Settings
approved brand/display name, legal name, phone, email, address, social URLs, donation URL, legal identifiers, footer copy.

## Provenance
Every factual content object supports:
- evidence_state
- evidence_ids
- source/approval
- last_verified
- current_status


## Act of Compassion
A lightweight, action-oriented content type for community participation.

Fields:
- title
- short need/action statement
- category: time / skill / food / essentials / service / resource / outreach
- audience or beneficiary group
- date/status
- location or service area
- what is needed
- how to participate
- quantity/goal if appropriate
- partner involved
- CTA label
- CTA destination
- image/media
- consent/privacy status
- evidence/source
- completion/update note

Use cases:
- "Provide 20 winter blankets"
- "Barbers needed for a community outreach day"
- "Sponsor meals for an outreach event"
- "Donate interview clothing"
- "Offer a professional skill or resource"

Publishing rule:
Do not expose an individual's private circumstances or identifying information in a public Act of Compassion unless appropriate consent exists. Prefer needs-based descriptions over personal case details.
