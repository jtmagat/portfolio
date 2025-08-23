<?php
// projects.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JK’s Projects</title>

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      font-family: 'Russo One', sans-serif;
      margin: 0;
      padding: 0;
      background: #000;
      color: #f0f0f0;
      overflow-x: hidden;
    }
    a { text-decoration: none; color: inherit; }

    .navbar {
      width: 90%;
      max-width: 1200px;
      margin: 20px auto 0;
      display: flex;
      justify-content: center;
      border: 1px solid #fff;
      border-radius: 12px;
      overflow: hidden;
    }
    .navbar a {
      flex: 1;
      text-align: center;
      padding: 12px 0;
      font-weight: 600;
      color: #fff;
      border-right: 1px solid #fff;
      transition: background 0.3s, color 0.3s;
    }
    .navbar a:last-child { border-right: none; }
    .navbar a:hover { background: rgba(255, 255, 255, 1); color: #000; }

    .hero {
      width: 90%;
      max-width: 1200px;
      margin: 40px auto;
      padding: 40px 30px;
      text-align: center;
      color: #fff;
      border: 2px solid #fff;
      border-radius: 12px;
    }
    .hero h1 { font-size: 3rem; margin: 0; letter-spacing: 2px; }
    .hero p { font-size: 1.2rem; margin-top: 12px; color: #ccc; }

    .marquee-container {
      overflow: hidden;
      margin: 50px auto;
      width: 90%;
      max-width: 1200px;
      border-top: 1px solid #fff;
      border-bottom: 1px solid #fff;
      padding: 15px 0;
    }
    .marquee {
      display: flex;
      gap: 3rem;
      animation: marquee 20s linear infinite;
    }
    .marquee:hover { animation-play-state: paused; }
    .marquee i { color: #fff; font-size: 2rem; transition: transform 0.3s; }
    .marquee i:hover { transform: scale(1.3); }

    @keyframes marquee {
      0% { transform: translateX(100%); }
      100% { transform: translateX(-100%); }
    }

    /* ===== Featured Projects ===== */
    .featured-project {
      display: flex;
      flex-wrap: wrap;
      width: 90%;
      max-width: 1200px;
      margin: 50px auto;
      gap: 30px;
      align-items: center;
      opacity: 0;
      transform: translateY(40px);
      transition: all 0.6s ease;
    }
    .featured-project.visible { opacity: 1; transform: translateY(0); }

    .featured-project.reverse { flex-direction: row-reverse; }

    .featured-image {
      position: relative;
      flex: 1 1 400px;
      height: 250px;
      background-size: cover;
      background-position: center;
      border-radius: 12px;
      overflow: hidden;
      cursor: pointer;
      transition: transform 0.4s ease;
    }
    .featured-image:hover { transform: scale(1.05); }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(191, 195, 195, 0.53);
      color: #000;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 1.5rem;
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.3s ease, transform 0.3s ease;
    }
    .featured-image:hover .overlay { opacity: 1; transform: translateY(0); }

    .project-info {
      flex: 1 1 400px;
      color: #ccc;
    }
    .project-info h3 { font-size: 1.8rem; margin-bottom: 15px; color: #fff; }
    .project-info p { font-size: 1.1rem; line-height: 1.5; }

    /* ===== Projects Grid ===== */
    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      margin: 50px auto 80px;
      padding: 0 20px;
    }
    .project-card {
      background: #111;
      border-radius: 12px;
      color: #fff;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(255,255,255,0.05);
      text-align: center;
      text-decoration: none;
      transform: translateY(40px);
      opacity: 0;
      transition: transform 0.5s ease, opacity 0.5s ease, box-shadow 0.3s ease;
      position: relative;
    }
    .project-card h3 { margin: 12px 0; font-size: 1.2rem; font-weight: 600; }
    .project-card .project-image {
      width: 100%;
      height: 180px;
      background-size: cover;
      background-position: center;
      border-bottom: 2px solid #fff;
    }
    .project-card:hover { box-shadow: 0 0 25px rgba(0,255,255,0.15); }
    .project-card.visible { transform: translateY(0); opacity: 1; }

    /* Single divider for the Projects section */
    .projects-divider {
      width: 90%;
      max-width: 1200px;
      height: 2px;         
      background-color: #fff; 
      opacity: 0.3;        
      margin: 50px auto;     
      border-radius: 1px;   
    }

    .project-image {
  position: relative;
  width: 100%;
  height: 180px;
  background-size: cover;
  background-position: center;
  border-bottom: 2px solid #fff;
  border-radius: 12px 12px 0 0;
  overflow: hidden;
  cursor: pointer;
  transition: 0.4s ease;
}

.project-image:hover {
  transform: scale(1.05);
}

.project-image .overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(191,195,195,0.53);
  color: #000;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  font-size: 1.2rem;
  opacity: 0;
  transform: translateY(20px);
  transition: 0.3s;
}

.project-image:hover .overlay {
  opacity: 1;
  transform: translateY(0);
}




    /* ===== Back Button ===== */
    .back-btn {
      display: inline-block;
      padding: 12px 25px;
      border: 2px solid #fff;
      border-radius: 12px;
      color: #fff;
      font-family: 'Russo One', sans-serif;
      font-weight: 600;
      text-align: center;
      text-decoration: none;
      transition: all 0.4s ease;
      opacity: 0;
      transform: translateY(20px);
      position: fixed;
      bottom: 30px;
      right: 30px;
      z-index: 999;
      background: rgba(0,0,0,0.5);
    }
    .back-btn:hover {
      color: #000;
      background: rgba(255, 255, 255, 1);
      border-color: rgba(255, 255, 255, 1);
      box-shadow: 0 0 15px rgba(254, 255, 255, 0.5);
    }
    .back-btn.visible { opacity: 1; transform: translateY(0); }

    /* Responsive */
    @media (max-width: 900px) {
      .featured-project, .featured-project.reverse { flex-direction: column; }
    }

    /* Contact / Client Section */
.contact-section {
  width: 90%;
  max-width: 900px;
  margin: 100px auto 60px;
  padding: 40px 30px;
  background: #111;
  border: 2px solid #fff;
  border-radius: 12px;
  text-align: center;
  color: #fff;
}

.contact-section h2 {
  font-size: 2.5rem;
  margin-bottom: 15px;
}

.contact-section p {
  color: #ccc;
  margin-bottom: 30px;
}

.contact-links {
  display: flex;
  justify-content: center;
  gap: 2rem;
  margin-bottom: 30px;
}

.contact-links a {
  color: #fff;
  font-size: 1.2rem;
  border: 1px solid #fff;
  padding: 10px 20px;
  border-radius: 8px;
  transition: all 0.3s ease;
}

.contact-links a:hover {
  background: rgba(253, 255, 255, 1);
  color: #000;
  border-color: rgba(255, 255, 255, 1);
}

.contact-form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.contact-form input,
.contact-form textarea {
  padding: 12px 15px;
  border-radius: 8px;
  border: 1px solid #fff;
  background: #000;
  color: #fff;
  font-family: 'Russo One', sans-serif;
  font-size: 1rem;
  resize: none;
}

.contact-form input::placeholder,
.contact-form textarea::placeholder {
  color: #888;
}

.contact-form button {
  padding: 12px;
  font-size: 1rem;
  font-weight: 600;
  color: #000;
  background: rgba(255, 255, 255, 1);
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.3s ease;
}

.contact-form button:hover {s
  background: #fff;
  color: rgba(157, 161, 161, 1);
}

.glowing-button {
  padding: 12px 24px;
  background: transparent;
  color: #ffffffff;
  border: 2px solid #fefefeff;
  border-radius: 5px;
  font-weight: bold;
  font-size: 16px;
  cursor: pointer;
  box-shadow: 0 0 5px #00ffffff, 0 0 10prgba(255, 255, 255, 1)ff;
  transition: all 0.3s ease;
}

.glowing-button:hover {
  background: #ffffffff;
  color: #090808ff;
  box-shadow: 0 0 10px #000000ff, 0 0 20px #000000ff, 0 0 40px #000000ff;
}
  </style>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <a href="#offt">OFFT</a>
    <a href="#commbridge">CommBridge</a>
    <a href="#assawayer">Assawayer</a>
  </div>

  <!-- Header -->
  <div class="hero">
    <h1>Projects</h1>
    <p>Showcasing my featured works.</p>
  </div>

<!-- Marquee -->
<div class="marquee-container">
  <div class="marquee">
    <i class="fab fa-figma"></i>
    <i class="fas fa-code"></i>
    <i class="fab fa-react"></i>
    <i class="fab fa-php"></i>
    <i class="fab fa-adobe"></i>
    <i class="fab fa-node"></i>
    <i class="fab fa-git-alt"></i>
    <i class="fab fa-npm"></i>
    <i class="fab fa-canva"></i>
    <i class="fab fa-adobe"></i> <!-- Photoshop -->
    <i class="fab fa-java"></i>
    <i class="fab fa-css3-alt"></i>
    <i class="fab fa-html5"></i>
  </div>
</div>


  <!-- Featured Projects -->
<div class="featured-project" id="offt">
  <div class="featured-image" style="background-image:url('assets/offtindex.png');"></div>
  <div class="project-info">
    <h3>OFFT Clothing</h3>
    <p>Streetwear meets cinematic style. Designed with HTML, CSS, PHP & MySQL. Responsive and interactive layout with smooth animations.</p>
  </div>
</div>

<div class="featured-project reverse" id="commbridge">
  <div class="featured-image" style="background-image:url('assets/commbridge.png');"></div>
  <div class="project-info">
    <h3>CommBridge</h3>
    <p>Connecting people with seamless tech. Built with React, Node.js, and PHP backend for real-time interactions.</p>
  </div>
</div>

<div class="featured-project" id="assawayer">
  <div class="featured-image" style="background-image:url('assets/assawayer1.png');"></div>
  <div class="project-info">
    <h3>Assawayer Trading Inc.</h3>
    <p>Global logistics and trade platform. Developed using PHP, MySQL, and integrated inventory system.</p>
  </div>
</div>

 <!-- Projects Divider -->
<div class="projects-divider"></div>

<!-- Projects Grid -->
<div class="projects-grid">
  <a href="http://localhost/offthreadz/products.php" class="project-card" target="_blank">
    <div class="project-image" style="background-image:url('assets/offtindex.png');">
      <div class="overlay">View this project?</div>
    </div>
    <h3>OFFT Clothing</h3>
  </a>

  <a href="http://localhost/commbridge/index.php" class="project-card" target="_blank">
    <div class="project-image" style="background-image:url('assets/commbridge.png');">
      <div class="overlay">View this project?</div>
    </div>
    <h3>CommBridge</h3>
  </a>

  <a href="http://localhost/inventory_finals/home.php" class="project-card" target="_blank">
    <div class="project-image" style="background-image:url('assets/assawayer1.png');">
      <div class="overlay">View this project?</div>
    </div>
    <h3>Assawayer Trading Inc.</h3>
  </a>
</div>


<!-- Contact / Client Section -->
<div class="contact-section">
  <h2>Work With Me</h2>
  <p>If you want a project made, feel free to reach out via any of the links below or send a message directly.</p>

  <!-- Button to reveal form -->
  <button class="glowing-button" id="reveal-contact">Contact Me</button>

  <!-- Hidden content -->
  <div id="contact-content" style="display:none; margin-top:20px;">
    <div class="contact-links">
      <a href="mailto:yourr.jtmagatinfo@gmail.com" target="_blank"><i class="fas fa-envelope"></i> Gmail</a>
      <a href="https://www.facebook.com/shujinjk" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
      <a href="https://www.instagram.com/_hoyyjk/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
    </div>

    <form action="https://formspree.io/f/xgvzgbeg" method="POST" class="contact-form">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>
</div>

  <a href="portfolio.php" class="back-btn">Back to Home</a>

  <script>
    const featured = document.querySelectorAll('.featured-project');
    const revealFeatured = () => {
      const trigger = window.innerHeight * 0.85;
      featured.forEach(f => {
        const top = f.getBoundingClientRect().top;
        if(top < trigger) f.classList.add('visible');
      });
    };
    window.addEventListener('scroll', revealFeatured);
    revealFeatured();

    const cards = document.querySelectorAll('.project-card');
    const revealCards = () => {
      const trigger = window.innerHeight * 0.85;
      cards.forEach(card => {
        const top = card.getBoundingClientRect().top;
        if(top < trigger) card.classList.add('visible');
      });
    };
    window.addEventListener('scroll', revealCards);
    revealCards();

    let lastScroll = 0;
    const backBtn = document.querySelector('.back-btn');
    window.addEventListener('scroll', () => {
      const currentScroll = window.scrollY;
           if(currentScroll < lastScroll && currentScroll > 100) {
        backBtn.classList.add('visible');
      } else {
        backBtn.classList.remove('visible');
      }
      lastScroll = currentScroll;
    });

      const btn = document.getElementById('reveal-contact');
  const content = document.getElementById('contact-content');

  btn.addEventListener('click', () => {
    content.style.display = 'block';
    btn.style.display = 'none'; // hide button after click
  });
  </script>

</body>
</html>
