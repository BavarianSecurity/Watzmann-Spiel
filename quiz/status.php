<?php


// Set the timezone
date_default_timezone_set('Europe/Berlin');

// Get the current date and time
$currentDateTime = date('Y-m-d H:i:s');

// Get the current timezone
$currentTimezone = date('e');

// Output the title, current date, time, and timezone
echo "<h1><strong>Spiel-Bericht: </strong>$currentDateTime</h1>";
echo "<p>Zeitzone: $currentTimezone</p>";











// Das Verzeichnis, das durchsucht werden soll
$directory = '.';

// Öffne das Verzeichnis
if ($handle = opendir($directory)) {
    $count_keingewinn = 0;

    // Durchsuche die Dateien und Verzeichnisse im aktuellen Verzeichnis
    while (false !== ($entry = readdir($handle))) {
        // Überprüfe, ob der Eintrag eine Datei ist und ob sie mit "KEINGEWINN-" beginnt
        if (is_file($entry) && strpos($entry, 'KEINGEWINN-') === 0) {
            $count_keingewinn++;
        }
		if (is_file($entry) && strpos($entry, 'GEWINN-') === 0) {
            $count_gewinn++;
        }
		if (is_file($entry) && strpos($entry, 'rating_') === 0) {
            $count_rating++;
        }
    }

    // Schließe das Verzeichnis 
    closedir($handle);

    // Gib die Anzahl der Dateien aus
    echo "Lose ohne Gewinn: $count_keingewinn <br>";
	echo "Lose mit Gewinn: $count_gewinn <br>";
	echo "Bewertungen: $count_rating<br><br><br>";
} else {
    echo "Das Verzeichnis konnte nicht geöffnet werden.";
}




















function calculateRatingStatistics($directory) {
    // Überprüfen, ob das Verzeichnis geöffnet werden kann
    if ($handle = opendir($directory)) {
        $totalRating = 0;
        $count = 0;
        $positiveCount = 0;
        $neutralCount = 0;
        $negativeCount = 0;
        $positiveComments = [];
        $negativeNeutralComments = [];
		$count_1 = 0;
		$count_2 = 0;
		$count_3 = 0;
		$count_4 = 0;
		$count_5 = 0;
		

        // Schleife durch alle Dateien im Verzeichnis
        while (false !== ($entry = readdir($handle))) {
            // Überprüfen, ob die Datei mit "rating_" beginnt
            if (strpos($entry, 'rating_') === 0) {
                $filePath = $directory . '/' . $entry;
                #echo "Verarbeite Datei: $filePath\n"; // Debug-Ausgabe
                
                $fileContent = file_get_contents($filePath);
                
                // Finde die Position von "Rating:"
                $ratingPos = strpos($fileContent, 'Rating:');
                if ($ratingPos !== false) {
                    // Extrahiere die Bewertung und den Kommentar
                    $ratingStr = substr($fileContent, $ratingPos + 7); // 7 ist die Länge von "Rating:"
                    $ratingEndPos = strpos($ratingStr, ',');
                    if ($ratingEndPos !== false) {
                        $rating = substr($ratingStr, 0, $ratingEndPos);
                        $rating = (int)trim($rating); // Konvertiere zu Integer und entferne Leerzeichen
                        $commentPos = strpos($fileContent, 'Comment:');
                        $comment = trim(substr($fileContent, $commentPos + 8)); // 8 ist die Länge von "Comment:"

                        $totalRating += $rating;
                        $count++;

                        // Zähle die Bewertungen und sammle die Kommentare
                        
						if ($rating == 5) {
                            $positiveCount++;
                            $positiveComments[] = $comment;
							$count_5++;
                        } elseif ($rating == 4) {
                            $positiveCount++;
                            $positiveComments[] = $comment;
							$count_4++;
                        } elseif ($rating == 3) {
                            $neutralCount++;
                            $negativeNeutralComments[] = $comment;
							$count_3++;
                        } elseif ($rating == 2) {
                            $negativeCount++;
                            $negativeNeutralComments[] = $comment;
							$count_2++;
                        } elseif ($rating == 1) {
                            $negativeCount++;
                            $negativeNeutralComments[] = $comment;
							$count_1++;
                        }
                    }
                }
            }
        }
        
        // Schließe das Verzeichnis
        closedir($handle);

        // Berechnungen der Anteile und des Durchschnitts
        $averageRating = $count > 0 ? $totalRating / $count : 0;
        $positivePercentage = $count > 0 ? ($positiveCount / $count) * 100 : 0;
        $neutralPercentage = $count > 0 ? ($neutralCount / $count) * 100 : 0;
        $negativePercentage = $count > 0 ? ($negativeCount / $count) * 100 : 0;

        return [
            'averageRating' => $averageRating,
            'positivePercentage' => $positivePercentage,
            'neutralPercentage' => $neutralPercentage,
            'negativePercentage' => $negativePercentage,
            'positiveComments' => $positiveComments,
            'negativeNeutralComments' => $negativeNeutralComments,
			'count_5' => $count_5,
			'count_4' => $count_4,
			'count_3' => $count_3,
			'count_2' => $count_2,
			'count_1' => $count_1
        ];
    } else {
        throw new Exception("Verzeichnis konnte nicht geöffnet werden.");
    }
}

// Beispielverwendung
$directory = '.'; // Ändere diesen Pfad auf dein Verzeichnis
try {
    $stats = calculateRatingStatistics($directory);
    echo "<strong>Durchschnittliche Bewertung:</strong> " . $stats['averageRating'] . "\n<br><br>";
    echo "Anteil <strong>positiver</strong> Bewertungen: " . $stats['positivePercentage'] . "%\n<br>";
    echo "Anteil <strong>neutraler</strong> Bewertungen: " . $stats['neutralPercentage'] . "%\n<br>";
    echo "Anteil <strong>negativer</strong> Bewertungen: " . $stats['negativePercentage'] . "%\n<br><br>";
	
	echo "5er <strong>Bewertung</strong>: " . $stats['count_5']  . "\n<br>";
	echo "4er <strong>Bewertung</strong>: " . $stats['count_4']  . "\n<br>";
	echo "3er <strong>Bewertung</strong>: " . $stats['count_3']  . "\n<br>";
	echo "2er <strong>Bewertung</strong>: " . $stats['count_2']  . "\n<br>";
	echo "1er <strong>Bewertung</strong>: " . $stats['count_1']  . "\n<br>";
	

    echo "\n<br><strong>Positive Kommentare:</strong>\n<br>";
    foreach ($stats['positiveComments'] as $comment) {
        if (strlen($comment) >= 1) 
		{
		echo "- " . $comment . "\n<br>";
		}
    
	}

    echo "\n<br><strong>Neutrale und negative Kommentare:</strong>\n<br>";
    foreach ($stats['negativeNeutralComments'] as $comment) {
        if (strlen($comment) >= 1) 
		{
		echo "- " . $comment . "\n<br>";
		}
    }
} catch (Exception $e) {
    echo "Fehler: " . $e->getMessage();
}


echo "<br><br>";












$directory = '.'; // Ändere diesen Pfad zu dem gewünschten Verzeichnis

// HTML-Kopfzeilen für die Tabelle
echo "<html><head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border: 1px solid #ddd;
    }
    th {
        cursor: pointer;
    }
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const table = document.querySelector('table');
    const headers = table.querySelectorAll('th');
    const rows = table.querySelectorAll('tr:nth-child(n+2)');

    headers.forEach(header => {
        header.addEventListener('click', () => {
            const index = Array.from(headers).indexOf(header);
            const order = header.dataset.order = -(header.dataset.order || -1);

            rows.forEach(row => {
                row.dataset.sortKey = row.cells[index].innerText;
            });

            Array.from(rows).sort((a, b) => {
                return order * (a.dataset.sortKey.localeCompare(b.dataset.sortKey, undefined, {numeric: true}));
            }).forEach(row => {
                table.appendChild(row);
            });
        });
    });
});
</script>
</head><body><strong>Winner</strong><br><br>
Hinweis: Sie können die Tabelle sortieren, durch klick auf die Spalten.<br>
<br><strong>Legende</strong><br><i>Der Referrer-Header wurde nicht gesetzt.</i>: Dies bedeutet, dass das Los nicht validiert werden konnte. Es kann sein, dass der Spieler die Do-Not-Track Funktion im Browser aktiviert hat. Es kann auch ein Cheat-Versuch sein, bitte prüfen Sie nach eigenem Ermessen: Hat der Spieler ungewöhnlich viele Lose? Sind die Lose mehrfach nacheinander gezogen? Prüfen Sie auch die Zieh-Zeiten der vorgelegten lose.<br><br>
<table>";
echo "<tr><th>Los-ID</th><th>Größe (Bytes)</th><th>Gezogen am</th><th>Inhalt</th></tr>";

// Öffne das Verzeichnis
if ($handle = opendir($directory)) {
    // Durchlaufe alle Dateien im Verzeichnis
    while (false !== ($file = readdir($handle))) {
        // Überprüfe, ob die Datei mit "GEWINN-" beginnt und keine Verzeichnis ist
        if (strpos($file, 'GEWINN-') === 0 && is_file($directory . '/' . $file)) {
            $filePath = $directory . '/' . $file;

            // Holen der Dateigröße in Bytes
            $fileSize = filesize($filePath);

            // Holen des Erstellungsdatums
            $fileCreationDate = date("Y-m-d H:i:s", filectime($filePath));

            // Holen des Dateiinhalts und Ersetzen neuer Zeilen durch ein Leerzeichen
            $fileContent = str_replace(PHP_EOL, ' ', file_get_contents($filePath));

            // Ausgabe der Dateiinformationen als Tabellenzeile
            echo "<tr>";
            echo "<td>$file</td>";
            echo "<td>$fileSize</td>";
            echo "<td>$fileCreationDate</td>";
            echo "<td>$fileContent</td>";
            echo "</tr>";
        }
    }
    // Schließe das Verzeichnis
    closedir($handle);
} else {
    echo "Verzeichnis konnte nicht geöffnet werden.";
}

// HTML-Schluss für die Tabelle
echo "</table></body></html>";


?>
