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
.navbar {
  width: 100%;
  top: 0;
  left: 0;
  position: fixed;
  display: flex;
  justify-content: center;
  border-bottom: 1px solid #000;
  background: #fff;
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
  padding: 14px 0;
  font-weight: 600;
  color: #000;
  border-right: 1px solid #000;
  transition: background 0.3s, color 0.3s;
}
.navbar a:last-child {
  border-right: none;
}
.navbar a:hover {
  background: #000;
  color: #fff;
}
/* Import Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Orbitron:wght@400;700&display=swap');

/* Import Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600;800&family=Playfair+Display:wght@700&display=swap');

/* ===== Hero ===== */
.hero-section {
  background: #fff;
  text-align: center;
  padding: 160px 20px 100px;
}

.hero-title {
  font-size: 8rem;
  font-weight: 900;
  margin: 0;
  color: #000;
  animation: scaleIn 0.8s ease-out forwards;
  z-index: 1;
  position: relative;
}

.hero-section p {
  font-size: 1.2rem;
  color: #444;
  max-width: 800px;
  margin: 20px auto 0;
  line-height: 1.6;
  animation: slideUp 1s ease-out forwards;
  z-index: 1;
  position: relative;
}

/* Animations */
@keyframes scaleIn {
  0% { opacity: 0; transform: scale(0.8); }
  100% { opacity: 1; transform: scale(1); }
}

@keyframes slideUp {
  0% { opacity: 0; transform: translateY(30px); }
  100% { opacity: 1; transform: translateY(0); }
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

.project.show {
  transition: transform 0.3s ease;
}
.project.show:hover {
  transform: translateY(-10px) scale(1.05);
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

/* Bingo section default bg (fallback kapag di pa naglo-load ang slideshow) */
.bingo { 
  background: url('assets/bingo1.jpg') no-repeat center/cover; 
}

/* Subtle pulse tuwing magpapalit ang image */
.project.bg-anim {
  animation: pulseZoom 0.9s ease;
}
@keyframes pulseZoom {
  0%   { transform: scale(1); }
  50%  { transform: scale(1.03); }
  100% { transform: scale(1); }
}


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

/* Cursor base */
.cursor {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  position: fixed;
  top: 0;
  left: 0;
  pointer-events: none;
  z-index: 9999;
  background: rgba(0, 255, 200, 0.5);
  box-shadow: 0 0 20px rgba(0, 255, 200, 0.8), 0 0 40px rgba(0, 255, 200, 0.4);
  transform: translate(-50%, -50%);
  transition: width 0.2s ease, height 0.2s ease, background 0.3s ease, box-shadow 0.3s ease;
}

/* Cursor hover enlarge */
a:hover ~ .cursor,
button:hover ~ .cursor,
.project:hover ~ .cursor {
  width: 40px;
  height: 40px;
  background: rgba(0, 150, 255, 0.5);
  box-shadow: 0 0 30px rgba(0, 150, 255, 0.9), 0 0 60px rgba(0, 150, 255, 0.6);
}

/* Crosser effect for hero/project titles */
.crosser {
  position: relative;
  display: inline-block;
  overflow: hidden;
}

.crosser::after {
  content: "";
  position: absolute;
  top: 50%;
  left: -120%;
  width: 100%;
  height: 2px;
  background: #00ffc8;
  transform: rotate(-20deg);
  animation: crosserAnim 2s linear infinite;
}

@keyframes crosserAnim {
  0% { left: -120%; }
  100% { left: 120%; }
}

/* Project pulse animation on bg change */
.project.bg-anim {
  animation: pulseZoom 0.9s ease;
}
@keyframes pulseZoom {
  0%   { transform: scale(1); }
  50%  { transform: scale(1.03); }
  100% { transform: scale(1); }
}


</style>
</head>
<body>

<!-- Navbar -->
<div class="navbar" id="navbar">
<a href="#assawayer">Assawayer</a>
  <a href="#commbridge">CommBridge</a>
   <a href="#offt">OFFT</a>
  <a href="#bingo">Bingo Schedule</a>
</div>

<!-- Hero -->
<div class="hero-section">
  <h1 class="hero-title">PROJECTS</h1>
  <p>
    Hi, I’m JK — I create modern, functional, and stylish projects ranging from 
    web applications to full-scale business solutions.  
    This page showcases a few highlights of my work.  
    While <strong>“About Me”</strong> tells you who I am,  
    <strong>“Projects”</strong> shows what I can do.  
  </p>
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

<section class="project bingo" id="bingo" 
  data-images="assets/bingoschedule.png,assets/bingo2.png">
  <h1>Bingo Schedule</h1>
  <div class="project-buttons">
    <a href="https://github.com/jtmagat/bingo_schedule.git" target="_blank" class="project-link">
      View on GitHub
    </a>
    <a href="bingo_demo.php" class="project-link">
      View Demo
    </a>
  </div>
</section>

<!-- Contact -->
<div class="contact-section" id="contact">
  <h2>Work With Me</h2>
  <p>If you want a project made, feel free to reach out via any of the links below or send me a message directly.</p>
  
  <!-- Contact Links -->
  <div class="contact-links">
    <a href="mailto:jtmagatinfo@gmail.com" target="_blank"><i class="fas fa-envelope"></i> Work Email</a>
    <a href="mailto:mjamelkim@gmail.com" target="_blank"><i class="fas fa-envelope"></i> Personal Email</a>
    <a href="https://www.facebook.com/shujinjk" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
    <a href="https://www.instagram.com/_hoyyjk/" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
  </div>

  <!-- Contact Form -->
  <form action="https://formspree.io/f/xldjyang" method="POST" class="contact-form">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="_replyto" placeholder="Your Email" required>
    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
    <button type="submit">Send Message</button>
  </form>
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

  // Back button: show after scrolling down
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

  // === Simple background slideshow for any .project that has data-images ===
  document.addEventListener('DOMContentLoaded', () => {
    const slideshows = document.querySelectorAll('section.project[data-images]');
    slideshows.forEach(section => {
      const list = section.dataset.images
        .split(',')
        .map(s => s.trim())
        .filter(Boolean);

      if (list.length < 2) return; // need at least 2 to rotate

      let idx = 0;
      // set initial bg
      section.style.backgroundImage = `url('${list[idx]}')`;

      setInterval(() => {
        idx = (idx + 1) % list.length;
        // swap bg
        section.style.backgroundImage = `url('${list[idx]}')`;
        // subtle pulse cue
        section.classList.add('bg-anim');
        setTimeout(() => section.classList.remove('bg-anim'), 900);
      }, 4000); // every 4s; adjust as you like
    });
  });

  gsap.registerPlugin(ScrollTrigger);

// GSAP scroll reveal (opacity + slide/scale)
gsap.utils.toArray("section.project, .hero-section").forEach((section) => {
  gsap.from(section.children, {
    opacity: 0,
    y: 80,
    duration: 1,
    ease: "power3.out",
    scrollTrigger: {
      trigger: section,
      start: "top 80%",
      toggleActions: "play none none reverse"
    }
  });
});

// Magnet effect via IntersectionObserver
document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll("section.project");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show"); // enable hover magnet
      }
    });
  }, { threshold: 0.3 });

  sections.forEach(section => observer.observe(section));
});
gsap.registerPlugin(ScrollTrigger);

// Scroll reveal / magnet effect for projects
document.querySelectorAll("section.project, .hero-section").forEach((section) => {
  gsap.from(section.children, {
    opacity: 0,
    y: 80,
    scale: 0.95,
    duration: 1,
    ease: "power3.out",
    scrollTrigger: {
      trigger: section,
      start: "top 80%",
      toggleActions: "play none none reverse"
    }
  });
});

// Magnet effect trigger via IntersectionObserver
document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll("section.project");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      }
    });
  }, { threshold: 0.3 });

  sections.forEach(section => observer.observe(section));
});

// Background slideshow for sections with multiple images
document.querySelectorAll(".slideshow").forEach(section => {
  const images = section.dataset.images.split(",").map(s => s.trim()).filter(Boolean);
  if(images.length < 2) return;

  let index = 0;
  section.style.backgroundImage = `url('${images[index]}')`;

  setInterval(() => {
    index = (index + 1) % images.length;
    section.style.backgroundImage = `url('${images[index]}')`;
    section.classList.add('bg-anim');
    setTimeout(() => section.classList.remove('bg-anim'), 900);
  }, 4000); // change every 4s
});

// Cursor movement
const cursor = document.createElement("div");
cursor.classList.add("cursor");
document.body.appendChild(cursor);

document.addEventListener("mousemove", e => {
  gsap.to(cursor, { x: e.clientX, y: e.clientY, duration: 0.1, ease: "power2.out" });
});

// Cursor hover scale for interactive elements
document.querySelectorAll("a, button, .project").forEach(el => {
  el.addEventListener("mouseenter", () => {
    gsap.to(cursor, { scale: 2, duration: 0.3, ease: "power2.out" });
  });
  el.addEventListener("mouseleave", () => {
    gsap.to(cursor, { scale: 1, duration: 0.3, ease: "power2.out" });
  });
});


</script>

</body>
</html>
