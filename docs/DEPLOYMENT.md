# OVH VPS Deployment Contract

## Target
Production WordPress website for `restezzzfoundation.org` on the new OVH VPS.

## Build-agent responsibilities
1. Provision a supported PHP release, PHP-FPM, MariaDB/MySQL, and Nginx or Apache.
2. Install current WordPress core outside Git-managed theme content.
3. Configure production secrets on the server; never write credentials into this repository.
4. Deploy `wp-content/themes/restezzz` from this repository.
5. Create writable persistent `wp-content/uploads`.
6. Activate the `restezzz` theme.
7. Set HTTPS canonical URLs to `https://restezzzfoundation.org`.
8. Keep Cloudflare as the public DNS/proxy layer after origin validation.
9. Run backups before deployment changes and maintain database + uploads backups independently of Git.

## Do not overwrite
- Production database
- `wp-content/uploads`
- server secrets
- TLS/private keys

## Release principle
Git contains reproducible application/theme code and documentation. WordPress content, media and secrets persist on the server/database.
