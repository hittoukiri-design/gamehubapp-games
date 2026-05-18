<?php
require __DIR__ . '/guide-data.php';

function asset_url(string $path): string {
  $fullPath = __DIR__ . $path;
  $version = is_file($fullPath) ? (string) filemtime($fullPath) : '1';
  return $path . '?v=' . $version;
}

function esc(string $value): string {
  return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$slug = preg_replace('/[^a-z0-9-]/', '', $_GET['slug'] ?? '');
$guide = $guides[$slug] ?? null;

if (!$guide) {
  http_response_code(404);
  $guide = [
    'type' => 'Guide',
    'title' => 'Guide not found',
    'meta_title' => 'Guide not found | Yaarwin Games',
    'meta_description' => 'The requested Yaarwin Games guide could not be found.',
    'excerpt' => 'The requested guide could not be found.',
    'thumb' => 'cricket',
    'keywords' => [],
    'intro' => ['The page you requested is not available. Return to the guide library to continue browsing.'],
    'sections' => [],
    'faq' => [],
    'related' => [],
  ];
}

$canonical = $slug ? 'https://yaarwinapp.games/guides/' . $slug . '/' : 'https://yaarwinapp.games/guides/';
$relatedGuides = array_values(array_filter(array_map(fn($relatedSlug) => $guides[$relatedSlug] ?? null, $guide['related'] ?? [])));
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= esc($guide['meta_title']) ?></title>
  <meta name="description" content="<?= esc($guide['meta_description']) ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="<?= esc($canonical) ?>">
  <meta property="og:title" content="<?= esc($guide['meta_title']) ?>">
  <meta property="og:description" content="<?= esc($guide['meta_description']) ?>">
  <meta property="og:type" content="article">
  <meta property="og:url" content="<?= esc($canonical) ?>">
  <meta property="og:site_name" content="Yaarwin Games">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="theme-color" content="#07111F">
  <link rel="icon" href="<?= esc(asset_url('/assets/img/favicon.png')) ?>" type="image/png">
  <link rel="preload" href="<?= esc(asset_url('/assets/css/styles.css')) ?>" as="style">
  <link rel="stylesheet" href="<?= esc(asset_url('/assets/css/styles.css')) ?>">
  <?php if (!empty($guide['faq'])): ?>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      <?php foreach ($guide['faq'] as $index => $faq): ?>
      {
        "@type": "Question",
        "name": "<?= esc($faq[0]) ?>",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<?= esc($faq[1]) ?>"
        }
      }<?= $index < count($guide['faq']) - 1 ? ',' : '' ?>
      <?php endforeach; ?>
    ]
  }
  </script>
  <?php endif; ?>
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>
  <header class="site-header" id="top">
    <nav class="nav-shell" aria-label="Primary navigation">
      <a class="brand" href="/" aria-label="Yaarwin Games home">
        <img class="brand-logo" src="<?= esc(asset_url('/assets/img/yaarwin-games-logo.webp')) ?>" alt="Yaarwin Games" width="224" height="90" decoding="async">
      </a>
      <button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
      <div class="nav-links" id="primary-menu">
        <a href="/#cricket">Cricket</a>
        <a href="/#trending">Trending Games</a>
        <a href="/guides/">Guides</a>
        <a href="/#safety">Safety</a>
        <a href="/#blog">Blog</a>
      </div>
      <div class="nav-actions">
        <a class="search-btn" href="/guides/" aria-label="Browse guides">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M10.8 18.1a7.3 7.3 0 1 1 5.2-2.1l4 4-1.6 1.6-4-4a7.2 7.2 0 0 1-3.6.5Zm0-2.4a4.9 4.9 0 1 0 0-9.8 4.9 4.9 0 0 0 0 9.8Z"/></svg>
        </a>
        <a class="btn btn-primary" href="/guides/">Explore Games <span aria-hidden="true" class="btn-arrow">→</span></a>
      </div>
    </nav>
  </header>

  <main id="main" class="guide-page">
    <section class="guide-hero section-frame">
      <div class="guide-hero-copy">
        <p class="eyebrow"><?= esc($guide['type']) ?></p>
        <h1><?= esc($guide['title']) ?></h1>
        <p class="hero-copy"><?= esc($guide['excerpt']) ?></p>
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a>
          <span aria-hidden="true">/</span>
          <a href="/guides/">Guides</a>
          <span aria-hidden="true">/</span>
          <span><?= esc($guide['title']) ?></span>
        </nav>
      </div>
      <div class="guide-hero-art">
        <img src="<?= esc(asset_url('/assets/img/thumb_' . $guide['thumb'] . '.webp')) ?>" alt="<?= esc($guide['title']) ?>" width="640" height="360" decoding="async">
      </div>
    </section>

    <section class="guide-layout section-panel">
      <article class="guide-content">
        <?php foreach ($guide['intro'] as $paragraph): ?>
          <p><?= esc($paragraph) ?></p>
        <?php endforeach; ?>

        <?php foreach ($guide['sections'] as $section): ?>
          <section>
            <h2><?= esc($section['heading']) ?></h2>
            <?php foreach ($section['body'] ?? [] as $paragraph): ?>
              <p><?= esc($paragraph) ?></p>
            <?php endforeach; ?>
            <?php if (!empty($section['items'])): ?>
              <ul>
                <?php foreach ($section['items'] as $item): ?>
                  <li><?= esc($item) ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </section>
        <?php endforeach; ?>

        <aside class="guide-cta">
          <p class="eyebrow">Independent guide notice</p>
          <h2>Want to review the current registration path?</h2>
          <p>This article is an independent guide. If you choose to continue beyond reading, review the latest terms carefully and use the current registration path only after checking whether the platform suits you.</p>
          <a class="btn btn-primary" href="https://yaarwin.org/#/register?invitationCode=72238107987" rel="nofollow sponsored noopener" target="_blank">Open registration path <span aria-hidden="true" class="btn-arrow">→</span></a>
        </aside>

        <?php if (!empty($guide['faq'])): ?>
        <section class="guide-faq">
          <h2>Frequently asked questions</h2>
          <?php foreach ($guide['faq'] as $faq): ?>
            <details>
              <summary><?= esc($faq[0]) ?></summary>
              <p><?= esc($faq[1]) ?></p>
            </details>
          <?php endforeach; ?>
        </section>
        <?php endif; ?>
      </article>

      <aside class="guide-sidebar">
        <div class="sidebar-card">
          <h2>Quick links</h2>
          <a href="/guides/cricket-games-india/">Cricket guide</a>
          <a href="/guides/teen-patti-india/">Teen Patti guide</a>
          <a href="/guides/rummy-india/">Rummy guide</a>
          <a href="/guides/live-match-hub/">Live Match Hub</a>
          <a href="/#safety">Responsible play</a>
        </div>
        <div class="sidebar-card">
          <h2>Related guides</h2>
          <?php foreach ($relatedGuides as $related): ?>
            <a href="/guides/<?= esc(array_search($related, $guides, true)) ?>/"><?= esc($related['title']) ?></a>
          <?php endforeach; ?>
        </div>
      </aside>
    </section>
  </main>

  <footer class="site-footer">
    <div class="footer-brand">
      <a class="brand footer-logo-link" href="/" aria-label="Yaarwin Games home">
        <img class="brand-logo footer-logo" src="<?= esc(asset_url('/assets/img/yaarwin-games-logo.webp')) ?>" alt="Yaarwin Games" width="260" height="105" loading="lazy" decoding="async">
      </a>
      <p>Your independent hub for cricket culture, trending games & digital entertainment content — made for India.</p>
    </div>
    <div class="footer-col">
      <h2>Explore</h2>
      <a href="/#cricket">Cricket</a>
      <a href="/#trending">Trending Games</a>
      <a href="/guides/">Game Guides</a>
      <a href="/#cricket">Cricket Guides</a>
    </div>
    <div class="footer-col">
      <h2>Company</h2>
      <a href="/">About Us</a>
      <a href="/">Contact Us</a>
      <a href="/guides/">Blog</a>
    </div>
    <div class="footer-col">
      <h2>Support</h2>
      <a href="/#safety">Safety</a>
      <a href="/#safety">Responsible Play</a>
      <a href="/">Privacy Policy</a>
      <a href="/">Terms & Conditions</a>
    </div>
    <div class="note-box">
      <h2>Important Note</h2>
      <p>Yaarwin Games is an independent entertainment and game-information hub. We do not operate games, account systems, payment flows, or prize services.</p>
    </div>
    <p class="copyright">© 2026 Yaarwin Games. All rights reserved.</p>
  </footer>
  <script src="<?= esc(asset_url('/assets/js/site.js')) ?>" defer></script>
</body>
</html>
