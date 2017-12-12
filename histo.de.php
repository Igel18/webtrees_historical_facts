 <?php
// File: /data/histo.xx.php (where xx is a language code such as "fr" or "en_GB")
// Display historical facts on the personal facts tab of the individual page 
// Each line is a GEDCOM record to describe an event.
// Events must contain dates, and will only be shown if the individual was alive on that date.

if (!defined('WT_WEBTREES')) {
   header('HTTP/1.0 403 Forbidden');
   exit;
}

// $histo[] = "1 EVEN\n2 TYPE Titel\n2 DATE DD MMM YYYY\n2 NOTE Inhalt der Ereigniszeile";

// Columbus 
$histo[] = "1 EVEN\n2 TYPE Columbus entdeckt America\n2 DATE 1492\n2 NOTE Christoph Kolumbus entdeckt America als er eine Insel der Bahamas erreichte, s. https://de.wikipedia.org/wiki/Christoph_Kolumbus";

// Martin Luther
$histo[] = "1 EVEN\n2 TYPE Martin Luther begründet die Reformation\n2 DATE 31 OKT 1517\n2 NOTE durch einen Brief an den Mainzer Erzbischof in dem er den Ablasshandel anprangert, s. https://de.wikipedia.org/wiki/Martin_Luther";

// Napoleon 
$histo[] = "1 EVEN\n2 TYPE Napoleon wird Kaiser von Frankreis\n2 DATE 1804, s. https://de.wikipedia.org/wiki/Napoleon_Bonaparte";


// Cäsar 

// Cleopatra 

// 1. Weltkrieg
$histo[] = "1 EVEN\n2 TYPE Beginn Erster Weltkrieg\n2 DATE 28 JUL 1914\n2 NOTE durch die Kriegserklärung Österreich-Ungarns an Serbien, s. https://de.wikipedia.org/wiki/Erster_Weltkrieg";

$histo[] = "1 EVEN\n2 TYPE Ende Erster Weltkrieg\n2 DATE 11 NOV 1918\n2 NOTE durch die Unterzeichnung eines Waffenstillstandsvertrages, s. https://de.wikipedia.org/wiki/Waffenstillstand_von_Compiègne_(1918)";

// 2. Weltkrieg
$histo[] = "1 EVEN\n2 TYPE Beginn Zweiter Weltkrieg\n2 DATE 01 SEP 1939\n2 NOTE durch den deutschen Überfall auf Polen"; 

// Bau der Mauer 
$histo[] = "1 EVEN\n2 TYPE Bau der Berliner Mauer\n2 DATE 13 AUG 1961\n2 NOTE symbolischer \"Tag des Mauerbaus\", s. http://de.wikipedia.org/wiki/Berliner_Mauer";

// Mondlandung
$histo[] = "1 EVEN\n2 TYPE Erster Mensch auf dem Mond\n2 DATE 21 JUL 1969\n2 NOTE Neil Armstrong betritt als erster Mensch den Mond (Apollo 11), s. https://de.wikipedia.org/wiki/Mondlandung#Menschen_auf_dem_Mond";

?> 