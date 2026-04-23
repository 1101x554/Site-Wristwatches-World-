<?php
$timeline = [
    [
        "an" => "Sec. XVI",
        "text" => "Primele ceasuri portabile (pocket watches) apar în Europa, mecanice cu arc.",
        "img" => null
    ],
    [
        "an" => "1810",
        "text" => "Primul ceas de mână cunoscut (Breguet pentru Caroline Murat).",
        "img" => "images/images__3_.jpg",
        "alt" => "Primul ceas de mână Breguet 1810"
    ],
    [
        "an" => "1910-1920",
        "text" => "Cartier Santos și Tank - primele modele moderne pentru bărbați.",
        "img" => "images/imagesss.jpg",
        "alt" => "Cartier Santos 1910"
    ],
    [
        "an" => "1920-1950",
        "text" => "Rolex Oyster (1926) - primul ceas impermeabil; Breitling, Omega cronografe.",
        "img" => "images/images.jpg",
        "alt" => "Rolex Oyster 1926"
    ],
    [
        "an" => "1969-1970",
        "text" => "Primul chronograph automat (Zenith El Primero, Heuer Carrera).",
        "img" => "images/Zenith-El-Primero-Chronograph-Ref-G581-From-1969-1024x683.jpg",
        "alt" => "Zenith El Primero 1969"
    ],
    [
        "an" => "1969",
        "text" => "Seiko Astron - primul ceas quartz comercial.",
        "img" => "images/images__1_.jpg",
        "alt" => "Seiko Astron quartz 1969"
    ],
    [
        "an" => "1980-1990",
        "text" => "Quartz crisis: ceasuri ieftine și precise domină piața.",
        "img" => "images/IMG-20251207-WA0006-600x315.jpg",
        "alt" => "Quartz crisis 1980"
    ],
    [
        "an" => "2000-azi",
        "text" => "Revenirea mecanicelor de lux + smartwatch-uri (Apple Watch).",
        "img" => "images/images__2_.jpg",
        "alt" => "Ceas modern luxury"
    ]
];
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Istoria și Dezvoltarea Ceasurilor</title>
    <link rel="icon" type="image/png" href="images/ceas-site.png">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<button id="dark-btn">Dark mode</button>

<h1>Istoria ceasurilor de mână - Timeline</h1>

<p>Aici o privire cronologică asupra evoluției ceasurilor.</p>

<ol id="timeline-list">

<?php foreach ($timeline as $item): ?>

    <li>
        <strong><?= $item["an"] ?></strong> - <?= $item["text"] ?>
    </li>

    <?php if ($item["img"]): ?>
        <img src="<?= $item["img"] ?>" alt="<?= $item["alt"] ?>">
    <?php endif; ?>

<?php endforeach; ?>

</ol>

<hr>

<div style="text-align:right;">
   <p>Ora curentă: <strong id="live-clock"></strong></p>

    <?php include 'includes/watch_icon.php'; ?>
</div>

<p><a href="index.php">« Acasă</a></p>

<script src="script.js"></script>

</body>
</html>