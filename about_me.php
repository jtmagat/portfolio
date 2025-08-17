<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>About Me – Jamel Magat</title>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<style>
:root{
  --nav-h: 70px;
  --avatar-size: 160px; /* small size after scroll */
}

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
  height: var(--nav-h);
  background: #fff;
  border-bottom: 1px solid #111;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 40px;
  padding: 0 20px;
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
nav a:hover::after { transform: scaleX(1); transform-origin: left; }

/* HERO */
.hero {
  height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;
  position: relative;
}
.hero-title {
  font-size: 10vw;
  letter-spacing: 4px;
  margin: 0;
  transform: translateY(-50px);
  opacity: 0;
  animation: slideDown 1s ease forwards;
}
.hero-sub {
  font-size: 1.5rem;
  margin-top: 20px;
  transform: translateY(50px);
  opacity: 0;
  animation: slideUp 1s ease forwards;
  animation-delay: 0.5s;
}

/* PICTURE */
#heroImg {
  width: 260px;
  height: 260px;
  border: 2px solid #111;
  object-fit: cover;
  margin: 20px 0;
  border-radius: 6px;
  opacity: 0;
  transform: scale(0.7);
  transition: transform .7s ease, width .7s ease, height .7s ease;
  animation: popIn 0.8s ease forwards;
  animation-delay: 0.3s;
}

/* shrink on scroll */
#heroImg.small {
  width: var(--avatar-size);
  height: var(--avatar-size);
  transform: scale(1.1); /* pop-out effect */
}

/* animations */
@keyframes slideDown { to { opacity: 1; transform: translateY(0);} }
@keyframes slideUp { to { opacity: 1; transform: translateY(0);} }
@keyframes popIn { to { opacity: 1; transform: scale(1);} }

/* SECTIONS */
.section {
  padding: 100px 20px;
  border-top: 1px solid #111;
  max-width: 800px;
  margin: 0 auto;
  opacity: 0;
  transform: translateY(50px);
  transition: opacity .8s ease-out, transform .8s ease-out;
}
.section.visible { opacity: 1; transform: translateY(0); }
.section h2 { font-size: 2.5rem; margin-bottom: 20px; }
.section p {
  font-family: Arial, sans-serif;
  font-size: 1rem;
  line-height: 1.6;
}

/* MUSIC PLAYLIST STYLE */
#music h2 {
  font-size: 2rem;
  margin-bottom: 10px;
}

#music .desc {
  font-size: 1rem;
  margin-bottom: 25px;
  color: #444;
}

.playlist {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.track {
  display: flex;
  align-items: center;
  justify-content: space-between;
  border: 2px solid #000;
  padding: 12px 18px;
  border-radius: 12px;
  background: #fff;
  text-decoration: none; /* remove underline */
  color: inherit;        /* keep text black */
  transition: transform 0.2s ease, box-shadow 0.3s ease;
}

.track:hover {
  transform: scale(1.02);
  box-shadow: 2px 4px 12px rgba(0,0,0,0.15);
}

.track img {
  width: 60px;
  height: 60px;
  border-radius: 10px;
  object-fit: cover;
  margin-right: 15px;
}

.track-info {
  flex: 1;
}

.track-info h3 {
  font-size: 1.2rem;
  margin: 0;
}

.track-info p {
  font-size: 0.9rem;
  margin: 2px 0 0;
  color: #555;
}

.play-btn {
  background: #000;
  color: #fff;
  border: none;
  padding: 10px 14px;
  font-size: 1rem;
  border-radius: 50%;
  cursor: pointer;
  transition: transform 0.2s ease, background 0.3s ease;
}

.play-btn:hover {
  background: #333;
  transform: scale(1.2);
}

>
/* HOBBIES SECTION */
.section#hobbies {
  perspective: 1200px; /* for 3D effect */
  position: relative;
  overflow: hidden;
  padding-bottom: 150px;
  background: linear-gradient(135deg, #1a1a1a, #111);
  color: #fff;
}

/* Floating sparkle background */
.section#hobbies::before {
  content:"";
  position:absolute;
  width:200%; height:200%;
  top:-50%; left:-50%;
  background: radial-gradient(circle, rgba(255,255,255,0.05) 0%, transparent 80%);
  animation: rotateBG 20s linear infinite;
  z-index:0;
}
@keyframes rotateBG { 0%{transform:rotate(0deg);} 100%{transform:rotate(360deg);} }

.hobby-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 40px;
  margin-top: 40px;
  position: relative;
  z-index: 1;
}

/* 3D Hobby Cards */
.hobby-card {
  width: 260px;
  height: 320px;
  border-radius: 25px;
  background: linear-gradient(145deg, #222, #111);
  box-shadow: 0 20px 40px rgba(0,0,0,0.7);
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 25px;
  transition: transform 0.6s ease, box-shadow 0.6s ease;
  transform-style: preserve-3d;
  cursor: pointer;
  overflow: hidden;
}

.hobby-card:hover {
  transform: rotateY(15deg) rotateX(10deg) translateY(-20px) scale(1.08);
  box-shadow: 0 30px 60px rgba(0,0,0,0.8);
}

/* 3D floating icon */
.icon {
  width: 100px;
  height: 100px;
  margin-bottom: 20px;
  border-radius: 50%;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center;
  transform-style: preserve-3d;
  animation: float 3s ease-in-out infinite alternate;
}

.basketball { background-image: url('assets/basketball.png'); }
.gaming     { background-image: url('assets/gaming.png'); }
.coding     { background-image: url('assets/coding.png'); }

@keyframes float {
  0% { transform: translateY(0px) rotateY(0deg); }
  50% { transform: translateY(-20px) rotateY(15deg); }
  100% { transform: translateY(0px) rotateY(0deg); }
}

/* Card text */
.hobby-card h3 {
  margin: 0;
  font-size: 1.5rem;
  text-align: center;
  letter-spacing: 1px;
}
.hobby-card p {
  font-size: 0.95rem;
  text-align: center;
  margin-top: 10px;
  line-height: 1.4;
  color: #ccc;
}

/* Basketball shadow bouncing */
.basketball-card .ball-shadow {
  width: 80px;
  height: 15px;
  background: radial-gradient(ellipse at center, rgba(0,0,0,0.5), transparent);
  border-radius: 50%;
  margin-top: 20px;
  animation: shadowBounce 1s infinite alternate;
}
@keyframes shadowBounce {
  0% { transform: scaleX(1) translateY(0); opacity:0.5; }
  50% { transform: scaleX(1.2) translateY(10px); opacity:0.7; }
  100% { transform: scaleX(1) translateY(0); opacity:0.5; }
}

/* Gaming glitch overlay */
.gaming-card .glitch-overlay {
  position: absolute;
  top:0; left:0; width:100%; height:100%;
  background: repeating-linear-gradient(
    0deg, rgba(255,255,255,0.03) 0px, rgba(255,255,255,0.03) 2px,
    transparent 2px, transparent 4px
  );
  mix-blend-mode: overlay;
  pointer-events: none;
  animation: glitch 0.3s infinite;
}
@keyframes glitch {
  0%{transform:translate(0,0);}
  25%{transform:translate(-5px,2px);}
  50%{transform:translate(3px,-3px);}
  75%{transform:translate(-2px,1px);}
  100%{transform:translate(0,0);}
}

/* Coding terminal effect */
.coding-card .code-lines {
  margin-top: 15px;
  width: 100%;
  font-family: 'Courier New', monospace;
  font-size: 0.85rem;
  color: #0f0;
  background: rgba(0,0,0,0.3);
  padding: 10px;
  border-radius: 10px;
  animation: typing 5s steps(40) infinite;
  overflow: hidden;
  white-space: nowrap;
}
@keyframes typing {
  0% { width: 0; }
  50% { width: 100%; }
  100% { width: 0; }
}

/* Responsive tweaks */
@media (max-width: 600px){
  .hobby-container { flex-direction: column; align-items: center; gap: 30px; }
  .hobby-card { width: 90%; height: auto; padding: 20px; }
  .icon { width: 80px; height: 80px; }
}

/* FOOTER */
footer {
  border-top: 1px solid #111;
  background: #fff;
  padding: 40px 20px;
  text-align: center;
  font-family: Arial, sans-serif;
  color: #111;
}
footer .name { font-size: 1.5rem; font-weight: bold; margin-bottom: 10px; font-family: 'Anton', sans-serif; }
footer p { font-size: 0.9rem; margin: 5px 0; }

/* small screens tweak */
@media (max-width: 480px){
  :root{ --avatar-size: 120px; }
  #heroImg{ width: 220px; height: 220px; }
}
</style>
</head>
<body>
<!-- NAVBAR -->
<nav>
  <a href="#music">Music</a>
  <a href="#hobbies">Hobbies</a>
  <a href="#certs">Certificates</a>
</nav>

<!-- HERO -->
<div class="hero">
  <h1 class="hero-title">ABOUT ME</h1>
  <img src="assets/me.jpg" alt="Jamel Magat" id="heroImg"/>
  <p class="hero-sub">Get to know my vibe</p>
</div>

<!-- MUSIC -->
<div class="section" id="music">
  <h2>🎶 My Top 10 Tracks</h2>
  <p class="desc">My current rotation, pure vibe & influence.</p>

  <div class="playlist">
    <!-- Track 1 -->
    <a href="https://open.spotify.com/track/1" target="_blank" class="track">
      <img src="assets/notutoo.jpg" alt="Album Art">
      <div class="track-info">
        <h3>Not You Too</h3>
        <p>Drake ft. Chris Brown</p>
      </div>
      <button class="play-btn">▶</button>
    </a>

    <!-- Track 2 -->
    <a href="https://open.spotify.com/track/2" target="_blank" class="track">
      <img src="assets/notutoo.jpg" alt="Album Art">
      <div class="track-info">
        <h3>Chicago Freestyle</h3>
        <p>Drake ft. Giveon</p>
      </div>
      <button class="play-btn">▶</button>
    </a>

    <!-- Track 3 -->
    <a href="https://open.spotify.com/track/3" target="_blank" class="track">
      <img src="assets/20deep.jpg" alt="Album Art">
      <div class="track-info">
        <h3>20 Deep</h3>
        <p>O Side Mafia</p>
      </div>
      <button class="play-btn">▶</button>
    </a>
  </div>
</div>

<!-- HOBBIES -->
<div class="section" id="hobbies">
  <h2>Hobbies</h2>
  <div class="hobby-container">
    <!-- Basketball -->
    <div class="hobby-card basketball-card">
      <div class="icon basketball"></div>
      <h3>Basketball</h3>
      <p>Hoopin’ on the court, dunking and flexing.</p>
      <div class="ball-shadow"></div>
    </div>

    <!-- Online Games -->
    <div class="hobby-card gaming-card">
      <div class="icon gaming"></div>
      <h3>Online Gaming</h3>
      <p>Grinding in virtual worlds, leveling up nonstop.</p>
      <div class="glitch-overlay"></div>
    </div>

    <!-- Coding -->
    <div class="hobby-card coding-card">
      <div class="icon coding"></div>
      <h3>Coding</h3>
      <p>Building things that move, create, and inspire.</p>
      <div class="code-lines">
        <span>console.log('Grind mode ON');</span>
        <span>function hustle() { return '💻'; }</span>
        <span>let energy = '100%';</span>
      </div>
    </div>
  </div>
</div>

<!-- CERTIFICATES -->
<div class="section" id="certs">
  <h2>Certificates</h2>
  <p>Earned milestones that back up the grind – from school projects to creative collabs, proof of consistency.</p>
</div>

<!-- FOOTER -->
<footer>
  <div class="name">Jamel Magat</div>
  <p>&copy; 2025 All Rights Reserved.</p>
</footer>

<script>
const heroImg = document.getElementById('heroImg');
const sections = document.querySelectorAll('.section');

function handleScroll(){
  const threshold = window.innerHeight * 0.45; 
  if (window.scrollY > threshold) {
    heroImg.classList.add('small');   // shrink w/ pop effect
  } else {
    heroImg.classList.remove('small'); // back to big
  }

  // reveal sections
  const triggerBottom = window.innerHeight * 0.85;
  sections.forEach(sec => {
    const top = sec.getBoundingClientRect().top;
    if (top < triggerBottom) sec.classList.add('visible');
  });
}

window.addEventListener('scroll', handleScroll, { passive: true });
handleScroll();
</script>
</body>
</html>
