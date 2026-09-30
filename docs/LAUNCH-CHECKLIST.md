# Launch Checklist

## Content truth
- [ ] Mission approved
- [ ] Programs current
- [ ] Eligibility/process approved
- [ ] Contact details approved
- [ ] Donation destination/policy approved
- [ ] Legal/tax wording verified
- [ ] Partner/logo permissions checked
- [ ] No reconstructed statement presented as recovered fact

## UX
- [ ] Get Support path complete
- [ ] Referral Partner path complete
- [ ] Acts of Compassion CTA/path complete
- [ ] Donate path complete
- [ ] Volunteer/Partner paths complete or intentionally omitted
- [ ] Mobile navigation works
- [ ] 404/search behavior acceptable

## Accessibility
- [ ] Keyboard-only pass
- [ ] Focus visible
- [ ] Heading hierarchy
- [ ] Labels/errors
- [ ] Contrast
- [ ] Alt text
- [ ] Reduced motion

## OVH / WordPress
- [ ] OVH VPS hardened
- [ ] WordPress deployed
- [ ] database persistent/backed up
- [ ] uploads persistent/backed up
- [ ] PHP-FPM/web server healthy
- [ ] HTTPS valid on origin
- [ ] canonical hostnames correct
- [ ] wp-login responds
- [ ] wp-json responds
- [ ] no PHP fatal/critical error
- [ ] forms deliver successfully
- [ ] sitemap/robots/canonical correct
- [ ] redirects correct
- [ ] performance checked
- [ ] security/update process defined

## Cloudflare CLI / DNS
- [ ] Cloudflare `cf` CLI installed and version recorded
- [ ] least-privilege Cloudflare automation credentials supplied outside Git
- [ ] correct Cloudflare account and `restezzzfoundation.org` zone confirmed
- [ ] current DNS inventory saved before mutation
- [ ] apex A record confirmed at legacy `162.0.238.22` before cutover
- [ ] final OVH IPv4 confirmed from provisioned server
- [ ] OVH origin tested directly before DNS change
- [ ] exact `cf` DNS update command/schema inspected
- [ ] DNS mutation dry-run completed when supported
- [ ] apex A changed to OVH IPv4
- [ ] apex remains proxied through Cloudflare
- [ ] `www` CNAME still points to apex and is proxied
- [ ] unrelated MX/TXT/autodiscover/email/_domainconnect records unchanged
- [ ] no untested AAAA record points traffic to OVH
- [ ] public apex HTTPS smoke test passed
- [ ] public www HTTPS smoke test passed
- [ ] public wp-login/wp-json smoke tests passed
- [ ] stale Cloudflare cache purged if necessary
- [ ] rollback command/path documented
- [ ] legacy `162.0.238.22` origin retained until explicit retirement approval