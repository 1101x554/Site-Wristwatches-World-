<?php
$models = [
    [
        "name" => "Patek Philippe Calatrava / Cubitus slimmed (2025)",
        "desc" => "Elegant clasic cu design modern reinterpretat.",
        "img"  => "images/images__2_.jpg",
        "alt"  => "Patek Philippe 2025"
    ],
    [
        "name" => "Vacheron Constantin Solaria (2025)",
        "desc" => "Cel mai complicat ceas de mână cu 41 de complicații.",
        "img"  => "images/images__4_.jpg",
        "alt"  => "Vacheron Solaria"
    ],
    [
        "name" => "Cartier Tank Guichet / Experimental (2025-2026)",
        "desc" => "Design jump-hour + escapament magnetic inovator.",
        "img"  => "images/images__5_.jpg",
        "alt"  => "Cartier Guichet"
    ],
    [
        "name" => "Richard Mille Tourbillon Sport Edition (2026)",
        "desc" => "Ediție limitată sport-fashion high-tech.",
        "img"  => null,
        "alt"  => null
    ],
    [
        "name" => "Rolex Land-Dweller / Tiffany Daytona / GMT pastel (2025)",
        "desc" => "Noi culori și reinterpretări ale modelelor clasice.",
        "img"  => null,
        "alt"  => null
    ],
    [
        "name" => "Omega Seamaster + Grand Seiko Spring Drive UFA (2025-2026)",
        "desc" => "Inginerie de precizie high-end.",
        "img"  => null,
        "alt"  => null
    ]
];
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cele Mai Noi Modele Luxury 2025-2026</title>
    <link rel="icon" type="image/png" href="images/ceas-site.png">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<button id="dark-btn">Dark mode</button>

<h1>Cele mai noi modele luxury și fashion (2025-2026)</h1>

<p>Trenduri recente: slim profiles, complicații inovatoare, culori pastel, titanium, jump-hour.</p>

<ul>

<?php foreach ($models as $m): ?>
    <li>
        <strong><?= $m["name"] ?></strong> - <?= $m["desc"] ?>
    </li>

    <?php if (!empty($m["img"])): ?>
        <img src="<?= $m["img"] ?>" alt="<?= $m["alt"] ?>">
        <br><br>
    <?php endif; ?>
<?php endforeach; ?>

</ul>

<hr>

<div style="text-align:right;">
   <p>Ora curentă: <strong id="live-clock"></strong></p>

    <?php include 'includes/watch_icon.php'; ?>
</div>

<p><a href="index.php">« Acasă</a></p>

<script src="script.js"></script>

</body>
</html>