<?php
$nav = [
    "istorie.php" => "Dezvoltarea și istoria ceasurilor",
    "scumpe.php"  => "Top cele mai scumpe ceasuri vândute vreodată",
    "noi.php"     => "Cele mai noi modele luxury și fashion 2025-2026",
    "contact.php" => "Contact"
];
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wristwatches World - Acasă</title>
    <link rel="icon" type="image/png" href="images/ceas-site.png">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<button id="dark-btn">Dark mode</button>

<h1 style="text-align:center;">TIMELESS ELEGANCE ON YOUR WRIST</h1>

<hr>

<h2>Informații generale despre ceasuri</h2>

<p>
Ceasul de mână (wristwatch) a apărut la începutul secolului XX și a devenit esențial în viața cotidiană.<br>
De la modele mecanice simple la complicații extrem de complexe (tourbillon, perpetual calendar, minute repeater), ceasurile reprezintă artă, inginerie și istorie.<br>
Astăzi, branduri ca Rolex, Patek Philippe, Audemars Piguet domină piața de lux, iar quartz și smartwatch-urile au schimbat jocul accesibilității.
</p>

<p>
Ceasurile mecanice funcționează prin arc principal și roți dințate, fără baterie.<br>
Quartz-ul folosește cristal de cuarț pentru precizie extremă.<br>
Cele mai scumpe ceasuri ajung la zeci de milioane la licitații datorită rarității și meșteșugului.
</p>

<hr>

<h2>Navigare</h2>

<ul>
<?php foreach ($nav as $link => $title): ?>
    <li>
        <a href="<?= $link ?>"><?= $title ?></a>
    </li>
<?php endforeach; ?>
</ul>

<hr>

<div style="text-align:right;">
   <p>Ora curentă: <strong id="live-clock"></strong></p>

    <?php include 'includes/watch_icon.php'; ?>
</div>

<script src="script.js"></script>

</body>
</html>