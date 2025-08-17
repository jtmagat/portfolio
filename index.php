<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jamel Kim Magat – Portfolio</title>
  <!-- Japanese style font -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: "Georgia", serif;
      max-width: 750px;
      margin: 60px auto;
      padding: 0 20px;
      color: #111;
      line-height: 1.6;
    }
    h1 {
      font-size: 1.8em;
      margin-bottom: 0.2em;
    }
    h1 span {
      font-size: 0.8em;
      color: #666;
    }
    .section-title {
      font-weight: bold;
      margin-top: 2em;
    }
    .divider {
      border-top: 1px solid #ddd;
      margin: 2em 0;
    }
    .grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 2em;
    }
    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    li {
      margin: 0.3em 0;
    }
    a {
      color: inherit;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
    .note {
      color: #666;
      font-size: 0.9em;
    }

    /* --- JAPANESE BLUR STYLE --- */
    .japan-blur {
      font-family: "Noto Serif JP", serif;
      font-size: 1.1em;
      position: relative;
      color: #111;
      filter: blur(0.6px); /* subtle blur */
      opacity: 0.9;
      line-height: 1.8;
    }

    /* Glitch shadow effect */
    .japan-blur::before {
      content: attr(data-text);
      position: absolute;
      left: 2px;
      top: 2px;
      color: rgba(200,0,50,0.4); /* red ghost shadow */
      filter: blur(1px);
      z-index: -1;
    }

    .japan-blur::after {
      content: attr(data-text);
      position: absolute;
      left: -2px;
      top: -2px;
      color: rgba(0,50,200,0.4); /* blue ghost shadow */
      filter: blur(1px);
      z-index: -1;
    }
  </style>
</head>
<body>
  <h1>JK's Digital City <span>[數字城市]</span></h1>

  <p class="japan-blur" 
     data-text="Jamel Kim Magat is a Filipino designer who loves high-quality system interactions, prototyping, and creative tooling. He enjoys dreaming up ambitious, novel ideas that solve complex problems in creative ways. (He often signs things off with his initials—just in case you’ll need that later.)">
    Jamel Kim Magat is a Filipino designer who loves high-quality system interactions, prototyping, and creative tooling. 
    He enjoys dreaming up ambitious, novel ideas that solve complex problems in creative ways.
    <br><br>
    (He often signs things off with his initials—just in case you’ll need that later.)
     <br><br>
       <p> 
    Currently designing at <strong>OFFT</strong>. Previously designed interfaces at AAC Website
  </p>
  </p>

  <p><a href="work.php">Design work ↗</a></p>

  <div class="divider"></div>

  <div class="grid">
    <div>
      <strong>CONTACT</strong>
      <ul>
        <li>¹ <a href="#">Twitter ↗</a></li>
        <li>² <a href="mailto:your@email.com">Mail ↗</a></li>
        <li>³ <a href="#">Instagram ↗</a></li>
        <li>⁴ <a href="#">read.cv ↗</a></li>
        <li>⁵ <a href="#">LinkedIn ↗</a></li>
      </ul>
    </div>
    <div>
      <strong>TEAMS</strong>
      <ul>
        <li>--- <span class="note">---</span></li>
        <li>--- <span class="note">---</span></li>
        <li>--- <span class="note">---</span></li>
        <li>--- <span class="note">---</span></li>
        <li>--- <span class="note">---</span></li>
      </ul>
    </div>
  </div>
</body>
</html>
