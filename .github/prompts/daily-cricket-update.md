You are updating the yaarwinapp.games repository.

Goal: keep cricket content fresh without misleading claims.

Safety boundary:
- This job may update only `index.php`, `guide-data.php`, `sitemap.xml`, and guide thumbnail assets named `assets/img/thumb_*`.
- Do not edit `.htaccess`, `guide.php`, `guides.php`, `assets/css/`, `assets/js/`, analytics/conversion tags, runtime visit data, the `?ywag_admin=1` counter, or deployment configuration.
- Preserve the homepage title/H1, router, `guide-data.php` include, Google Ads markers, JSON-LD marker, and visitor counter logic.
- Every guide must keep required fields, valid related slugs, and an existing WebP thumbnail. If that cannot be satisfied within the allowed files, report `blocked_by_guard`.

Workflow:
1. Verify the latest completed IPL/cricket result and upcoming schedule from current reliable sources.
2. Update the homepage cricket scoreboard in `index.php` when the displayed score, match context, or upcoming watchlist is stale.
3. Update cricket guide/article content in `guide-data.php`, especially `live-match-hub` and `ipl-2026-key-matches`, when there is a new completed result or important upcoming fixture.
4. Update `sitemap.xml` lastmod dates only for pages whose content changed.
5. Keep the site positioned as an independent cricket culture, match context, and responsible entertainment guide. Do not use guaranteed-win language or fake final scores.
6. If a match is in progress or a final score is uncertain, use wording like "live context", "latest note", or "watchlist" instead of declaring a result.
7. Validate changed PHP files with `php -l` and check the final diff.

If no cricket update is needed, leave files unchanged.
