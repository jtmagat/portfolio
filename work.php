<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Design Work – Jamel Kim Magat</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #fff;
      font-family: "Georgia", serif;
      color: #111;
    }
    .container {
      text-align: center;
    }
    input[type="password"] {
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 20px 0 0 20px;
      outline: none;
      width: 200px;
      font-size: 1em;
    }
    button {
      padding: 10px 20px;
      border: none;
      background: #111;
      color: #fff;
      font-size: 1em;
      cursor: pointer;
      border-radius: 0 20px 20px 0;
    }
    button:hover {
      background: #333;
    }
    .note {
      font-size: 0.85em;
      color: #666;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div id="login-box">
      <form onsubmit="return checkPassword(event)">
        <input type="password" id="password" placeholder="Enter password">
        <button type="submit">Submit</button>
      </form>
      <p class="note">Find password on Digital City</p>
    </div>
  </div>

  <script>
    function checkPassword(event) {
      event.preventDefault();
      const password = document.getElementById("password").value;
      if (password === "jk") {
        // redirect to portfolio.php
        window.location.href = "portfolio.php";
      } else {
        alert("Incorrect password. Try again.");
      }
    }
  </script>
</body>
</html>
