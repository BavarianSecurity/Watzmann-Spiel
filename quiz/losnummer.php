<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Los ziehen</title>
<style>
    body {
        background-color: #ffffff;
		font-family: Arial, sans-serif;
		color: #1e73be;
		overflow: hidden;
    }

*{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

/* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */

	
	    table {
        width: 100%;
        border-collapse: collapse;
			border: none !important;
    }
    th, td {
border: none !important;
		padding: 8px;
        text-align: left;
    }
    .column1 {
        width: 41%;
    }
    .column2 {
        width: 18%;
    }
    .column3 {
        width: 41%;
    }
	
	button {
		font-size: 18px;
	}
	
	textarea {
		font-size: 18px;
	}
	
/* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
	
	
</style>
<script src="html2pdf.bundle.min.js"></script>

</head>
<body>
	
<?php

	// Funktion zum Schreiben einer Datei mit dem übergebenen Dateinamen und Inhalt
	function writeFile($filename, $content) {
		// Datei zum Schreiben öffnen oder erstellen
		$file = fopen($filename, "a");

		// Überprüfen, ob die Datei erfolgreich geöffnet wurde
		if ($file) {
			// Inhalt in die Datei schreiben
			fwrite($file, $content);

			// Datei schließen
			fclose($file);
		} else {
			echo "Technischer Fehler aufgetreten. Bitte kontaktieren Sie den Ansprechpartner unter xxx@xxx.de.";
		}
	}

// Definiere den erwarteten Security Token
$erwarteterToken = "<>#%+{}|\^~[]`;/?:@=&$";
	
// Überprüfe, ob der Token in der URL vorhanden ist und ob er korrekt ist
if(isset($_GET['token']) && $_GET['token'] === $erwarteterToken) {

		// Zeit
		$microtime = md5(date('d.m.Y H:i:s.u'));
	
		$gewinnerlose = array(1, 22, 400, 300, 100, 600, 700, 722, 111, 222, 333, 444, 555, 666, 77, 88);


		// Erstellen eines Zufalls-Loses zwischen 1 und 1000
		$zufallszahl = rand(1, 1000);

		$dateiname = "XXX_" . $zufallszahl;
	
					$inhalt = "Dies ist der Inhalt meiner Datei.";

			if(isset($_SERVER['HTTP_REFERER'])) {
					// Referrer-Header ausgeben
					$inhalt = "Der Referrer ist: " . $_SERVER['HTTP_REFERER'] . " Bedeutet: Herkunft bekannt.";
				} else {
					// Wenn der Referrer-Header nicht gesetzt ist, eine entsprechende Meldung ausgeben
					$inhalt = "Der Referrer-Header wurde nicht gesetzt. Bedeutet: Herkunft unbekannt.";
				}	
	
	
				// Ausgabe der generierten Zahlen
				echo "<center>";
				echo "<h1>Ihre Losnummer ist: " . $zufallszahl;
		
			if (in_array($zufallszahl, $gewinnerlose)) {
				
echo "<p><span style=\"color: rgb(235, 107, 86);\">G</span><span style=\"color: rgb(44, 130, 201);\">L</span>&Uuml;<span style=\"color: rgb(243, 121, 52);\">C</span><span style=\"color: rgb(243, 121, 52);\">K</span><span style=\"color: rgb(71, 85, 119);\">W</span><span style=\"color: rgb(44, 130, 201);\">U</span><span style=\"color: rgb(235, 107, 86);\">N</span><span style=\"color: rgb(85, 57, 130);\">S</span><span style=\"color: rgb(184, 49, 47);\">C</span><span style=\"color: rgb(85, 57, 130);\">H</span><span style=\"color: rgb(235, 107, 86);\">!</span> Sie haben gewonnen.</p> ";
			
				echo "</h1>";

				echo "<h3><i>Wichtig</i>: Klicken Sie auf <strong>Nachweis herunterladen</strong> oder erstellen Sie einen Screenshot.</h3> Sie können sich nun bei Herr / Frau XXX XXX (XXX@XXX.de) melden, um Ihren Preis zu erhalten.";
				echo "<br></h3> Prüf-PIN ist: " . $microtime ."</h3><br><br>";
				echo "</center>";

				// Dateiname und Inhalt
				


				// Datei schreiben aufrufen
				writeFile("GEWINN-".$dateiname . "-" . $microtime, $inhalt . "===" . $microtime );
				
				echo '<center><button id="downloadPDF">Nachweis herunterladen</button></center>';

echo '<script>
    document.getElementById("downloadPDF").addEventListener("click", function() {
        var element = document.body; // This will select the entire body
        var opt = {
            margin:       1,
            filename:     \'spielnachweis.pdf\',
            image:        { type: \'jpeg\', quality: 0.98 },
            html2canvas:  { scale: 2 },
            jsPDF:        { unit: \'in\', format: \'letter\', orientation: \'portrait\' }
        };
        // Function call to generate PDF
        html2pdf().from(element).set(opt).save();
    });
</script>';

echo '<br>';
				
		} else {
			echo '<br><span style="color: black;">Leider kein Gewinn.</span>';
					    writeFile("KEINGEWINN-".$dateiname . "-" . $microtime, $inhalt . "===" . $microtime );

		}
	  
	
} else {
	
	echo "<center><h2>FEHLER: Sicherheitsmerkmal fehlerhaft. Los kann aus Sicherheitsgründen nicht gezogen werden. Bitte kontaktieren Sie den Ansprechpartner unter xxx@xxx.de</h2></center>";
	// Zeitzone auf Deutschland setzen
date_default_timezone_set('Europe/Berlin');

// Aktuelles Datum und Uhrzeit abrufen
$datum_und_uhrzeit = date('d.m.Y H:i:s');
	
	writeFile("error.txt", $datum_und_uhrzeit . " Password falsch eingegeben. Token uebergeben: " . $_GET['token']);
}
	
?>

<br><br>
	<table >
    <tbody>
        <tr>
            <td class="column1" > </td>
            <td class="column2">	<h5>Wie viel Sterne geben Sie dem Spiel?</h5>
<form id="feedbackForm">
  <div class="rate">
    <input type="radio" id="star5" name="rating" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rating" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rating" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rating" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rating" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>
  <br>
    <textarea id="comment" name="comment" placeholder="Geben Sie hier Ihren Kommentar ein"></textarea>
    <br>
    <button type="button" onclick="submitFeedback()">Feedback absenden</button>
</form></td>
            <td class="column3"> </td>
        </tr>
	</table>


<script>
function submitFeedback() {
    var rating = document.querySelector('input[name="rating"]:checked').value;
    var comment = document.getElementById('comment').value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "rating.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Antwort verarbeiten, z.B. eine Benachrichtigung anzeigen
            alert(xhr.responseText);
        }
    };
    xhr.send("rating=" + rating + "&comment=" + encodeURIComponent(comment));
}
</script>
	
</body>
</html>
