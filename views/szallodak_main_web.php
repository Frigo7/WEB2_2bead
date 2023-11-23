<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szállodák listája</title>
</head>
<body>

<h1>Szállodák listája</h1>

<?php
// Szállodák tömbje
$szallodak = array(
    "TA" => "Tropicana Azur",
    "MP" => "El Mouradi Palace",
    "MD" => "Miramar Djerba",
    "MB" => "Marhaba",
    "JR" => "Jinene Resort",
    "HB" => "Lti Holiday Beach Resort",
    "FJ" => "Festival Le Jardin Resort",
    "CZ" => "Crowne Plaza",
    "CW" => "Caribbean World Soma Bay",
    "CP" => "Cesar Palace",
    "CL" => "Charm Life",
    "BS" => "Baron Resort"
);

// Szállodák listázása
echo "<ul>";
foreach ($szallodak as $kod => $szalloda) {
    echo "<li><strong>$kod:</strong> $szalloda</li>";
}
echo "</ul>";
?>

</body>
</html>

