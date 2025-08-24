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

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<style>
body {
  font-family: 'Russo One', sans-serif;
  margin: 0;
  padding: 0;
  background: #fff;
  color: #111;
  overflow-x: hidden;
}
a { text-decoration: none; color: inherit; }

/* ===== Navbar ===== */
/* ===== Navbar ===== */
.navbar {
  width: 90%;
  max-width: 1200px;
  margin: 20px auto 0;
  display: flex;
  justify-content: center;
  border: 1px solid #000;
  border-radius: 12px;
  overflow: hidden;
  background: #fff;
  position: relative; /* not fixed */
  z-index: 1000;
  transition: transform 0.4s ease, opacity 0.4s ease;
}

.navbar.hidden {
  transform: translateY(-100%);
  opacity: 0;
}

.navbar a {
  flex: 1;
  text-align: center;
  padding: 12px 0;
  font-weight: 600;
  color: #000;
  border-right: 1px solid #000;
  transition: background 0.3s, color 0.3s;
}
.navbar a:last-child { border-right: none; }
.navbar a:hover { background: #000; color: #fff; }
/* Import Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Orbitron:wght@400;700&display=swap');

/* Import Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600;800&family=Playfair+Display:wght@700&display=swap');

/* Hero Section */
.hero-section {
  position: relative;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  overflow: hidden;
  color: #000;
  background: linear-gradient(270deg, #000, #fff, #000);
  background-size: 600% 600%;
  animation: gradientMove 12s ease infinite;
}

@keyframes gradientMove {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

.hero-section h1,
.hero-section p {
  position: relative;
  z-index: 2; /* para nasa ibabaw ng animation */
}

.slideshow {
  position: relative;
  background-size: cover;
  background-position: center;
  transition: background-image 1s ease-in-out;
  animation: zoomPan 8s infinite alternate ease-in-out;
}

@keyframes zoomPan {
  0% {
    background-size: 100%;
    background-position: center;
  }
  50% {
    background-size: 110%; /* zoom in */
    background-position: center top; /* slight pan up */
  }
  100% {
    background-size: 100%;
    background-position: center;
  }
}



/* ===== Project Sections ===== */
section.project {
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  color: #fff;  
  position: relative;
  margin: 50px auto;   /* space top/bottom */
  max-width: 95%;      /* space left/right */
  border-radius: 20px; /* optional, para mas clean */
  overflow: hidden;    /* para hindi lumabas background */
}
section.project::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.6);
}

section.project.show {
  opacity: 1;
  transform: scale(1) translateY(0);
}

section.project > * { position: relative; z-index: 1; }
section.project h1 { font-size: 3.5rem; margin-bottom: 20px; }

.project-link {
  margin-top: 15px;
  padding: 12px 24px;
  border: 2px solid #ffffffff;
  color: #ffffffff;
  text-decoration: none;
  border-radius: 8px;
  font-size: 1.2rem;
  transition: all 0.3s ease;
}
.project-link:hover {
  background: #ffffffff;
  color: #000;
  box-shadow: 0 0 15px #000000ff;
}
@keyframes magnetEffect {
  0% {
    opacity: 0;
    transform: translateY(80px);
  }
  60% {
    opacity: 1;
    transform: translateY(-15px); /* overshoot up */
  }
  80% {
    transform: translateY(8px); /* bounce down */
  }
  100% {
    transform: translateY(0); /* settle */
  }
}

section.project {
  opacity: 0;
  transform: translateY(80px);
  transition: none; /* alisin transition */
}

section.project.show {
  animation: magnetEffect 0.9s ease-out forwards;
}

.offt { background: url('assets/offtindex.png') no-repeat center/cover; }
.commbridge { background: url('assets/commbridge.png') no-repeat center/cover; }
.assawayer { background: url('assets/assawayer1.png') no-repeat center/cover; }

/* ===== Contact Section ===== */
.contact-section {
  width: 90%;
  max-width: 900px;
  margin: 100px auto 60px;
  padding: 40px 30px;
  background: #fff;
  border: 2px solid #000;
  border-radius: 12px;
  text-align: center;
  color: #000;
}
.contact-section h2 { font-size: 2.5rem; margin-bottom: 15px; }
.contact-section p { color: #444; margin-bottom: 30px; }
.contact-links {
  display: flex;
  justify-content: center;
  gap: 2rem;
  margin-bottom: 30px;
}
.contact-links a {
  color: #000;
  font-size: 1.2rem;
  border: 1px solid #000;
  padding: 10px 20px;
  border-radius: 8px;
  transition: all 0.3s ease;
}
.contact-links a:hover { background: #000; color: #fff; }

.contact-form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}
.contact-form input,
.contact-form textarea {
  padding: 12px 15px;
  border-radius: 8px;
  border: 1px solid #000;
  background: #fff;
  color: #000;
  font-family: 'Russo One', sans-serif;
  font-size: 1rem;
  resize: none;
}
.contact-form button {
  padding: 12px;
  font-size: 1rem;
  font-weight: 600;
  color: #fff;
  background: #000;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.contact-form button:hover { background: #333; }

.glowing-button {
  padding: 12px 24px;
  background: transparent;
  color: #000;
  border: 2px solid #000;
  border-radius: 5px;
  font-weight: bold;
  font-size: 16px;
  cursor: pointer;
  box-shadow: 0 0 5px #000, 0 0 10px #000;
  transition: all 0.3s ease;
}
.glowing-button:hover {
  background: #000;
  color: #fff;
  box-shadow: 0 0 10px #000, 0 0 20px #000, 0 0 40px #000;
}

/* ===== Back Button ===== */
.back-btn {
  display: inline-block;
  padding: 12px 25px;
  border: 2px solid #000;
  border-radius: 12px;
  color: #000;
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
  background: rgba(255,255,255,0.8);
}
.back-btn:hover {
  color: #fff;
  background: #000;
  border-color: #000;
  box-shadow: 0 0 15px rgba(0,0,0,0.3);
}
.back-btn.visible { opacity: 1; transform: translateY(0); }

</style>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar" id="navbar">
     <a href="#assawayer">Assawayer</a>
    <a href="#commbridge">CommBridge</a>
      <a href="#offt">OFFT</a>
  </div>

<!-- Hero -->
<div class="hero-section">
  <h1>PROJECTS</h1>
  <p>
    Hi, I’m JK — I create modern, functional, and stylish projects ranging from 
    web applications to full-scale business solutions.  
    This page showcases a few highlights of my work.  
    While <strong>“About Me”</strong> tells you who I am,  
    <strong>“Projects”</strong> shows what I can do.  
  </p>
  <div class="hero-lines">
    <span></span>
    <span class="circle"></span>
    <span></span>
  </div>
</div>
<!-- Project Sections -->

<section class="project assawayer slideshow" id="assawayer"
  data-images="assets/assawayer1.png,assets/assawayer2.png,assets/assawayer3.png">
  <h1>Assawayer Trading Inc.</h1>
  <a href="http://localhost/inventory_finals/home.php" target="_blank" class="project-link">View Project</a>
</section>

<section class="project commbridge slideshow" id="commbridge"
  data-images="assets/commbridge.png,assets/commbridge2.png">
  <h1>CommBridge</h1>
  <a href="http://localhost/commbridge/index.php" target="_blank" class="project-link">View Project</a>
</section>

<section class="project offt slideshow" id="offt" 
  data-images="assets/offtindex.png,assets/offt2.png">
  <h1>OFFT Clothing</h1>
  <a href="http://localhost/offthreadz/products.php" target="_blank" class="project-link">View Project</a>
</section>



  <!-- Contact -->
  <div class="contact-section">
    <h2>Work With Me</h2>
    <p>If you want a project made, feel free to reach out via any of the links below or send a message directly.</p>
    <div class="contact-links">
      <a href="mailto:jtmagatinfo@gmail.com" target="_blank"><i class="fas fa-envelope"></i> Work Email</a>
      <a href="mailto:mjamelkim@gmail.com" target="_blank"><i class="fas fa-envelope"></i> Personal Email</a>
      <a href="https://www.facebook.com/shujinjk" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
      <a href="https://www.instagram.com/_hoyyjk/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
    </div>
  </div>

  <a href="portfolio.php" class="back-btn">Back to Home</a>

<script>
  gsap.registerPlugin(ScrollTrigger);

  // Animate sections
  gsap.utils.toArray("section.project, .hero-section").forEach((section) => {
    gsap.from(section.children, {
      opacity: 0,
      y: 80,
      scale: 0.95,
      duration: 1,
      ease: "power3.out",
      scrollTrigger: {
        trigger: section,
        start: "top center",
        end: "bottom center",
        toggleActions: "play none none reverse"
      }
    });
  });

  // Navbar + Back Button Scroll Behavior
  let lastScroll = 0;
  const navbar = document.querySelector('.navbar');
  const backBtn = document.querySelector('.back-btn');

  window.addEventListener('scroll', () => {
    const currentScroll = window.scrollY;

    // Navbar: hide when scrolling down, show when scrolling up
    if (currentScroll > lastScroll && currentScroll > 100) {
      navbar.classList.add('hidden');
    } else {
      navbar.classList.remove('hidden');
    }

    // Back button: show after scrolling up a bit
    if (currentScroll > 200) {
      backBtn.classList.add('visible');
    } else {
      backBtn.classList.remove('visible');
    }

    lastScroll = currentScroll;
  });

  // Magnet effect trigger via Intersection Observer
  document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("section.project");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
        }
      });
    }, { threshold: 0.3 });

    sections.forEach(section => {
      observer.observe(section);
    });
  });

document.querySelectorAll(".slideshow").forEach(section => {
  const images = section.dataset.images.split(",");
  let index = 0;

  section.style.backgroundImage = `url('${images[index]}')`;

  setInterval(() => {
    index = (index + 1) % images.length;
    section.style.backgroundImage = `url('${images[index]}')`;
  }, 3000); // palit every 5s
});
</script>

</body>
</html>
