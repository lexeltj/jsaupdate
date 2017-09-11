<?php
// set the Timezone
date_default_timezone_set('Europe/Berlin'); 
// Pfad zur Daatei die überprüft werden soll
$file_pfad = "test.txt";
// Änderungszeit auslesen
$aenderungsdatum = filemtime($file_pfad);
// aktuelle Zeit 
$time_stamp = time();

// Timestamp erstellen
$datum1 = new DateTime();
$datum1->setTimestamp($time_stamp);
$datum2 = new DateTime();
$datum2->setTimestamp($aenderungsdatum);

// Daten vergleichen
$interval = date_diff($datum1, $datum2);

// Testweise die Daten ausgeben
echo $interval->format('%R%a days');
echo $interval->format('%h stunden');
echo $interval->format('%i minuten');
echo $interval->format('%s sekunden');

// Anzeigen, wie viele Tage das letzte Update her ist
echo 'letztes Update vor ' . $interval->format('%a') . ' Tagen';

// vergangene Tage in Variable schreiben
$tage_vorbei = $interval->format('%a');

// ausgeben der Variable
echo $tage_vorbei;

// Anzahl Tage in Integer konvertieren
echo intval($tage_vorbei);

// Abfragen, wie lange ein Update her ist
if (intval($tage_vorbei) >= 2) {
    echo 'update schon mehr als 2 Tage her';
}
else {
    echo 'Update benötigt';
}
?>
