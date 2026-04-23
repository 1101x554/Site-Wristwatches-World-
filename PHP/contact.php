<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Wristwatches World</title>
    <link rel="icon" type="image/png" href="images/ceas-site.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<button id="dark-btn"> Dark mode</button>

<h1>Contact</h1>

<p>Dacă vrei să discutăm ceasuri, recomandări, poze sau orice legat de temă:</p>

<ul>
    <li>X: <a href="https://x.com/random">random</a></li>
    <li>Discord: random#554</li>
    <li>Email: random@proton.me</li>
</ul>

<h2>Mesaj rapid</h2>
<form id="contact-form">
  Nume: <input type="text" id="contact-name" name="name"><br><br>
  Email: <input type="email" id="contact-email" name="email"><br><br>
  Mesaj:<br>
  <textarea rows="6" cols="50" id="contact-msg" name="msg"></textarea><br><br>
  <input type="submit" value="Trimite">
  <p id="form-status"></p>
</form>

<hr>

<div align="right">
 <p>Ora curentă: <strong id="live-clock"></strong></p>
<?php include 'includes/watch_icon.php'; ?>
</div>

<p><a href="index.php">« Acasă</a></p>

<script src="script.js"></script>
</body>
</html>
