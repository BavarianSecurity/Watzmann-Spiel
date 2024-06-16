<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Bewertung und Kommentar abrufen
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    // Feedback speichern
    $file = fopen("rating_". md5(date('d.m.Y H:i:s.u')), "a");
    if ($file) {
        fwrite($file, "Bewertung: $rating\nKommentar: $comment\n\n");
        fclose($file);
        echo "Vielen Dank für Ihr Feedback!";
    } else {
        echo "Es gab ein Problem beim Speichern Ihres Feedbacks. Bitte versuchen Sie es später erneut.";
    }
} else {
    echo "Ungültige Anfrage.";
}
?>
