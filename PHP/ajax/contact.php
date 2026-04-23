<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo '<span style="color:red;">Metodă nepermisă.</span>';
    exit;
}

$name  = trim($_POST['name']  ?? '');
$email = trim($_POST['email'] ?? '');
$msg   = trim($_POST['msg']   ?? '');

// Validare
if ($name === '' || $email === '' || $msg === '') {
    http_response_code(422);
    echo '<span style="color:red;">Completează toate câmpurile.</span>';
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo '<span style="color:red;">Email invalid.</span>';
    exit;
}

// ── Salvare în mesaje.txt ────────────────────────────────
$data = date('d.m.Y H:i:s');   // data și ora curentă

$linie  = "────────────────────────\n";
$linie .= "Data:   $data\n";
$linie .= "Nume:   $name\n";
$linie .= "Email:  $email\n";
$linie .= "Mesaj:  $msg\n";
$linie .= "────────────────────────\n\n";

file_put_contents('mesaje.txt', $linie, FILE_APPEND);
// FILE_APPEND = adaugă la sfârșit, nu suprascrie
// ────────────────────────────────────────────────────────

$safeName = htmlspecialchars($name);
echo "<span style='color:green;'>Mulțumesc, {$safeName}! Mesajul a fost salvat.</span>";