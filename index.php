<?php
$pageTitle = 'Ritu — Java Full-Stack Developer & AI/XAI Researcher';

$profile = [
  'name' => 'Ritu',
  'email' => 'ritujha0520@gmail.com',
  'phone' => '9868575203',
  'location' => 'New Delhi, India',
  'linkedin' => 'https://www.linkedin.com/in/jharitu24/',
  'github' => 'https://github.com/RITU0520',
  'leetcode' => 'https://leetcode.com/u/Rituj_0250/'
];
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta
    name="description"
    content="Ritu — M.Tech CSE student, Java Full-Stack Developer and AI/XAI researcher."
  >

  <title><?= htmlspecialchars($pageTitle) ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap"
    rel="stylesheet"
  >

  <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="site-noise" aria-hidden="true"></div>
<div class="cursor-glow" aria-hidden="true"></div>

<!-- =========================
     NAVIGATION
     ========================= -->

<header class="nav-wrap" id="top">

  <nav class="nav container" aria-label="Primary navigation">

    <a class="brand" href="#top" aria-label="Ritu home">
      <span class="brand-mark">RJ</span>
      <span>RITU</span>
    </a>

    <button
      class="nav-toggle"
      aria-label="Open menu"
      aria-expanded="false"
    >
      <span></span>
      <span></span>
    </button>

    <div class="nav-links">
      <a class="active" href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#skills">Skills</a>
      <a href="#projects">Projects</a>
      <a href="#research">Research</a>
      <a href="#education">Education</a>
      <a href="#video">Video</a>
      <a href="#contact">Contact</a>
    </div>

    <a class="nav-cv" href="cv/Ritu_Resume.pdf" download>
      Download CV <span>↗</span>
    </a>

  </nav>

</header>


<main>

<!-- =========================
     HOME / HERO
     ========================= -->

<section class="hero" id="home">

  <div class="hero-grid"></div>

  <div class="hero-orb orb-a"></div>
  <div class="hero-orb orb-b"></div>

  <div class="container hero-inner">

    <div class="hero-copy reveal">

      <div class="eyebrow">
        <span></span>
        HELLO, I'M RITU
      </div>

      <h1>
        <em>Ritu</em>
      </h1>

      <h2>
        Java Full-Stack Developer<br>
        <span>AI / XAI Researcher</span>
      </h2>

      <p class="hero-lede">
        M.Tech CSE student at SRM IST, passionate about building
        scalable web applications and exploring Explainable AI
        for real-world problem solving.
      </p>

      <div class="hero-actions">

        <a class="btn btn-primary" href="#projects">
          View My Projects <span>→</span>
        </a>

        <a class="btn btn-ghost" href="cv/RITU_Resume.pdf" download>
          Download CV <span>↓</span>
        </a>

      </div>


      <!-- Social Links -->

      <div class="socials">

        <a
          href="<?= htmlspecialchars($profile['linkedin']) ?>"
          aria-label="LinkedIn"
          target="_blank"
          rel="noopener noreferrer" 
        >
          in
        </a>

        <a
          href="<?= htmlspecialchars($profile['github']) ?>"
          aria-label="GitHub"
          target="_blank"
          rel="noopener noreferrer"
        >
          GH
        </a>

        <a
          href="<?= htmlspecialchars($profile['leetcode']) ?>"
          aria-label="LeetCode"
          target="_blank"
          rel="noopener noreferrer"
        >
          LC
        </a>

        <a
          href="mailto:<?= htmlspecialchars($profile['email']) ?>"
          aria-label="Email"
        >
          @
        </a>

      </div>


      <div class="hero-meta">
        <span>CODE</span>
        <i>•</i>
        <span>RESEARCH</span>
        <i>•</i>
        <span>BUILD</span>
        <i>•</i>
        <span>GROW</span>
      </div>

    </div>


    <!-- HERO VISUAL -->

    <div class="hero-visual reveal delay-1">

      <div class="hero-3d-scene" aria-hidden="true">

        <div class="hero-orbit orbit-one"></div>
        <div class="hero-orbit orbit-two"></div>
        <div class="hero-orbit orbit-three"></div>

        <div class="glow-sphere sphere-one"></div>
        <div class="glow-sphere sphere-two"></div>

        <div class="floating-cube">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="build-note">
          <span>Build</span>
          <span>Learn</span>
          <span>Research</span>
          <span>Repeat</span>
        </div>

      </div>


      <!-- Portrait -->

      <div class="portrait-card">

        <div class="card-shine"></div>

        <img
          src="assets/profile.png"
          alt="Ritu professional portrait"
        >

        <div class="portrait-caption">
          <span>Ritu</span>
          <small>Java Full-Stack · AI/XAI</small>
        </div>

      </div>


      <!-- Developer Code Card -->

      <div class="terminal-card glass-panel">

        <div class="terminal-head">

          <div class="traffic">
            <b></b>
            <b></b>
            <b></b>
          </div>

          <span>ritu.config</span>

          <span class="terminal-status">
            ● online
          </span>

        </div>

        <pre><code><span class="cyan">const</span> developer = {
  name: <span class="green">"Ritu"</span>,
  focus: <span class="green">"Java Full-Stack"</span>,
  research: <span class="green">"Explainable AI"</span>,
  stack: [
    <span class="green">"Java"</span>,
    <span class="green">"React"</span>,
    <span class="green">"Spring Boot"</span>
  ]
};

<span class="cyan">while</span> (curiosity) {
  learn();
  build();
  research();
}</code></pre>

      </div>


      <!-- Impact Card -->

      <div class="impact-card">

        <div class="impact-icon">✦</div>

        <div class="impact-content">

          <h3>
            Turning Ideas<br>
            into Impact
          </h3>

          <p>
            Web · AI · Real-World Solutions
          </p>

        </div>

        <div class="impact-arrow">
          →
        </div>

      </div>

    </div>

  </div>

</section>


<!-- =========================
     ABOUT
     ========================= -->

<section class="section about" id="about">

  <div class="container split-section">

    <div class="section-intro reveal">

      <span class="section-no">01</span>

      <div>

        <div class="kicker">ABOUT ME</div>

        <h2>
          A curious builder<br>
          with a <span>research mindset.</span>
        </h2>

        <p class="section-lead">
          I am an M.Tech Computer Science and Engineering student
          at SRM IST, Ghaziabad, with a strong foundation in Java,
          Python, Spring Boot, React and Web Technologies.
        </p>

        <a class="text-link" href="#education">
          Explore my journey <span>↗</span>
        </a>

      </div>

    </div>


    <div class="about-side reveal delay-1">

      <div class="about-stats">

        <div>
          <strong>03</strong>
          <span>Featured projects</span>
        </div>

        <div>
          <strong>02+</strong>
          <span>Years learning</span>
        </div>

        <div>
          <strong>01</strong>
          <span>Research work</span>
        </div>

        <div>
          <strong>∞</strong>
          <span>More to build</span>
        </div>

      </div>

      <blockquote>
        “Technology is more meaningful when it helps people.”
        <cite>— Ritu</cite>
      </blockquote>

    </div>

  </div>

</section>


<!-- =========================
     SKILLS
     ========================= -->

<section class="section dark-section skills" id="skills">

  <div class="container">

    <div class="section-heading reveal">

      <div>

        <span class="section-no">02</span>

        <div class="kicker">SKILLS</div>

        <h2>
          Tools I use to<br>
          <span>make ideas real.</span>
        </h2>

      </div>

      <p>
        A recruiter-friendly snapshot of my development,
        data and research toolkit.
      </p>

    </div>


    <div class="skills-grid">

      <article class="skill-card reveal">

        <span class="skill-icon">&lt;/&gt;</span>

        <h3>Programming</h3>

        <div class="tags">
          <span>Java</span>
          <span>Python</span>
          <span>JavaScript</span>
          <span>HTML</span>
          <span>CSS</span>
        </div>

      </article>


      <article class="skill-card reveal delay-1">

        <span class="skill-icon">◫</span>

        <h3>Frontend</h3>

        <div class="tags">
          <span>React</span>
          <span>Bootstrap</span>
          <span>HTML5</span>
          <span>CSS3</span>
          <span>JavaScript</span>
        </div>

      </article>


      <article class="skill-card reveal delay-2">

        <span class="skill-icon">⌘</span>

        <h3>Backend</h3>

        <div class="tags">
          <span>Spring Boot</span>
          <span>Node.js</span>
          <span>REST APIs</span>
        </div>

      </article>


      <article class="skill-card reveal delay-3">

        <span class="skill-icon">▤</span>

        <h3>Database &amp; Tools</h3>

        <div class="tags">
          <span>MySQL</span>
          <span>Git</span>
          <span>VS Code</span>
        </div>

      </article>


      <article class="skill-card reveal delay-4">

        <span class="skill-icon">◉</span>

        <h3>AI / Research</h3>

        <div class="tags">
          <span>SHAP</span>
          <span>LIME</span>
          <span>Explainable AI</span>
          <span>LLM Tools</span>
        </div>

      </article>

    </div>

  </div>

</section>


<!-- =========================
     PROJECTS
     ========================= -->

<section class="section projects" id="projects">

  <div class="container">

    <div class="section-heading reveal">

      <div>

        <span class="section-no">03</span>

        <div class="kicker">PROJECTS</div>

        <h2>
          From concepts<br>
          to <span>real solutions.</span>
        </h2>

        <p class="section-subtitle">
          Real projects. Real learning. Real impact.
        </p>

      </div>


      <div
        class="filter-row"
        role="group"
        aria-label="Project filters"
      >

        <button
          class="filter active"
          data-filter="all"
        >
          All
        </button>

        <button
          class="filter"
          data-filter="fullstack"
        >
          Full Stack
        </button>

        <button
          class="filter"
          data-filter="web"
        >
          Web Development
        </button>

        <button
          class="filter"
          data-filter="research"
        >
          AI / XAI
        </button>

      </div>

    </div>


    <div class="project-grid">


      <!-- RailGenie -->

      <article
        class="project-card reveal"
        data-category="fullstack"
      >

        <div class="project-visual directory">

          <div class="mock-browser">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <div class="mock-sidebar"></div>

          <div class="mock-dashboard">
            <i></i>
            <i></i>
            <i></i>
            <i></i>
          </div>

        </div>


        <div class="project-body">

          <span class="project-type">
            FULL STACK
          </span>

          <h3>
            RailGenie
          </h3>

          <p>
            A full-stack railway management and booking platform
            designed to simplify train search, reservation and
            user interaction through a responsive web interface.
          </p>

          <div class="tags">
            <span>React</span>
            <span>Spring Boot</span>
            <span>MySQL</span>
            <span>JWT</span>
          </div>

          <div class="project-link-row">

            <a
              href="https://github.com/RITU0520/RailGenie"
              target="_blank"
              rel="noopener noreferrer"
            >
              View Project →
            </a>

            <span>GitHub</span>

          </div>

        </div>

      </article>


      <!-- ParkNexa -->

      <article
        class="project-card reveal delay-1"
        data-category="web"
      >

        <div class="project-visual course">

          <div class="course-title">
            Park.<br>
            <b>Reserve.</b><br>
            Go.
          </div>

          <div class="course-card"></div>

        </div>


        <div class="project-body">

          <span class="project-type">
            WEB DEVELOPMENT
          </span>

          <h3>
            ParkNexa — Smart Parking Reservation System
          </h3>

          <p>
            A smart parking reservation platform that allows
            users to find available parking spaces, reserve
            slots and manage parking through a responsive
            web interface.
          </p>

          <div class="tags">
            <span>HTML</span>
            <span>CSS</span>
            <span>JavaScript</span>
          </div>

          <div class="project-link-row">

            <a
              href="https://github.com/RITU0520/ParkNexa-Smart-Parking-Reservation-System"
              target="_blank"
              rel="noopener noreferrer"
            >
              View Project →
            </a>

            <span>GitHub</span>

          </div>

        </div>

      </article>

      <!-- Secure File Encryption System -->
      <article class="project-card reveal delay-2" data-category="security">

        <div class="project-visual security">

          <div class="security-lock">
            <div class="lock-shackle"></div>
            <div class="lock-body">
              <span>✓</span>
            </div>
          </div>

          <div class="security-lines">
            <i></i>
            <i></i>
            <i></i>
            <i></i>
          </div>

          <span class="security-label">
            AES-256
          </span>

        </div>

        <div class="project-body">

          <span class="project-type">
            SECURITY · PYTHON
          </span>

          <h3>
            Secure File Encryption System
          </h3>

          <p>
            A desktop application for secure file encryption
            and decryption using AES-256, with password-based
            key derivation, integrity verification and
            activity logging.
          </p>

          <div class="tags">
            <span>Python</span>
            <span>AES-256</span>
            <span>PBKDF2</span>
            <span>HMAC-SHA256</span>
            <span>Tkinter</span>
          </div>

          <div class="project-link-row">
            <a href="https://github.com/RITU0520/SecureFileEncryption"
               target="_blank"
               rel="noopener noreferrer">
                View Project →
            </a>
            <span>GitHub</span>
        </div>

        </div>
      </article>



      <!-- SHAP & LIME -->

      <article
        class="project-card reveal delay-2"
        data-category="research"
      >

        <div class="project-visual brain">

          <div class="brain-grid"></div>

          <div class="brain-orbit"></div>

          <span>
            SHAP × LIME
          </span>

        </div>


        <div class="project-body">

          <span class="project-type">
            AI / XAI · RESEARCH
          </span>

          <h3>
            SHAP &amp; LIME Stability Analysis
          </h3>

          <p>
            Research on feature correlation and model stability
            for migraine prediction using deep learning,
            focusing on the behaviour of SHAP and LIME
            explanations.
          </p>

          <div class="tags">
            <span>SHAP</span>
            <span>LIME</span>
            <span>Deep Learning</span>
            <span>Explainable AI</span>
          </div>

          <div class="project-link-row">

            <a
              href="https://www.researchgate.net/publication/405313480_A_Stability_Analysis_of_SHAP_and_LIME_Under_Feature_Correlation_for_Migraine_Prediction_Using_Deep_Learning"
              target="_blank"
              rel="noopener noreferrer"
            >
              View Research →
            </a>

            <span>ResearchGate</span>

          </div>

        </div>

      </article>

    </div>

  </div>

</section>


<!-- =========================
     RESEARCH
     ========================= -->

<section
  class="section dark-section research"
  id="research"
>

  <div class="container research-layout">

    <div class="section-intro reveal">

      <span class="section-no">04</span>

      <div>

        <div class="kicker">RESEARCH</div>

        <h2>
          Explaining AI<br>
          for a <span>better tomorrow.</span>
        </h2>

      </div>

    </div>


    <article class="research-card reveal delay-1">

      <div class="research-symbol">
        XAI
      </div>


      <div>

        <span class="project-type">
          ICAISS 2026 · CONFERENCE PRESENTATION
        </span>

        <h3>
          A Stability Analysis of SHAP and LIME Under Feature
          Correlation for Migraine Prediction Using Deep Learning
        </h3>

        <p>
          Presented at the IEEE-supported 4th International
          Conference on Augmented Intelligence and Sustainable
          Systems (ICAISS 2026), CARE College of Engineering,
          Tamil Nadu, India.
        </p>


        <div class="tags">

          <span>SHAP</span>
          <span>LIME</span>
          <span>Feature Correlation</span>
          <span>Deep Learning</span>
          <span>Explainable AI</span>

        </div>


        <a
          class="research-btn"
          href="https://www.researchgate.net/publication/405313480_A_Stability_Analysis_of_SHAP_and_LIME_Under_Feature_Correlation_for_Migraine_Prediction_Using_Deep_Learning"
          target="_blank"
          rel="noopener noreferrer"
        >
          View Research Details →
        </a>

      </div>

    </article>

  </div>

</section>


<!-- =========================
     EDUCATION
     ========================= -->

<section class="section education" id="education">

  <div class="container">

    <div class="section-heading reveal">

      <div>

        <span class="section-no">05</span>

        <div class="kicker">EDUCATION</div>

        <h2>
          My academic<br>
          <span>journey.</span>
        </h2>

      </div>

    </div>


    <div class="timeline reveal">


      <!-- M.Tech -->

      <article>

        <span class="year">
          2025 — 2027
        </span>

        <div>

          <h3>
            M.Tech — Computer Science &amp; Engineering
          </h3>

          <p>
            SRM Institute of Science and Technology,
            Delhi-NCR / Ghaziabad
          </p>

          <strong>
            CGPA: 7.76 / 10
          </strong>

        </div>

      </article>


      <!-- B.Tech -->

      <article>

        <span class="year">
          2020 — 2024
        </span>

        <div>

          <h3>
            B.Tech — Computer Science &amp; Engineering
          </h3>

          <p>
            Chhattisgarh Swami Vivekanand Technical University
          </p>

          <strong>
            80%
          </strong>

        </div>

      </article>


      <!-- Class XII -->

      <article>

        <span class="year">
          2020
        </span>

        <div>

          <h3>
            Class XII — Science
          </h3>

          <p>
            Govt. Sarvodaya Girls Senior Secondary School No. 1,
            Narela
          </p>

          <strong>
            82.8%
          </strong>

        </div>

      </article>


      <!-- Class X -->

      <article>

        <span class="year">
          2018
        </span>

        <div>

          <h3>
            Class X — Science
          </h3>

          <p>
            Govt. Sarvodaya Girls Senior Secondary School No. 1,
            Narela
          </p>

          <strong>
            81.8%
          </strong>

        </div>

      </article>

    </div>

  </div>

</section>


<!-- =========================
     ACHIEVEMENTS
     ========================= -->

<section class="section achievements">

  <div class="container achievement-layout">

    <div class="section-intro reveal">

      <span class="section-no">06</span>

      <div>

        <div class="kicker">ACHIEVEMENTS</div>

        <h2>
          Learning<br>
          <span>never stops.</span>
        </h2>

      </div>

    </div>


    <div class="achievement-list reveal delay-1">


      <article>

        <b>01</b>

        <div>

          <h3>
            Research Presentation — ICAISS 2026
          </h3>

          <p>
            Presented SHAP/LIME stability research at an
            IEEE-supported international conference.
          </p>

        </div>

      </article>


      <article>

        <b>02</b>

        <div>

          <h3>
            FullStack Developer — Tap Academy
          </h3>

          <p>
            Certification covering Core Java, Advanced Java,
            full-stack web development, HTML/CSS/JS and SQL.
          </p>

        </div>

      </article>


      <article>

        <b>03</b>

        <div>

          <h3>
            Languages
          </h3>

          <p>
            Hindi — Native · English — Professional Working
            Proficiency
          </p>

        </div>

      </article>

    </div>

  </div>

</section>


<!-- =========================
     INTRODUCTION VIDEO
     ========================= -->

<section
  class="section intro-video"
  id="video"
>

  <div class="container video-section-grid">

    <div class="section-intro reveal">

      <span class="section-no">07</span>

      <div>

        <div class="kicker">
          INTRODUCTION VIDEO
        </div>

        <h2>
          Get to know<br>
          <span>me.</span>
        </h2>

        <p class="section-lead">
          A short introduction about my journey, interests
          and goals. 
        </p>

      </div>

    </div>


    <div class="video-card reveal delay-1">

      <div class="video-window">

        <video
          controls
          playsinline
          preload="metadata"
          poster="assets/profile.png"
        >

          <source
            src="assets/intro.mp4"
            type="video/mp4"
          >

          Your browser does not support HTML5 video.

        </video>

        <div class="video-overlay">

          <div class="video-play">
            ▶
          </div>

          <span>
            Ritu · Portfolio Intro
          </span>

        </div>

      </div>


      <div class="video-caption">

        <span>
          30–45 sec introduction
        </span>

        <code>
          assets/intro.mp4
        </code>

      </div>

    </div>

  </div>

</section>


<!-- =========================
     CONTACT
     ========================= -->

<section
  class="section contact"
  id="contact"
>

  <div class="container contact-layout">


    <!-- LEFT -->

    <div class="contact-copy reveal">

      <span class="section-no">08</span>

      <div>

        <div class="kicker">
          CONTACT
        </div>

        <h2>
          Let’s build something<br>
          <span>meaningful.</span>
        </h2>

        <p>
          Open to opportunities in software development,
          AI and research.
        </p>

      </div>


      <div class="contact-details">

        <a
          href="mailto:<?= htmlspecialchars($profile['email']) ?>"
        >
          <span>@</span>
          <?= htmlspecialchars($profile['email']) ?>
        </a>


        <span>
          <span>⌖</span>
          <?= htmlspecialchars($profile['location']) ?>
        </span>

      </div>


      <div class="contact-socials">

        <a
          href="<?= htmlspecialchars($profile['linkedin']) ?>"
          target="_blank"
          rel="noopener noreferrer"
          aria-label="LinkedIn"
        >
          in
        </a>

        <a
          href="<?= htmlspecialchars($profile['github']) ?>"
          target="_blank"
          rel="noopener noreferrer"
          aria-label="GitHub"
        >
          GH
        </a>

        <a
          href="<?= htmlspecialchars($profile['leetcode']) ?>"
          target="_blank"
          rel="noopener noreferrer"
          aria-label="LeetCode"
        >
          LC
        </a>

      </div>

    </div>


    <!-- RIGHT -->

    <div class="form-shell reveal delay-1">

      <div>

        <div class="kicker">
          SEND A MESSAGE
        </div>

        <h3>
          Have an opportunity worth discussing?
        </h3>

        <p>
          Your message will be sent through the PHP
          contact form on your hosting server.
        </p>

      </div>


      <form
        action="contact.php"
        method="post"
        class="contact-form"
      >

        <input
          type="text"
          name="name"
          placeholder="Your name"
          required
        >

        <input
          type="email"
          name="email"
          placeholder="Your email"
          required
        >

        <input
          type="text"
          name="subject"
          placeholder="Subject"
        >

        <textarea
          name="message"
          rows="5"
          placeholder="Tell me about it..."
          required
        ></textarea>

        <button
          class="btn btn-primary"
          type="submit"
        >
          Send Message <span>→</span>
        </button>

      </form>

    </div>

  </div>

</section>

</main>


<!-- =========================
     FOOTER
     ========================= -->

<footer class="footer">

  <div class="container footer-inner">

    <a class="brand" href="#top">

      <span class="brand-mark">R</span>

      <span>RITU</span>

    </a>


    <span>
      © <?= date('Y') ?> Ritu.
      Built with HTML, CSS, JavaScript &amp; PHP.
    </span>


    <a href="#top">
      Build · Learn · Research · Grow ↑
    </a>

  </div>

</footer>


<script>
  window.PORTFOLIO_PLACEHOLDER_LINKS = true;
</script>

<script src="script.js"></script>

</body>
</html>