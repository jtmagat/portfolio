<?php
// bingo_demo.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bingo Schedule Demo</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background: #f9f9f9;
      color: #111;
    }

    header {
      text-align: center;
      padding: 40px 20px;
      border-bottom: 2px solid #000;
      background: #fff;
    }

    header h1 {
      font-size: 2.5rem;
      font-weight: 800;
    }

    .subtitle {
      max-width: 800px;
      margin: 15px auto 0;
      font-size: 1.1rem;
      color: #444;
      line-height: 1.6;
    }

    .back-btn {
      display: inline-block;
      margin-top: 20px;
      padding: 12px 24px;
      background: #000;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      font-weight: 600;
      transition: 0.3s;
    }

    .back-btn:hover {
      background: #444;
    }

    /* Section wrapper */
    .section {
      max-width: 1000px;
      margin: 60px auto;
      padding: 0 20px;
      opacity: 0;
      transform: translateY(50px);
      transition: all 0.8s ease-out;
    }

    .section.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Images grid */
    .images-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .images-grid img {
      width: 100%;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
      transition: transform 0.3s ease;
    }

    .images-grid img:hover {
      transform: scale(1.03);
    }

    /* Videos */
    video {
      width: 100%;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    }
  </style>
</head>
<body>

  <header>
    <h1>Bingo Schedule Demo</h1>
    <p class="subtitle">Bingo Schedule – a fun, bingo-style to-do list app where you can add tasks, set reminders, and manage schedules in an interactive grid.</p>
    <a href="projects.php" class="back-btn">⬅ Back to Project</a>
  </header>

  <!-- First section: Images -->
  <div class="section">
    <div class="images-grid">
      <img src="assets/bingo3.png" alt="Bingo Screenshot 1">
      <img src="assets/bingo2.png" alt="Bingo Screenshot 2">
        <img src="assets/bingo4.png" alt="Bingo Screenshot 2">
    </div>
  </div>

  <!-- Videos stacked -->
  <div class="section">
    <video controls>
      <source src="assets/bsv.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>

  <div class="section">
    <video controls>
      <source src="assets/bsv2.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>

  <div class="section">
    <video controls>
      <source src="assets/bsv3.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>

  <script>
    // Fade-in on scroll
    const sections = document.querySelectorAll(".section");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        }
      });
    }, { threshold: 0.2 });

    sections.forEach(sec => observer.observe(sec));
  </script>

</body>
</html>
