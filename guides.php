<?php
require __DIR__ . '/guide-data.php';

if (!function_exists('asset_url')) {
  function asset_url(string $path): string {
    $fullPath = __DIR__ . $path;
    $version = is_file($fullPath) ? (string) filemtime($fullPath) : '1';
    return $path . '?v=' . $version;
  }
}

if (!function_exists('esc')) {
  function esc(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
  }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Game Guides & Cricket Buzz | Yaarwin Games</title>
  <meta name="description" content="Browse Yaarwin Games guides for cricket culture, Teen Patti, Rummy, quick-play formats, Andar Bahar, strategy games, and responsible entertainment insights.">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://yaarwinapp.games/guides/">
  <meta property="og:title" content="Game Guides & Cricket Buzz | Yaarwin Games">
  <meta property="og:description" content="Browse Yaarwin Games guides for cricket culture, Teen Patti, Rummy, quick-play formats, Andar Bahar, strategy games, and responsible entertainment insights.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://yaarwinapp.games/guides/">
  <meta property="og:site_name" content="Yaarwin Games">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="theme-color" content="#07111F">
  <link rel="icon" href="<?= esc(asset_url('/assets/img/favicon.png')) ?>" type="image/png">
  <link rel="preload" href="<?= esc(asset_url('/assets/css/styles.css')) ?>" as="style">
  <link rel="stylesheet" href="<?= esc(asset_url('/assets/css/styles.css')) ?>">
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
        <a href="/">Home</a>
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
        <a class="btn btn-primary" href="/#trending">Explore Games <span aria-hidden="true" class="btn-arrow">→</span></a>
      </div>
    </nav>
  </header>

  <main id="main" class="guide-library">
    <section class="guide-library-hero section-frame">
      <p class="eyebrow">Guide library</p>
      <h1>Game Guides & Cricket Buzz</h1>
      <p class="hero-copy">Browse cricket culture, Teen Patti, Rummy, quick-play formats, strategy notes, and responsible entertainment guides built for Indian users.</p>
    </section>

    <section class="section-panel">
      <div class="guide-card-grid">
        <?php foreach ($guides as $slug => $guide): ?>
          <a class="guide-card" href="/guides/<?= esc($slug) ?>/">
            <div class="guide-card-art">
              <img src="<?= esc(asset_url('/assets/img/thumb_' . $guide['thumb'] . '.webp')) ?>" alt="" loading="lazy" decoding="async" width="640" height="360">
            </div>
            <div class="guide-card-body">
              <span><?= esc($guide['type']) ?></span>
              <h2><?= esc($guide['title']) ?></h2>
              <p><?= esc($guide['excerpt']) ?></p>
            </div>
          </a>
        <?php endforeach; ?>
      </div>
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
