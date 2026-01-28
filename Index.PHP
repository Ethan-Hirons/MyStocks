<?php
// You can later replace these with real session/user data
$isLoggedIn = false;
$userName = "You";
$profileImg = "assets/profile-placeholder.jpg"; // put an image here or keep placeholder
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MyStocks</title>
  <link rel="stylesheet" href="css/Index.css">

</head>

<script src="js/Index.js"></script>

<body>
  <!-- Background decoration -->
  <div class="bg">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="grid"></div>
    <div class="noise"></div>
  </div>

  <!-- Header -->
  <header class="topbar" id="topbar">
    <div class="topbar-inner">
      <!-- Left: optional nav / menu -->
      <div class="left">
        <button class="icon-btn" aria-label="Open menu">
          <span class="icon">☰</span>
        </button>
      </div>

      <!-- Center: MyStocks -->
      <div class="center">
        <a class="brand" href="#">
          <span class="brand-mark">◆</span>
          <span class="brand-text">MyStocks</span>
        </a>
      </div>

      <!-- Right: Profile -->
      <div class="right">
        <div class="profile">
          <img class="avatar" src="<?= htmlspecialchars($profileImg) ?>" alt="Profile" />
          <div class="profile-meta">
            <span class="hello">Hi,</span>
            <span class="name"><?= htmlspecialchars($userName) ?></span>
          </div>
          <button class="icon-btn" aria-label="Profile menu">
            <span class="icon">▾</span>
          </button>
        </div>
      </div>
    </div>
  </header>

  <main>
    <!-- Hero -->
    <section class="hero section">
      <div class="container hero-grid">
        <div class="hero-left reveal">
          <div class="pill">
            <span class="dot"></span>
            Built for tracking & insight
          </div>

          <h1 class="hero-title">
            Track your portfolio with
            <span class="grad">clarity</span> and
            <span class="grad2">speed</span>.
          </h1>

          <p class="hero-sub">
            MyStocks helps you monitor holdings, watchlist stocks, and understand performance
            with a clean dashboard and smart summaries — without the clutter.
          </p>

          <div class="cta-row">
            <a class="btn primary" href="<?= $isLoggedIn ? 'dashboard.php' : 'register.php' ?>">
              Get Started
              <span class="btn-glow"></span>
            </a>
            <a class="btn ghost" href="#features">Explore Features</a>
          </div>

          <div class="trust">
            <div class="trust-item">
              <span class="trust-big">Fast</span>
              <span class="trust-small">lightweight UI</span>
            </div>
            <div class="trust-item">
              <span class="trust-big">Private</span>
              <span class="trust-small">your data, your control</span>
            </div>
            <div class="trust-item">
              <span class="trust-big">Simple</span>
              <span class="trust-small">built for daily use</span>
            </div>
          </div>
        </div>

        <!-- Hero Right: Preview Card -->
        <div class="hero-right reveal">
          <div class="preview-card">
            <div class="preview-top">
              <div class="mini-title">Portfolio Snapshot</div>
              <div class="mini-badge">Demo</div>
            </div>

            <div class="preview-metrics">
              <div class="metric">
                <div class="label">Portfolio Value</div>
                <div class="value">€12,450.20</div>
              </div>
              <div class="metric">
                <div class="label">Today</div>
                <div class="value up">+€124.10 <span class="pct">(+1.01%)</span></div>
              </div>
            </div>

            <div class="chart">
              <div class="chart-line"></div>
              <div class="chart-line l2"></div>
              <div class="chart-line l3"></div>
              <div class="chart-path"></div>
              <div class="chart-glow"></div>
            </div>

            <div class="table">
              <div class="row head">
                <span>Ticker</span><span>Qty</span><span>P/L</span>
              </div>
              <div class="row">
                <span class="ticker">NVDA</span><span>0.85</span><span class="up">+3.2%</span>
              </div>
              <div class="row">
                <span class="ticker">PLTR</span><span>1.95</span><span class="up">+1.1%</span>
              </div>
              <div class="row">
                <span class="ticker">CVX</span><span>0.78</span><span class="down">-0.4%</span>
              </div>
            </div>

            <div class="preview-actions">
              <button class="chip">Watchlist</button>
              <button class="chip">Holdings</button>
              <button class="chip">News</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Features -->
    <section class="section" id="features">
      <div class="container">
        <div class="section-head reveal">
          <h2>Everything you need, nothing you don’t</h2>
          <p>Start simple. Add power features as you build the app.</p>
        </div>

        <div class="cards">
          <article class="card reveal">
            <div class="card-icon">📈</div>
            <h3>Portfolio Tracking</h3>
            <p>Track holdings, average cost, total value, and daily change in one clean view.</p>
          </article>

          <article class="card reveal">
            <div class="card-icon">👀</div>
            <h3>Watchlist</h3>
            <p>Save tickers, set price alerts (later), and keep targets organized.</p>
          </article>

          <article class="card reveal">
            <div class="card-icon">📰</div>
            <h3>News & Updates</h3>
            <p>See headlines by ticker so you know what’s moving your portfolio.</p>
          </article>

          <article class="card reveal">
            <div class="card-icon">🔒</div>
            <h3>Account & Privacy</h3>
            <p>Login-based experience with clean user settings and personal preferences.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- About / CTA -->
    <section class="section">
      <div class="container">
        <div class="cta-block reveal">
          <div class="cta-left">
            <h2>Build your investing workflow</h2>
            <p>
              MyStocks is designed to feel like a real fintech product — sleek UI, fast pages,
              and features that scale from beginner to advanced.
            </p>
            <div class="cta-row">
              <a class="btn primary" href="<?= $isLoggedIn ? 'dashboard.php' : 'login.php' ?>">
                <?= $isLoggedIn ? "Go to Dashboard" : "Log In" ?>
                <span class="btn-glow"></span>
              </a>
              <a class="btn ghost" href="#footer">Tech Stack</a>
            </div>
          </div>

          <div class="cta-right">
            <div class="stack">
              <div class="stack-item"><span>PHP</span><span class="muted">backend</span></div>
              <div class="stack-item"><span>MariaDB</span><span class="muted">database</span></div>
              <div class="stack-item"><span>jQuery</span><span class="muted">UI</span></div>
              <div class="stack-item"><span>HTML/CSS</span><span class="muted">layout</span></div>
              <div class="stack-item"><span>GitHub</span><span class="muted">version control</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="footer" id="footer">
    <div class="container footer-grid reveal">
      <div>
        <div class="brand footer-brand">
          <span class="brand-mark">◆</span>
          <span class="brand-text">MyStocks</span>
        </div>
        <p class="footer-text">
          A personal stock tracking web app for monitoring portfolios, watchlists, and performance — built clean and modern.
        </p>
      </div>

      <div>
        <h4>Links</h4>
        <ul>
          <li><a href="#features">Features</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">GitHub</a></li>
        </ul>
      </div>

      <div>
        <h4>Tech</h4>
        <ul>
          <li>PHP</li>
          <li>MariaDB</li>
          <li>JavaScript / jQuery</li>
          <li>HTML & CSS</li>
        </ul>
      </div>
    </div>

    <div class="container footer-bottom">
      <span>© <?= date("Y") ?> MyStocks</span>
      <span class="muted">Dark UI • Smooth animations</span>
    </div>
  </footer>

  <script src="app.js"></script>
</body>
</html>
