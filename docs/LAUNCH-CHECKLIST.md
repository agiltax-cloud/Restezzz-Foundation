# Launch Checklist

## Content truth
- [ ] Mission approved
- [ ] Vision approved
- [ ] Transition to Independence scope approved
- [ ] Family Relief & Loss Support scope approved or unconfirmed items omitted
- [ ] Community Outreach scope approved
- [ ] Acts of Compassion opportunities approved
- [ ] phone confirmed
- [ ] email confirmed
- [ ] public address confirmed; directory discrepancy resolved
- [ ] 501(c)(3)/EIN wording verified
- [ ] sponsor claims verified
- [ ] fee-free fundraising claim verified or removed
- [ ] Zelle/direct-payment information verified or removed
- [ ] unsupported medical/education claims removed unless confirmed
- [ ] partner/logo permissions checked
- [ ] story/photo consent checked
- [ ] sensitive founder-story content explicitly approved
- [ ] reconstructed wording not misrepresented as historical quotation

## Live-site migration
- [ ] current snapshot retained
- [ ] migration matrix complete
- [ ] all content classified
- [ ] Sample Page removed
- [ ] Avada demo content removed
- [ ] Leo Vetrov removed
- [ ] /about-2/ → /about/
- [ ] /journal/ → /contact/
- [ ] cause/event redirects complete
- [ ] blank cause pages resolved
- [ ] authentic media copied/reviewed
- [ ] generic template imagery excluded

## UX
- [ ] Get Support selector works
- [ ] Transition path works
- [ ] Family Relief path works if active
- [ ] Referral path works
- [ ] Acts of Compassion works
- [ ] Donate works
- [ ] Volunteer/Sponsor/Goods/Services paths work
- [ ] mobile nav works

## Donation/data
- [ ] GiveWP migration decision documented
- [ ] donor records backed up
- [ ] donation form configured
- [ ] test donation succeeds
- [ ] confirmation/failure pages work
- [ ] donor dashboard works or intentionally retired
- [ ] receipts/notifications verified

## Accessibility
- [ ] keyboard-only
- [ ] visible focus
- [ ] heading hierarchy
- [ ] labels/errors
- [ ] contrast
- [ ] alt text
- [ ] reduced motion

## OVH / WordPress
- [ ] OVH hardened
- [ ] WordPress deployed
- [ ] DB/uploads persistent + backed up
- [ ] web/PHP healthy
- [ ] HTTPS valid on origin
- [ ] canonical hosts correct
- [ ] wp-login/wp-json respond
- [ ] no critical errors
- [ ] forms deliver
- [ ] sitemap/robots/canonical correct
- [ ] redirects correct
- [ ] performance/security checked

## Cloudflare CLI / DNS
- [ ] `cf` installed/version recorded
- [ ] least-privilege credentials outside Git
- [ ] correct account/zone
- [ ] DNS inventory saved
- [ ] exact current apex A captured
- [ ] OVH IPv4 confirmed
- [ ] OVH origin tested
- [ ] mutation command/schema inspected
- [ ] dry-run when supported
- [ ] apex changed to OVH
- [ ] apex proxied
- [ ] `www` preserved
- [ ] mail/service DNS unchanged
- [ ] no broken AAAA
- [ ] public HTTPS smoke tests pass
- [ ] cache purged if needed
- [ ] rollback documented
- [ ] old production retained until retirement approval
