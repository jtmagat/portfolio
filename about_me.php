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

/* ========== HOBBIES ==========\ */
#hobbies {
  text-align: center;
  padding: 60px 20px;
  background: linear-gradient(135deg, #fff, #f9f9f9);
}

#hobbies h2 {
  font-size: 2.5rem;
  margin-bottom: 40px;
  position: relative;
}
#hobbies h2::after {
  content: "";
  width: 80px;
  height: 4px;
  background: #000;
  display: block;
  margin: 10px auto 0;
  border-radius: 2px;
}

.hobby-container {
  display: flex;
  gap: 25px;
  flex-wrap: wrap;
  justify-content: center;
}

.hobby-card {
  flex: 1 1 280px;
  background: #fff;
  border: 2px solid #000;
  border-radius: 18px;
  padding: 25px;
  box-shadow: 4px 6px 0px #000;
  text-align: center;
  position: relative;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  cursor: pointer;
}

.hobby-card:hover {
  transform: translateY(-12px) rotate(-1deg);
  box-shadow: 8px 12px 0px #000;
}

.hobby-card h3 {
  font-size: 1.4rem;
  margin: 15px 0 8px;
}

.hobby-card p {
  font-size: 0.95rem;
  color: #444;
}

/* --- Basketball --- */
.basketball-card .icon.basketball {
  width: 80px;
  height: 80px;
  margin: 0 auto;
  background: radial-gradient(circle at 30% 30%, #ff6b00, #d35400);
  border-radius: 50%;
  position: relative;
  animation: bounce 1.8s infinite ease-in-out;
}
.basketball-card .icon.basketball::after {
  content: "";
  position: absolute;
  width: 100%;
  height: 6px;
  background: rgba(0,0,0,0.25);
  border-radius: 50%;
  bottom: -12px;
  left: 0;
  filter: blur(2px);
}

/* bounce ball */
@keyframes bounce {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-20px); }
}

/* --- Gaming --- */
.gaming-card .icon.gaming {
  width: 80px;
  height: 50px;
  margin: 0 auto;
  background: #000;
  border-radius: 12px;
  position: relative;
  box-shadow: 0 0 12px #1db954;
  animation: glow 2s infinite alternate;
}
.gaming-card .icon.gaming::before,
.gaming-card .icon.gaming::after {
  content: "";
  position: absolute;
  width: 12px;
  height: 12px;
  background: #1db954;
  border-radius: 50%;
  top: 50%;
  transform: translateY(-50%);
}
.gaming-card .icon.gaming::before { left: -18px; }
.gaming-card .icon.gaming::after { right: -18px; }

/* glowing controller */
@keyframes glow {
  from { box-shadow: 0 0 5px #1db954; }
  to { box-shadow: 0 0 20px #1db954; }
}

/* --- Coding --- */
.coding-card .icon.coding {
  width: 80px;
  height: 80px;
  margin: 0 auto;
  background: #222;
  color: lime;
  font-family: monospace;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}
.coding-card .icon.coding::before {
  content: "</>";
  font-size: 24px;
  color: lime;
}
.coding-card .code-lines {
  margin-top: 15px;
  font-family: monospace;
  text-align: left;
  font-size: 0.8rem;
  animation: typing 5s steps(40) infinite;
  white-space: nowrap;
  overflow: hidden;
  border-right: 2px solid lime;
}

/* typing effect */
@keyframes typing {
  0% { width: 0 }
  50% { width: 100% }
  100% { width: 0 }
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
  <a href="#certs">Certificates</a>
</nav>

<!-- HERO -->
<div class="hero">
  <h1 class="hero-title">ABOUT ME</h1>
  <img src="assets/me.jpg" alt="Jamel Magat" id="heroImg"/>
  <p class="hero-sub">y'all stalker</p>
</div>

<!-- BACK BUTTON -->
<div class="back-btn" id="backBtn">
  <a href="portfolio.php">⟵</a>
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

  lastScroll = currentScroll;
});

</script>
</body>
</html>
