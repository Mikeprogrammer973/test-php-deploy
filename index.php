<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zyther Dev | Build Bold Digital Experiences</title>
    <meta
      name="description"
      content="Zyther Dev creates modern digital products, websites, and experiences for ambitious brands."
    />
    <style>
      :root {
        --bg: #0a0f1f;
        --bg-soft: #121c30;
        --panel: rgba(18, 28, 48, 0.8);
        --text: #edf3ff;
        --muted: #b5c2dc;
        --primary: #7c9cff;
        --primary-strong: #5b7cff;
        --accent: #42e2b8;
        --border: rgba(255, 255, 255, 0.1);
      }

      * { box-sizing: border-box; }

      html {
        scroll-behavior: smooth;
      }

      body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background:
          radial-gradient(circle at top left, rgba(124, 156, 255, 0.2), transparent 30%),
          linear-gradient(135deg, var(--bg), #111827 60%, #0b1220);
        color: var(--text);
        line-height: 1.6;
      }

      a {
        color: inherit;
        text-decoration: none;
      }

      .container {
        width: min(1100px, calc(100% - 32px));
        margin: 0 auto;
      }

      header {
        position: sticky;
        top: 0;
        backdrop-filter: blur(12px);
        background: rgba(10, 15, 31, 0.7);
        border-bottom: 1px solid var(--border);
        z-index: 10;
      }

      nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        min-height: 72px;
      }

      .brand {
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        font-size: 0.9rem;
      }

      .nav-links {
        display: flex;
        align-items: center;
        gap: 24px;
        color: var(--muted);
        font-size: 0.95rem;
      }

      .nav-links a:hover {
        color: var(--text);
      }

      .cta {
        display: inline-block;
        background: linear-gradient(135deg, var(--primary), var(--primary-strong));
        color: white;
        border: none;
        padding: 14px 22px;
        border-radius: 999px;
        font-weight: 700;
        cursor: pointer;
        box-shadow: 0 12px 30px rgba(91, 124, 255, 0.35);
      }

      .hero {
        padding: 92px 0 64px;
      }

      .hero-grid {
        display: grid;
        grid-template-columns: 1.2fr 0.8fr;
        align-items: center;
        gap: 40px;
      }

      .eyebrow {
        display: inline-block;
        background: rgba(66, 226, 184, 0.12);
        color: var(--accent);
        border: 1px solid rgba(66, 226, 184, 0.3);
        border-radius: 999px;
        padding: 8px 14px;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 18px;
      }

      h1 {
        font-size: clamp(2.7rem, 6vw, 5rem);
        line-height: 0.95;
        margin: 0 0 18px;
        letter-spacing: -0.06em;
      }

      .highlight {
        color: var(--accent);
      }

      .lead {
        max-width: 620px;
        color: var(--muted);
        font-size: 1.08rem;
        margin-bottom: 28px;
      }

      .hero-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        margin-bottom: 28px;
      }

      .secondary {
        display: inline-block;
        padding: 13px 22px;
        border-radius: 999px;
        border: 1px solid var(--border);
        color: var(--text);
        background: rgba(255, 255, 255, 0.02);
        font-weight: 600;
      }

      .stats {
        display: flex;
        flex-wrap: wrap;
        gap: 28px;
        margin-top: 18px;
      }

      .stat {
        min-width: 110px;
      }

      .stat strong {
        display: block;
        font-size: 1.5rem;
        margin-bottom: 4px;
      }

      .stat span {
        color: var(--muted);
        font-size: 0.87rem;
      }

      .card {
        background: linear-gradient(180deg, rgba(17, 25, 41, 0.8), rgba(10, 15, 31, 0.8));
        border: 1px solid var(--border);
        border-radius: 24px;
        padding: 22px;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.4);
      }

      .mockup {
        padding: 18px;
      }

      .mockup-top {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 18px;
      }

      .dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        display: inline-block;
      }

      .dot.red { background: #ff5f57; }
      .dot.yellow { background: #ffbd2e; }
      .dot.green { background: #28c840; }

      .mockup-window {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid var(--border);
        border-radius: 16px;
        padding: 18px;
      }

      .metric {
        display: flex;
        justify-content: space-between;
        gap: 12px;
        align-items: center;
        margin-bottom: 14px;
        color: var(--muted);
        font-size: 0.9rem;
      }

      .bar {
        height: 10px;
        background: rgba(255,255,255,0.08);
        border-radius: 999px;
        overflow: hidden;
        margin-bottom: 18px;
      }

      .fill {
        height: 100%;
        border-radius: inherit;
        background: linear-gradient(90deg, var(--accent), var(--primary));
      }

      .mini-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 14px;
      }

      .mini-box {
        padding: 16px;
        border-radius: 14px;
        border: 1px solid var(--border);
        background: rgba(255, 255, 255, 0.02);
      }

      .mini-box strong {
        display: block;
        font-size: 1.2rem;
        margin-bottom: 4px;
      }

      section {
        padding: 42px 0;
      }

      .section-head {
        text-align: center;
        max-width: 700px;
        margin: 0 auto 28px;
      }

      .section-head h2 {
        font-size: clamp(2rem, 4vw, 3rem);
        margin: 0 0 12px;
        letter-spacing: -0.05em;
      }

      .section-head p {
        margin: 0;
        color: var(--muted);
      }

      .features {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 22px;
      }

      .feature {
        background: var(--panel);
        border: 1px solid var(--border);
        border-radius: 20px;
        padding: 24px;
      }

      .icon {
        width: 52px;
        height: 52px;
        display: grid;
        place-items: center;
        border-radius: 14px;
        background: rgba(124, 156, 255, 0.12);
        color: var(--primary);
        font-size: 1.4rem;
        margin-bottom: 18px;
      }

      .feature h3 {
        margin: 0 0 10px;
        font-size: 1.2rem;
      }

      .feature p {
        margin: 0;
        color: var(--muted);
      }

      .cta-strip {
        background: linear-gradient(135deg, rgba(124, 156, 255, 0.12), rgba(66, 226, 184, 0.1));
        border: 1px solid var(--border);
        border-radius: 24px;
        padding: 32px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 18px;
      }

      .cta-strip h3 {
        margin: 0 0 8px;
        font-size: clamp(1.5rem, 3vw, 2rem);
      }

      .cta-strip p {
        margin: 0;
        color: var(--muted);
      }

      footer {
        padding: 36px 0 60px;
        color: var(--muted);
        text-align: center;
      }

      @media (max-width: 820px) {
        .hero-grid,
        .features,
        .cta-strip {
          grid-template-columns: 1fr;
        }

        .hero-grid {
          display: block;
        }

        .hero {
          padding-top: 64px;
        }

        .nav-links {
          display: none;
        }

        .cta-strip {
          display: block;
          text-align: center;
        }
      }
    </style>
  </head>
  <body>
    <header>
      <div class="container">
        <nav>
          <div class="brand">Zyther Dev</div>
          <div class="nav-links">
            <a href="#services">Services</a>
            <a href="#work">Work</a>
            <a href="#about">About</a>
            <a href="#contact" class="cta">Book a Call</a>
          </div>
        </nav>
      </div>
    </header>

    <main>
      <section class="hero">
        <div class="container hero-grid">
          <div>
            <div class="eyebrow">@zytherdev</div>
            <h1>Build bold ideas into <span class="highlight">digital products</span>.</h1>
            <p class="lead">
              Zyther Dev helps startups, creators, and businesses turn concepts into polished,
              high-performing websites and digital experiences that drive growth.
            </p>
            <div class="hero-actions">
              <a href="#contact" class="cta">Start Your Project</a>
              <a href="#services" class="secondary">Explore Services</a>
            </div>

            <div class="stats">
              <div class="stat">
                <strong>5+</strong>
                <span>Years building</span>
              </div>
              <div class="stat">
                <strong>30+</strong>
                <span>Projects launched</span>
              </div>
              <div class="stat">
                <strong>100%</strong>
                <span>Custom solutions</span>
              </div>
            </div>
          </div>

          <div class="card mockup">
            <div class="mockup-top">
              <span class="dot red"></span>
              <span class="dot yellow"></span>
              <span class="dot green"></span>
            </div>
            <div class="mockup-window">
              <div class="metric">
                <span>Launch growth</span>
                <strong>92%</strong>
              </div>
              <div class="bar"><div class="fill" style="width: 92%"></div></div>

              <div class="mini-grid">
                <div class="mini-box">
                  <strong>3x</strong>
                  <span>Faster delivery</span>
                </div>
                <div class="mini-box">
                  <strong>24/7</strong>
                  <span>Optimization</span>
                </div>
                <div class="mini-box">
                  <strong>UX</strong>
                  <span>First mindset</span>
                </div>
                <div class="mini-box">
                  <strong>SEO</strong>
                  <span>Ready</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="services">
        <div class="container">
          <div class="section-head">
            <h2>Everything your brand needs to launch smarter.</h2>
            <p>
              From strategy to design and development, we craft digital experiences that help your
              business stand out and convert.
            </p>
          </div>

          <div class="features">
            <article class="feature">
              <div class="icon">⚡</div>
              <h3>Fast Development</h3>
              <p>Lean workflows and scalable code that help you move from idea to launch quickly.</p>
            </article>

            <article class="feature">
              <div class="icon">🎨</div>
              <h3>Modern Design</h3>
              <p>Clean interfaces, strong brand identity, and experiences that feel premium.</p>
            </article>

            <article class="feature">
              <div class="icon">📈</div>
              <h3>Growth-focused</h3>
              <p>Built with performance, usability, and conversions in mind from day one.</p>
            </article>
          </div>
        </div>
      </section>

      <section id="about">
        <div class="container">
          <div class="cta-strip">
            <div>
              <h3>Turn your vision into a product people remember.</h3>
              <p>Strategy, design, and development for brands ready to grow.</p>
            </div>
            <a href="#contact" class="cta">Let’s Build</a>
          </div>
        </div>
      </section>
    </main>

    <footer id="contact">
      <div class="container">
        <p>© 2026 Zyther Dev — @zytherdev</p>
      </div>
    </footer>
  </body>
</html>
