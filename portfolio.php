<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jamel Magat – Portfolio</title>
  <!-- Catchy Font -->
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
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
      gap: 40px;
      padding: 15px 0;
      z-index: 1000;
    }
    nav a {
      text-decoration: none;
      color: #111;
      font-size: 1.1rem;
      letter-spacing: 1px;
      position: relative;
      transition: color 0.3s ease;
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
    nav a:hover {
      color: #555;
    }
    nav a:hover::after {
      transform: scaleX(1);
      transform-origin: left;
    }

    /* HERO */
    .hero {
      position: relative;
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      overflow: hidden;
    }
    .hero .first {
      font-size: 18vw;
      font-weight: bold;
      color: #111;
      line-height: 0.9;
      letter-spacing: 3px;
    }
    .hero .last {
      font-size: 14vw;
      font-weight: bold;
      color: #111;
      line-height: 0.9;
      letter-spacing: 2px;
    }

    /* INTERACTIVE IMAGE */
    .hero img {
      max-width: 350px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, 150%);
      opacity: 0;
      transition: transform 0.6s ease-in-out, opacity 0.4s ease-in-out;
      z-index: 2;
      pointer-events: none;
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
    footer p {
      font-size: 0.9rem;
      margin: 5px 0;
    }
    footer .footer-links {
      margin-top: 15px;
    }
    footer .footer-links a {
      margin: 0 10px;
      text-decoration: none;
      color: #111;
      font-size: 0.9rem;
      border-bottom: 1px solid transparent;
      transition: border 0.3s ease;
    }
    footer .footer-links a:hover {
      border-bottom: 1px solid #111;
    }

    /* Extra space because navbar is fixed */
    .spacer {
      height: 60px;
    }
  </style>
</head>
<body>
  <!-- NAVBAR -->
  <nav>
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
  </nav>

  <!-- Spacer so hero not hidden under navbar -->
  <div class="spacer"></div>

  <!-- HERO -->
  <div class="hero" id="home">
    <div class="first">JAMEL</div>
    <div class="last">MAGAT</div>
    <img id="profile" src="assets/mesg.jpg" alt="Jamel Magat">
  </div>

  <!-- SECTIONS -->
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


  <div class="section" id="projects">
    <h2>Projects</h2>
    <p>
      Currently designing at <strong>OFFT</strong>. Previously worked with
      Apple, Instagram, Marqeta, PropertyGuru, and more.
    </p>
  </div>

  <div class="section" id="contact">
    <h2>Contact</h2>
    <p>Email: <a href="mailto:your@email.com">mjamelkim@email.com</a></p>
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
    const profile = document.getElementById("profile");
    let lastScrollY = 0;

    window.addEventListener("scroll", () => {
      let scrollY = window.scrollY;
      let windowH = window.innerHeight;

      if (scrollY > 50 && scrollY < windowH) {
        if (scrollY > lastScrollY) {
          // Scroll down → swipe up
          profile.style.opacity = 1;
          profile.style.transform = "translate(-50%, -50%)";
        } else {
          // Scroll up → swipe down
          profile.style.opacity = 0;
          profile.style.transform = "translate(-50%, 150%)";
        }
      } else {
        profile.style.opacity = 0;
        profile.style.transform = "translate(-50%, 150%)";
      }

      lastScrollY = scrollY;
    });
  </script>
</body>
</html>
