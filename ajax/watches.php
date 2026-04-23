<?php
// ajax/watches.php

$watches = [
    ['name' => 'Patek Philippe Grandmaster Chime Ref. 6300A-010',        'price' => 31.19],
    ['name' => 'Patek Philippe Grande & Petite Sonnerie Ref. 6301A-010',  'price' => 18.5],
    ['name' => 'Patek Philippe Perpetual Calendar Chronograph Ref. 1518', 'price' => 16.0],
    ['name' => 'F.P.Journe Unique FFC (Francis Ford Coppola)',            'price' => 10.8],
    ['name' => 'Audemars Piguet Grosse Pièce No. 16869',                 'price' => 7.7],
    ['name' => 'Patek Philippe Grandmaster Chime Ref. 6300G (Stallone)',  'price' => 5.4],
];

$order = isset($_GET['order']) ? $_GET['order'] : 'desc';

if ($order === 'asc') {
    usort($watches, function($a, $b) {
        return $a['price'] <=> $b['price'];
    });
} else {
    usort($watches, function($a, $b) {
        return $b['price'] <=> $a['price'];
    });
}

// Output plain HTML — no JSON wrapper
foreach ($watches as $w) {
    $name  = htmlspecialchars($w['name']);
    $price = number_format($w['price'], 2);
    echo "<li><strong>{$name}</strong> — ~\${$price} milioane</li>\n";
}
