<?php

// CSV bestand
$file = 'uren.csv';

// Check of bestand bestaat (voor header)
$isNewFile = !file_exists($file);

// Open bestand in append mode
$handle = fopen($file, 'a');

// Voeg headers toe als nieuw bestand
if ($isNewFile) {
    fputcsv($handle, ['Datum', 'Naam', 'Project', 'Uren']);
}

// Vragen stellen
echo "Datum (YYYY-MM-DD): ";
$datum = trim(fgets(STDIN));

echo "Naam: ";
$naam = trim(fgets(STDIN));

echo "Project: ";
$project = trim(fgets(STDIN));

echo "Aantal uren: ";
$uren = trim(fgets(STDIN));

// Data opslaan in CSV
fputcsv($handle, [$datum, $naam, $project, $uren]);

fclose($handle);

echo "Opgeslagen!\n";

?>