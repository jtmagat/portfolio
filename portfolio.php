    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Jamel Magat – Portfolio</title>
      <!-- Fonts & Icons -->
      <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

      <style>
        body {
          margin: 0;
          padding: 0;
          background: #fff;
          color: #111;
          font-family: 'Anton', sans-serif;
          overflow-x: hidden;
        }

        /* NAVBAR */
        nav {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          background: #fff;
          border-bottom: 1px solid #111;
          display: flex;
          justify-content: center;
          align-items: center;
          gap: 40px;
          padding: 15px 0;
          z-index: 1000;
          transition: transform 0.3s ease;
        }

        nav.hide { transform: translateY(-100%); }

        nav a {
          text-decoration: none;
          color: #111;
          font-size: 1.1rem;
          letter-spacing: 1px;
          position: relative;
          transition: color 0.3s ease;
          padding: 10px;
          display: inline-block;
        }
        nav a::after {
          content: "";
          position: absolute;
          left: 0;
          bottom: -4px;
          width: 100%;
          height: 2px;
          background: #111;
          transform: scaleX(0);
          transition: transform 0.3s ease;
          transform-origin: right;
        }
        nav a:hover { color: #555; }
        nav a:hover::after { transform: scaleX(1); transform-origin: left; }

        /* DROPDOWN */
        .dropdown { position: relative; display: inline-block; }
        .dropdown-content {
          display: none;
          position: absolute;
          background: white;
          min-width: 160px;
          box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
          z-index: 1;
          top: 100%;
          left: 0;
        }
        .dropdown-content a {
          display: block;
          padding: 10px;
          text-decoration: none;
          color: black;
        }
        .dropdown-content a:hover { background: #f0f0f0; }
        .dropdown:hover .dropdown-content { display: block; }

        /* HERO */
        .hero {
          position: relative;
          height: 100vh;
          display: flex;
          align-items: center;
          justify-content: center;
          overflow: hidden;
          text-align: center;
        }

        .hero-name {
          font-size: 8vw;
          font-weight: bold;
          font-family: 'Anton', sans-serif;
          color: #111;
          z-index: 2;
          transition: transform 0.8s ease, font-size 0.8s ease;
        }

        .hero img {
          position: absolute;
          top: 50%;
          transform: translateY(-50%) scale(1.3);
          opacity: 0.9;
          transition: all 1s ease;
          max-width: 320px;
          z-index: 1;
        }
        #profileLeft { left: 15%; }
        #profileRight { right: 15%; }

        /* SCROLL ANIMATION */
        .hero.scrolled .hero-name {
          font-size: 12vw;
          transform: scale(1.1);
        }
        .hero.scrolled #profileLeft {
          left: 2%;
          transform: translateY(-50%) scale(0.8);
          opacity: 1;
        }
        .hero.scrolled #profileRight {
          right: 2%;
          transform: translateY(-50%) scale(0.8);
          opacity: 1;
        }

        /* ICON LOOP */
        .icon-loop {
          width: 100%;
          overflow: hidden;
          white-space: nowrap;
          margin-top: 40px;
          position: absolute;
          bottom: 30px;
        }
        .icon-track {
          display: inline-block;
          animation: slide-left 20s linear infinite;
        }
        .icon-track i, .icon-track img {
          font-size: 2.5rem;
          margin: 0 40px;
          vertical-align: middle;
          color: #111;
        }
        @keyframes slide-left {
          from { transform: translateX(100%); }
          to { transform: translateX(-100%); }
        }

        /* CONTENT SECTIONS */
        .section {
          padding: 120px 20px;
          border-top: 1px solid #111;
          max-width: 750px;
          margin: 0 auto;
          font-family: Arial, sans-serif;
        }
        .section h2 {
          font-size: 2em;
          margin-bottom: 1em;
        }

        /* LEARN MORE */
        .learn-more {
          display: inline-block;
          margin-top: 15px;
          font-weight: bold;
          font-size: 1rem;
          color: #111;
          text-decoration: none;
          border-bottom: 2px solid transparent;
          transition: all 0.3s ease;
        }
        .learn-more:hover {
          color: #555;
          border-bottom: 2px solid #111;
          letter-spacing: 1px;
        }

        /* FOOTER */
        footer {
          border-top: 1px solid #111;
          background: #fff;
          padding: 40px 20px;
          text-align: center;
          font-family: Arial, sans-serif;
          color: #111;
          margin-top: 100px;
        }
        footer .name {
          font-size: 1.5rem;
          font-weight: bold;
          margin-bottom: 10px;
          font-family: 'Anton', sans-serif;
        }
        footer p { font-size: 0.9rem; margin: 5px 0; }
        footer .footer-links { margin-top: 15px; }
        footer .footer-links a {
          margin: 0 10px;
          text-decoration: none;
          color: #111;
          font-size: 0.9rem;
          border-bottom: 1px solid transparent;
          transition: border 0.3s ease;
        }
        footer .footer-links a:hover { border-bottom: 1px solid #111; }

        /* Spacer for navbar */
        .spacer { height: 60px; }
      </style>
    </head>
    <body>
    <nav>
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
      <div class="dropdown">
        <a href="#">CV ▾</a>
        <div class="dropdown-content">
          <a href="cv.html" target="_blank">View Online</a>
          <a href="assets/Magat CV.pdf" download>Download PDF</a>
        </div>
      </div>
    </nav>

    <div class="spacer"></div>

    <!-- HERO -->
    <div class="hero" id="home">
      <img id="profileLeft" src="assets/jk17.jpg" alt="Left Image">
      <div class="hero-name">JAMEL<br>MAGAT</div>
      <img id="profileRight" src="assets/jkme.jpg" alt="Right Image">

      <!-- 🔥 Icon Loop -->
      <div class="icon-loop">
        <div class="icon-track">
          <i class="fab fa-java"></i>
          <i class="fab fa-figma"></i>
          <i class="fas fa-code"></i>
          <i class="fas fa-terminal"></i>
          <i class="fab fa-github"></i>
          <i class="fas fa-database"></i>
        </div>
      </div>
    </div>

    <!-- About -->
    <div class="section" id="about">
      <h2>About</h2>
      <p>
      I’m a 3rd-year Filipino student building my own clothing brand called Offthreadz. 
      My style is street but clean simple lines, bold energy. 
      My goal is straight up: to get rich, no sugarcoating. 
      I draw inspiration from people like Joseph Zhang and Ethan Chng and the culture around me. 
      Outside of design, I live through music it’s chaotic, but I vibe heavy with my goat Drake and of course
      O Side Mafia.
      <br><br>
      <a href="about_me.php" class="learn-more">there’s more to the story →</a>
      </p>
    </div>

    <!-- Project -->
    <div class="section" id="projects">
      <h2>Projects</h2>
      <p>
          I’ve built <strong>OFFT</strong> (streetwear clothing line), 
          <strong>CommBridge</strong> (bridging communication barriers), 
          and <strong>Assawayer Trading Inc.</strong> (international trading venture).
      </p>
      <a href="projects.php" class="learn-more">Projects →</a>
    </div>

    <!-- Contact -->
    <div class="section" id="contact">
      <h2>Contact</h2>
      <p>Personal Email: <a href="mailto:mjamelkim@gmail.com">mjamelkim@gmail.com</a></p>
      <p>Work Email: <a href="mailto:jtmagatinfo@gmail.com">jtmagatinfo@gmail.com</a></p>
    </div>

    <!-- FOOTER -->
    <footer>
      <div class="name">Jamel Magat</div>
      <p>&copy; 2025 All Rights Reserved.</p>
      <div class="footer-links">
        <a href="#home">Home</a> |
        <a href="#about">About</a> |
        <a href="#projects">Projects</a> |
        <a href="#contact">Contact</a>
      </div>
    </footer>

    <!-- SCRIPT -->
    <script>
      const hero = document.querySelector(".hero");
      const navbar = document.querySelector("nav");
      let lastScrollY = window.scrollY;

      window.addEventListener("scroll", () => {
        let scrollY = window.scrollY;
        let windowH = window.innerHeight;

        // ✅ Hero animation
        if (scrollY > 50 && scrollY < windowH) {
          hero.classList.add("scrolled");
        } else {
          hero.classList.remove("scrolled");
        }

        // ✅ Navbar hide/show
        if (scrollY > lastScrollY) {
          navbar.classList.add("hide");
        } else {
          navbar.classList.remove("hide");
        }

        lastScrollY = scrollY;
      });

      
    </script>
    </body>
    </html>
