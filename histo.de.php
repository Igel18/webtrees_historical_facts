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


$histo[] = "1 EVEN\n2 TYPE Beginn Erster Weltkrieg\n2 DATE 28 JUL 1914\n2 NOTE durch die Kriegserklärung Österreich-Ungarns an Serbien;,
s. https://de.wikipedia.org/wiki/Erster_Weltkrieg";

$histo[] = "1 EVEN\n2 TYPE Ende Erster Weltkrieg\n2 DATE 11 NOV 1918\n2 NOTE durch die Unterzeichnung eines Waffenstillstandsvertrages;,
s. https://de.wikipedia.org/wiki/Waffenstillstand_von_Compiègne_(1918)";

$histo[] = "1 EVEN\n2 TYPE Bau der Berliner Mauer\n2 DATE 13 AUG 1961\n2 NOTE symbolischer \"Tag des Mauerbaus\";, 
 s. http://de.wikipedia.org/wiki/Berliner_Mauer";

$histo[] = "1 EVEN\n2 TYPE Beginn Zweiter Weltkrieg\n2 DATE 01 SEP 1939\n2 NOTE durch den deutschen Überfall auf Polen"; 

?> 