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

/* ========== BASE ==========\ */
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

/* Back Button */
.back-btn {
  position: fixed;
  top: 20px;
  left: 20px;
  opacity: 0;
  transform: translateY(-10px);
  transition: all 0.25s ease;  /* mas mabilis */
  z-index: 1000;
  pointer-events: none; /* para di clickable pag hidden */
}

.back-btn.show {
  opacity: 1;
  transform: translateY(0);
  pointer-events: auto;
}

.back-btn a {
  text-decoration: none;  /* walang underline */
  font-size: 18px;
  font-weight: 600;
  color: #000;
  transition: color 0.2s ease;
}

.back-btn a:hover {
  color: #555;
}


#scrollUpBtn {
  position: fixed;
  bottom: 80px; /* adjust to navbar */
  right: 20px;
  width: 40px;
  height: 40px;
  background: #ffffffff;
  border-radius: 20px; /* circular button */
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.3s ease, transform 0.3s ease;
  z-index: 999;
}

#scrollUpBtn.show {
  opacity: 1;
  transform: translateY(0);
}

#scrollUpBtn svg {
  width: 20px;
  height: 45px;
  stroke: #000000ff;
}


/* ========== MUSIC ==========\ */
#music h2 {
  font-size: 2rem;
  margin-bottom: 10px;
}
#music .desc {
  font-size: 1rem;
  margin-bottom: 25px;
  color: #444;
}

/* dynamic playlist container */
#playlist-container {}

/* list */
.playlist {
  display: flex;
  flex-direction: column;
  gap: 15px;
  opacity: 0;
}
.playlist.slide-in-right { animation: slideInRight .45s ease forwards; }
.playlist.slide-in-left  { animation: slideInLeft .45s ease forwards; }
@keyframes slideInRight { from{opacity:0; transform: translateX(30px)} to{opacity:1; transform: translateX(0)} }
@keyframes slideInLeft  { from{opacity:0; transform: translateX(-30px)} to{opacity:1; transform: translateX(0)} }

/* card */
.track {
  display: flex;
  align-items: center;
  justify-content: space-between;
  border: 2px solid #000;
  padding: 12px 18px;
  border-radius: 12px;
  background: #fff;
  text-decoration: none;
  color: inherit;
  transition: transform 0.2s ease, box-shadow 0.3s ease, opacity .4s ease;
}
.track:hover {
  transform: scale(1.02);
  box-shadow: 2px 4px 12px rgba(0,0,0,0.15);
}

/* album */
.track img {
  width: 60px;
  height: 60px;
  border-radius: 10px;
  object-fit: cover;
  margin-right: 15px;
}

/* info */
.track-info { flex: 1; }
.track-info h3 { font-size: 1.2rem; margin: 0; }
.track-info p  { font-size: 0.9rem; margin: 2px 0 0; color: #555; }

/* play btn */
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
.play-btn:hover { background: #333; transform: scale(1.2); }

/* TRACK ANIMATIONS */
.animated-track { position: relative; overflow: hidden; background: linear-gradient(135deg, #fff, #f7f7f7); }
.animated-track:hover {
  background: linear-gradient(135deg, #323131ff, #848181ff, #cdc9c9ff, #ffffffff);
  animation: gradientShift 6s ease infinite;
}
@keyframes gradientShift {
  0% {background-position:0% 50%;}
  50% {background-position:100% 50%;}
  100% {background-position:0% 50%;}
}
.album-wrap { position: relative; }
.album-wrap img { border-radius: 50%; animation: spin 12s linear infinite; }
.animated-track:hover .album-wrap img { animation-duration: 3s; }
@keyframes spin { from { transform: rotate(0deg);} to { transform: rotate(360deg);} }

/* Equalizer bars */
.equalizer {
  position: absolute;
  bottom: 8px; left: 50%;
  transform: translateX(-50%);
  display: flex; gap: 3px;
}
.equalizer span {
  display: block;
  width: 4px; height: 8px;
  background: #000;
  animation: bounce 1s infinite ease-in-out;
}
.equalizer span:nth-child(1){ animation-delay: 0s;}
.equalizer span:nth-child(2){ animation-delay: .2s;}
.equalizer span:nth-child(3){ animation-delay: .4s;}
.equalizer span:nth-child(4){ animation-delay: .6s;}
@keyframes bounce { 0%,100%{height:6px} 50%{height:18px} }

/* Controls / Pagination */
.controls {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 14px;
  margin-top: 20px;
}
.controls button {
  background: #1db954;
  border: none;
  color: #000;
  font-weight: bold;
  padding: 10px 20px;
  border-radius: 10px;
  cursor: pointer;
  transition: background 0.3s, transform .15s;
}
.controls button:hover { background: #1ed760; transform: translateY(-1px); }
.controls button:disabled { background: #c9eecf; cursor: not-allowed; transform:none; }

#pagination { display: flex; gap: 8px; }
.page-btn {
  background: #1db954;
  color: #000;
  border: none;
  padding: 6px 12px;
  border-radius: 8px;
  cursor: pointer;
  font-weight: bold;
  transition: background 0.3s, transform .15s;
}
.page-btn:hover { background: #1ed760; transform: translateY(-1px); }
.page-btn.active { background: #fff; border: 2px solid #000; }

/* Hobbies Section */
#hobbies {
  text-align: center;
  padding: 60px 20px;
  background: #f7f7f7;
}

#hobbies h2 {
  font-size: 2.5rem;
  margin-bottom: 40px;
  color: #1a1a1a;
  position: relative;
}

#hobbies h2::after {
  content: "";
  width: 60px;
  height: 3px;
  background: #1a1a1a;
  display: block;
  margin: 12px auto 0;
  border-radius: 2px;
}

.hobby-container {
  display: flex;
  gap: 30px;
  flex-wrap: wrap;
  justify-content: center;
}

/* Hobby Card */
.hobby-card {
  flex: 1 1 260px;
  background: #ffffffff;
  border-radius: 16px;
  padding: 30px 20px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.08);
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  cursor: pointer;
}

.hobby-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 12px 28px rgba(0,0,0,0.12);
}

.hobby-card .icon {
  margin-bottom: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: transform 0.3s ease;
}

.hobby-card:hover .icon {
  transform: scale(1.1);
}

.hobby-card h3 {
  font-size: 1.4rem;
  margin: 0 0 12px;
  color: #000000ff;
  font-weight: 600;
}

.hobby-card p {
  font-size: 0.95rem;
  color: #ffffffff;
  line-height: 1.5;
}


/* MENU SECTION */
.taste-section {
  background: #fff;
  padding: 80px 20px;
  border-radius: 20px;
  text-align: center;
}

.menu-title {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 10px;
  color: #111;
}

.menu-subtitle {
  font-size: 1rem;
  color: #ffffffff;
  margin-bottom: 40px;
}

/* GRID */
.menu-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 40px;
  max-width: 1000px;
  margin: auto;
}

/* ITEM CARD */
.menu-item {
  background: #ffffffff;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 6px 20px rgba(0,0,0,0.08);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  cursor: pointer;
}
.menu-item:hover {
  transform: translateY(-8px) scale(1.02);
  box-shadow: 0 12px 28px rgba(0,0,0,0.15);
}

/* IMAGE */
.menu-img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  transition: transform 0.4s ease;
}
.menu-item:hover .menu-img {
  transform: scale(1.1);
}

/* INFO TEXT */
.menu-info {
  padding: 20px;
  text-align: left;
}
.menu-info h3 {
  margin: 0 0 10px;
  font-size: 1.3rem;
  color: #222;
}
.menu-info p {
  font-size: 0.95rem;
  color: #555;
}


/* School Cards */
/* Vertical school list */
.school-list {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 25px;
  margin-top: 30px;
}

.school-card {
  background: #fff;
  border: 2px solid #333;
  border-radius: 12px;
  padding: 20px;
  width: 320px;
  box-shadow: 4px 4px 0 #555;
  text-align: center;
  opacity: 0;              /* hidden by default for animation */
  transform: translateY(30px);
  transition: transform 0.6s ease, opacity 0.6s ease;
}

.school-card h3 {
  margin-bottom: 8px;
  font-size: 1.2rem;
  color: #111;
}

.school-card span {
  font-size: 0.95rem;
  color: #555;
}

.school-card a {
  display: inline-block;
  margin-top: 10px;
  font-size: 0.9rem;
  color: #fff;
  background: #222;
  padding: 8px 16px;
  border-radius: 6px;
  text-decoration: none;
  transition: background 0.3s;
}

.school-card a:hover {
  background: #555;
}

/* Animation active state */
.school-card.show {
  opacity: 1;
  transform: translateY(0);
}

/* Modal */
.modal {
  display: none;
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.7);
  z-index: 999;
  animation: fadeIn 0.3s;
}
.modal-content {
  background: #fff;
  margin: 10% auto;
  padding: 25px;
  width: 90%;
  max-width: 480px;
  border-radius: 12px;
  box-shadow: 6px 6px 0 #555;
  text-align: center;
  animation: slideIn 0.4s;
}
.modal-content h2 {
  margin-bottom: 10px;
  color: #111;
}
.modal-content p {
  margin-bottom: 20px;
  color: #444;
}
.visit-btn {
  background: #222;
  color: white;
  padding: 10px 20px;
  border-radius: 8px;
  text-decoration: none;
  font-size: 0.95rem;
  transition: background 0.3s;
}
.visit-btn:hover {
  background: #555;
}
.close {
  position: absolute;
  top: 18px;
  right: 25px;
  font-size: 28px;
  cursor: pointer;
  color: #333;
}

/* Animations */
@keyframes fadeIn {
  from { opacity: 0; } to { opacity: 1; }
}
@keyframes slideIn {
  from { transform: translateY(-30px); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}

/* typing effect */
@keyframes typing {
  0% { width: 0 }
  50% { width: 100% }
  100% { width: 0 }
}

  /* Album Grid */
  .album-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 30px;
  }

  /* Card Style */
  .album-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    overflow: hidden;
    text-align: center;
    cursor: pointer;
    padding: 10px; /* white frame look */
    transform: rotate(var(--tilt));
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  /* Random tilt effect */
  .album-card:nth-child(2n) { --tilt: -3deg; }
  .album-card:nth-child(3n) { --tilt: 2deg; }
  .album-card:nth-child(4n) { --tilt: -2deg; }
  .album-card:nth-child(5n) { --tilt: 1deg; }
  .album-card { --tilt: 0deg; }

  .album-card:hover {
    transform: rotate(0deg) scale(1.05); /* straighten + zoom on hover */
    box-shadow: 0 10px 20px rgba(0,0,0,0.25);
  }

  .album-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 6px;
  }

  .album-card .caption {
    display: block;
    margin-top: 8px;
    font-size: 0.85rem;
    color: #333;
    font-style: italic;
  }

  /* LIGHTBOX */
  .lightbox {
    position: fixed;
    top:0; left:0;
    width:100%; height:100%;
    background: rgba(0,0,0,0.8);
    display:flex;
    align-items:center;
    justify-content:center;
    z-index:9999;
  }
  .lightbox img {
    max-width:90%;
    max-height:90%;
    border-radius:10px;
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
@media (max-width: 600px){
  .hobby-container { flex-direction: column; align-items: center; gap: 30px; }
  .hobby-card { width: 90%; height: auto; padding: 20px; }
  .icon { width: 80px; height: 80px; }
}
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
      <a href="#taste">Taste</a>
      <a href="#school">School</a>
      <a href="#album">Me</a>
    </nav>

    <!-- HERO -->
    <div class="hero">
      <h1 class="hero-title">BOUT' ME</h1>
      <img src="assets/me.jpg" alt="Jamel Magat" id="heroImg"/>
      <p class="hero-sub">y'all stalker</p>
    </div>

    <!-- BACK BUTTON -->
<div class="back-btn" id="backBtn">
  <a href="portfolio.php">⟵</a>
</div>

<!-- SCROLL UP BUTTON -->
<div id="scrollUpBtn">
  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <line x1="12" y1="19" x2="12" y2="5"></line>
    <polyline points="5 12 12 5 19 12"></polyline>
  </svg>
</div>



    <!-- MUSIC -->
    <section class="section" id="music">
      <h2>My Top 10 Tracks</h2>
      <p class="desc">My current rotation, is on fire innit.</p>

      <!-- dynamic render target -->
      <div id="playlist-container"></div>

      <!-- controls + pagination -->
      <div class="controls">
        <button id="prevBtn">⏮ Prev</button>
        <div id="pagination"></div>
        <button id="nextBtn">Next ⏭</button>
      </div>
    </section>

 <!-- HOBBIES -->
<div class="section" id="hobbies">
  <h2>Hobbies</h2>
  <div class="hobby-container">

    <div class="hobby-card">
      <div class="icon">
        <!-- Basketball Line Icon -->
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#1a1a1a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10"></circle>
          <path d="M2 12h20"></path>
          <path d="M12 2a15.3 15.3 0 0 1 0 20"></path>
          <path d="M12 2a15.3 15.3 0 0 0 0 20"></path>
        </svg>
      </div>
      <h3>Basketball</h3>
      <p>Hoopin’ on the court, dunking and flexing.</p>
    </div>

    <div class="hobby-card">
      <div class="icon">
        <!-- Gaming Controller Line Icon -->
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#1a1a1a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="6" width="20" height="12" rx="2"></rect>
          <circle cx="8" cy="12" r="1"></circle>
          <circle cx="16" cy="12" r="1"></circle>
        </svg>
      </div>
      <h3>Online Games</h3>
      <p>Grinding in virtual worlds, leveling up nonstop.</p>
    </div>

    <div class="hobby-card">
      <div class="icon">
        <!-- Code Line Icon -->
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#1a1a1a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="7 8 3 12 7 16"></polyline>
          <polyline points="17 8 21 12 17 16"></polyline>
          <line x1="14" y1="4" x2="10" y2="20"></line>
        </svg>
      </div>
      <h3>Coding</h3>
      <p>Building things that move, create, and inspire.</p>
    </div>

  </div>
</div>


  <!-- MENU / TASTE -->
<div class="section taste-section" id="taste">
  <h2 class="menu-title">My Taste Menu</h2>
  <p class="menu-subtitle">Things I can’t live without – my comfort flavors.</p>

  <div class="menu-grid">

    <!-- Matcha -->
    <div class="menu-item">
      <img src="assets/matcha.jpg" alt="Matcha" class="menu-img">
      <div class="menu-info">
        <h3>Matcha</h3>
        <p>Forever loyal to the green vibes – my calm in a cup.</p>
      </div>
    </div>

    <!-- Steak -->
    <div class="menu-item">
      <img src="assets/steak.jpg" alt="Steak" class="menu-img">
      <div class="menu-info">
        <h3>Steak</h3>
        <p>Juicy, buttery, and garlicky – comfort food done right.</p>
      </div>
    </div>

    <!-- Coffee -->
    <div class="menu-item">
      <img src="assets/icedcoff.jpg" alt="Coffee" class="menu-img">
      <div class="menu-info">
        <h3>Coffee</h3>
        <p>Caffeine + chill = my daily grind fuel.</p>
      </div>
    </div>

    <!-- Tacos -->
    <div class="menu-item">
      <img src="assets/tacos.jpg" alt="Tacos" class="menu-img">
      <div class="menu-info">
        <h3>Tacos</h3>
        <p>Crunchy, zesty, and packed with flavor – perfect bite every time.</p>
      </div>
    </div>

  </div>
</div>


<!-- SCHOOL SECTION -->
<div class="section" id="school">
  <h2>Education</h2>
  <p>My academic timeline.</p>

  <div class="school-list">
    <div class="school-card animate-up">
      <h3>Magalang Institute</h3>
      <span>Grade 1–3 (2011–2014)</span><br>
      <a href="https://www.facebook.com/MIC1946/" target="_blank">Visit Website</a>
    </div>

    <div class="school-card animate-up">
      <h3>His Care Christian Institute</h3>
      <span>Grade 4–6 (2014–2017)</span><br>
      <a href="https://www.facebook.com/hiscarechristianinstitutedarasa/" target="_blank">Visit Facebook</a>
    </div>

    <div class="school-card animate-up">
      <h3>FAITH – Junior High</h3>
      <span>Grade 7–10 (2017–2021)</span><br>
      <a href="https://www.firstasia.edu.ph/faith%20" target="_blank">Visit Website</a>
    </div>

    <div class="school-card animate-up">
      <h3>Fidelis Senior High – FAITH</h3>
      <span>Grade 11–12 (2021–2023)</span><br>
      <a href="https://www.firstasia.edu.ph/fidelis-sh/" target="_blank">Visit Website</a>
    </div>

    <div class="school-card animate-up">
      <h3>National University – Lipa</h3>
      <span>College (2023–Present, 3rd Year)</span><br>
      <a href="https://www.national-u.edu.ph/nu-lipa/" target="_blank">Visit Website</a>
    </div>
  </div>
</div>

<!-- ALBUM SECTION -->
<div class="section" id="album">
  <h2>Photo Album</h2>
  <p>A glimpse of my journey.</p>

  <div class="album-grid">
    <div class="album-card">
      <img src="assets/me.jpg" alt="Album photo 1">
      <span class="caption">Memory 1</span>
    </div>
    <div class="album-card">
      <img src="assets/jk2.jpg" alt="Album photo 2">
      <span class="caption">Memory 2</span>
    </div>
    <div class="album-card">
      <img src="assets/jk3.jpg" alt="Album photo 3">
      <span class="caption">Memory 3</span>
    </div>
    <div class="album-card">
      <img src="assets/jk4.jpg" alt="Album photo 4">
      <span class="caption">Memory 4</span>
    </div>
    <div class="album-card">
      <img src="assets/jk5.jpg" alt="Album photo 5">
      <span class="caption">Memory 5</span>
    </div>
    <div class="album-card">
      <img src="assets/jk6.jpg" alt="Album photo 6">
      <span class="caption">Memory 6</span>
    </div>
    <div class="album-card">
      <img src="assets/jk7.jpg" alt="Album photo 7">
      <span class="caption">Memory 7</span>
    </div>
    <div class="album-card">
      <img src="assets/jk8.jpg" alt="Album photo 8">
      <span class="caption">Memory 8</span>
    </div>
    <div class="album-card">
      <img src="assets/jk9.jpg" alt="Album photo 9">
      <span class="caption">Memory 9</span>
    </div>
    <div class="album-card">
      <img src="assets/jk10.jpg" alt="Album photo 10">
      <span class="caption">Memory 10</span>
    </div>
    <div class="album-card">
      <img src="assets/jk11.jpg" alt="Album photo 11">
      <span class="caption">Memory 11</span>
    </div>
    <div class="album-card">
      <img src="assets/jk12.jpg" alt="Album photo 12">
      <span class="caption">Memory 12</span>
    </div>
    <div class="album-card">
      <img src="assets/jk13.jpg" alt="Album photo 13">
      <span class="caption">Memory 13</span>
    </div>
    <div class="album-card">
      <img src="assets/jk14.jpg" alt="Album photo 14">
      <span class="caption">Memory 14</span>
    </div>
    <div class="album-card">
      <img src="assets/jk15.jpg" alt="Album photo 15">
      <span class="caption">Memory 15</span>
    </div>
    <div class="album-card">
      <img src="assets/jk16.jpg" alt="Album photo 16">
      <span class="caption">Memory 16</span>
    </div>
    <div class="album-card">
      <img src="assets/jk17.jpg" alt="Album photo 17">
      <span class="caption">Memory 17</span>
    </div>
  </div>
</div>



    <!-- FOOTER -->
    <footer>
      <div class="name">Jamel Magat</div>
      <p>&copy; 2025 All Rights Reserved.</p>
    </footer>

    <script>
    /* hero shrink + section reveal */
    const heroImg = document.getElementById('heroImg');
    const sections = document.querySelectorAll('.section');

    function handleScroll(){
      const threshold = window.innerHeight * 0.45;
      if (window.scrollY > threshold) {
        heroImg.classList.add('small');
      } else {
        heroImg.classList.remove('small');
      }
      const triggerBottom = window.innerHeight * 0.85;
      sections.forEach(sec => {
        const top = sec.getBoundingClientRect().top;
        if (top < triggerBottom) sec.classList.add('visible');
      });
    }
    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();

    /* ===== MUSIC DATA ===== */
    const tracksData = [
      { title: "Not You Too", artist: "Drake ft. Chris Brown", img: "assets/notutoo.jpg", link: "https://open.spotify.com/track/1" },
      { title: "Chicago Freestyle", artist: "Drake ft. Giveon", img: "assets/notutoo.jpg", link: "https://open.spotify.com/track/2" },
      { title: "20 Deep", artist: "O Side Mafia", img: "assets/20deep.jpg", link: "https://open.spotify.com/track/3" },
      { title: "UK Rap", artist: "Dave, Central Cee", img: "assets/ukrap.jpeg", link: "https://open.spotify.com/track/3Ofmpyhv5UAQ70mENzB277" },
      { title: "What Did I Miss?", artist: "Drake", img: "assets/whatdidimiss.jpg", link: "https://open.spotify.com/track/1IeAHTFukgidXjoMi95uf2?si=bc05ad7bfc954096" },
      { title: "Took Her To The O", artist: "King Von", img: "assets/tookhero.jpg", link: "https://open.spotify.com/track/0TK2YIli7K1leLovkQiNik" },
      { title: "If I Could Teach The World", artist: "Bone Thugs-N-Harmony", img: "assets/ificouldteachtheworld.jpg", link: "https://open.spotify.com/track/4XxP44Qk6cGcpBHNZ0Yp7A" },
      { title: "No Role Modelz", artist: "J. Cole", img: "assets/norolemodelz.jpg", link: "https://open.spotify.com/track/6ZNjE67N0Ftb3pC6iX4lnR" },
      { title: "Talkshit", artist: "Costa Cashman", img: "assets/talkshit.jpg", link: "https://open.spotify.com/track/6wWxz6Qg8OUnuntgSkeP4N?si=8f52529afde34513" },
      { title: "9", artist: "Drake", img: "assets/9.jpg", link: "https://open.spotify.com/track/1C7KSXR2GVxknex6I4ANco?si=8587a60ee11946ef" },
    ];

    const itemsPerPage = 5;
    let currentPage = 1;
    let lastPage = 1;

    const playlistContainer = document.getElementById('playlist-container');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const paginationDiv = document.getElementById('pagination');

    function renderTracks(page){
      // direction animation
      const slideClass = page > lastPage ? 'slide-in-right' : 'slide-in-left';
      lastPage = page;

      // compute slice
      const start = (page - 1) * itemsPerPage;
      const end = start + itemsPerPage;
      const pageTracks = tracksData.slice(start, end);

      // build list
      const list = document.createElement('div');
      list.className = `playlist ${slideClass}`;

      pageTracks.forEach(track => {
        list.innerHTML += `
          <a href="${track.link}" target="_blank" class="track animated-track">
            <div class="album-wrap">
              <img src="${track.img}" alt="${track.title}">
              <div class="equalizer"><span></span><span></span><span></span><span></span></div>
            </div>
            <div class="track-info">
              <h3>${track.title}</h3>
              <p>${track.artist}</p>
            </div>
            <button class="play-btn" aria-label="Play ${track.title}">▶</button>
          </a>
        `;
      });

      // swap DOM
      playlistContainer.innerHTML = '';
      playlistContainer.appendChild(list);

      renderPagination();
      updatePrevNext();
    }

    function renderPagination(){
      const totalPages = Math.ceil(tracksData.length / itemsPerPage);
      paginationDiv.innerHTML = '';
      for (let i = 1; i <= totalPages; i++) {
        const btn = document.createElement('button');
        btn.textContent = i;
        btn.className = 'page-btn' + (i === currentPage ? ' active' : '');
        btn.addEventListener('click', () => {
          currentPage = i;
          renderTracks(currentPage);
        });
        paginationDiv.appendChild(btn);
      }
    }

    function updatePrevNext(){
      const totalPages = Math.ceil(tracksData.length / itemsPerPage);
      prevBtn.disabled = currentPage === 1;
      nextBtn.disabled = currentPage === totalPages;
    }

    prevBtn.addEventListener('click', () => {
      if (currentPage > 1) {
        currentPage--;
        renderTracks(currentPage);
      }
    });
    nextBtn.addEventListener('click', () => {
      const totalPages = Math.ceil(tracksData.length / itemsPerPage);
      if (currentPage < totalPages) {
        currentPage++;
        renderTracks(currentPage);
      }
    });

    // init
    renderTracks(currentPage);

    const tracks = document.querySelectorAll('.track');

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.2 });

    tracks.forEach(track => observer.observe(track));

    let lastScroll = 0;
    window.addEventListener("scroll", () => {
      const backBtn = document.getElementById("backBtn");
      let currentScroll = window.scrollY;

      if (currentScroll > lastScroll) {
        // scrolling down → hide agad
        backBtn.classList.remove("show");
      } else {
        // scrolling up → show agad
        if (currentScroll > 20) {
          backBtn.classList.add("show");
        } else {
          backBtn.classList.remove("show");
        }
      }

      lastScroll = currentScroll;sapi_windows_cp_conv
    });

// Get all cards
const cards = Array.from(document.querySelectorAll('.school-card'));

// Set a stagger index for each card (used in CSS var --i)
cards.forEach((card, i) => card.style.setProperty('--i', i));

// Robust reveal with IntersectionObserver
function setupObserver() {
  if (!('IntersectionObserver' in window)) {
    // Fallback: just show them with a tiny stagger
    cards.forEach((c, i) => setTimeout(() => c.classList.add('show'), i * 120));
    return;
  }

  const obs = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        obs.unobserve(entry.target); // reveal once
      }
    });
  }, {
    root: null,
    threshold: 0.2,
    rootMargin: '0px 0px -10% 0px' // triggers a bit earlier for consistency
  });

  cards.forEach((c) => obs.observe(c));
}

window.addEventListener('load', setupObserver);

// Lightbox effect
document.querySelectorAll('.album-card img').forEach(img => {
  img.addEventListener('click', () => {
    const overlay = document.createElement('div');
    overlay.classList.add('lightbox');
    overlay.innerHTML = `<img src="${img.src}" alt="${img.alt}">`;
    document.body.appendChild(overlay);

    overlay.addEventListener('click', () => overlay.remove());
  });
});


document.querySelectorAll('.album-card img').forEach(img => {
  img.addEventListener('click', () => {
    const overlay = document.createElement('div');
    overlay.classList.add('lightbox');
    overlay.innerHTML = `<img src="${img.src}" alt="${img.alt}">`;
    document.body.appendChild(overlay);

    overlay.addEventListener('click', () => overlay.remove());
  });
});

let lastScrollTop = 0;
const scrollBtn = document.getElementById('scrollUpBtn');

window.addEventListener('scroll', () => {
  const st = window.pageYOffset || document.documentElement.scrollTop;

  if (st < lastScrollTop && st > 200) {
    // Scrolling up & scrolled down more than 200px
    scrollBtn.classList.add('show');
  } else {
    // Scrolling down
    scrollBtn.classList.remove('show');
  }

  lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
});

// Scroll to top on click
scrollBtn.addEventListener('click', () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
});


    </script>
    </body>
    </html>
