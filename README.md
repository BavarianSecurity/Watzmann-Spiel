# Watzmann-Spiel: Erfolgreiche Awareness mit Gamification.
Das Watzmann-Spiel ist ein innovativer Weg die Mitarbeiter in Ihrer Organisation/Behörde zu begeistern und das Wissen aufzufrischen.
Es ist eine kostenlose **Public Code** Lösung von BaySec. Jede deutsche Behörde erhält eine kostenfreie Public Code License (PCL) zur Selbstnutzung.  
Das Spiel verfolgt einen Gamification Ansatz mit einem wohlüberlegten Spiele-Konzept. 

Die Mitarbeiter werden in der Regel vom ISB per E-Mail Verteiler eingeladen. Dieser verteilt einen Link zum Spiel. 

**Spiel-Geschichte**:

Ein Hacker hat sich am Watzmann-Gipfel eingenistet. Um ihn zu vertreiben, müssen alle Fragen richtig beantwortet und der Berg erklommen werden. Es sollten Sachpreise vorgesehen werden. Am Ende ist die Teilnahme an einer Verlosung möglich. Das Ergebnis wird sofort am Bildschirm angezeigt. Die Teilnahme am Spiel als auch an der Verlosung ist anonym - keine Registrierung notwendig.

**Vorschlag Spiele-Konzept**

1. Heimatnah: Bayerisches Wahrzeichen (“Watzmann”) schafft Nähe und Greifbarkeit.
2. Zielgruppengerecht: Fragen waren konzipiert für den Büromitarbeiter im Behörde. Weitere Wanderpfade sind denkbar (z.B. rot für IT Personal).
3. Anonym und frei von Skepsis: Teilnahme am Spiel und Verlosung sollte freiwillig sein und ist anonym möglich. 
4. Privacy by Design: Keine Leistungskontrolle - weder direkt noch indirekt möglich. Kein Registrierungszwang.
7. Persönliches Ziel: Der Spieler soll eine Aussicht auf einen persönlichen Sachpreis haben.
8. Gruppenziel: Ein Gruppen-Bonus fördert das Gefühl der Zugehörigkeit. Teilnehmer sollen über das Thema diskutieren und nicht einsam spielen. 
9. Selbstbestimmung: Hat ein Spieler gewonnen, bekommt er eine Losnummer mit Prüf-PIN. Dieser dient als Gewinn-Nachweis. Der Spieler hat stets die Kontrolle darüber, ob und wann er sich zu Erkennen geben möchte.

# Demo


# Einrichtung (Aufwand: varriert zwischen 2h bis 12h)
**Ihre Optionen**
Sie haben grundsätzlich folgende Optionen zur Verfügung. Anbei geben wir eine Orientierung mit Vor- und Nachteilen:
- **Option 1 (empfohlen): CMS "WordPress" oder LMS "Moodle" als Basis.** Auf dieser Basis können Sie das Spiel hochladen, dort direkt per Drag&Drop anpassen. Vorteil ist: Sie haben später ein Sysetm für weitere Spiele und Kampagnen. Nachteil: Die Einrichtung eines solchen Systems bedeutet einen relativ hohen Grundaufwand. Dies kann 4h (schon mehrmals gemacht) oder 4 Tage dauern (Erstes Mal). Wir nutzen Moodle und haben damit die beste Performanz und Zuverlässigkeit erfahren. Auch WordPress hat uns zufrieden gestellt. Wenn Sie schon ein solches CMS/LMS haben, prüfen Sie bitte, ob dies eine externe Firma betreibt. In dem Fall brauchen Sie eine kommerzielle Lizenz bei uns.
- Option 2: Sie haben schon ein CMS/LMS System durch einen Dienstleister? Oder Sie wollen Ihren externen Dienstleister damit beauftragen? Kein Problem: Fragen Sie bei uns an, gerne vergeben wir Ihnen oder Ihrem Dienstleister eine kommerzielle Lizenz.
- Option 3: Stand-Alone Lösung. Sie brauchen oder haben kein CMS/LMS System? Dann können Sie das Spiel auch ohne  betreiben. Es gibt ebenfalls kostenlose Stand-Alone Server für H5P: https://github.com/tunapanda/h5p-standalone oder https://github.com/Lumieducation/H5P-Nodejs-library. Wir haben aber keine Erfahrung hinsichtlich Stabilität und Performanz, da wir das auch nicht so verwenden.
- **Option 4 (empfohlen): Full Managed Service durch BaySec.** Beste User-Erfahrung. Wir kümmern uns um alles Technische, Sie erhalten von uns einen Link zum Spiel. Diesen können Sie sofort verteilen. In der ersten Woche erhalten Sie täglich einen Spiel-Bericht, danach wöchentlich. Mit dieser Variante haben Sie die beste Erfahrung. Auch ein eigener Server ist möglich. Die Pakete beginnen ab 2731.00 € pro Spiel-Kampagne. Es gibt Aufschläge für Größe, Austattung und weiteren Optionen (z.B. eigener Server).

**Technische Empfehlungen**

Software
- H5P Gamification Engine (z.B. als Wordpress oder Moodle Plugin) 
- Gute Erfahrungen mit Moodle und Wordpress, da fertige Plugins mit nahtloser Integration vorhanden.
- Auch andere LMS Systeme möglich (z.B. OpenEdx)
- Auch Stand-Alone möglich: LMS nicht zwingend notwendig.
- Eigens-entwickelte PHP Module für Bewertung und Verlosung
- Aktivieren Sie eine IP-Anonymisierung (z.B. über Plesk)
- Setzen Sie das RAM-Limit Ihrer PHP Konfiguration so, dass der Arbeitsspeicher bestmöglich ausgenutzt wird.
  
Hardware/Betriebssystem:
- Virtuelle Maschine mit Linux (getestet mit Ubuntu, andere funktionieren ähnlich und sollte kein Problem sein)
- 1000MB/s Anbindung (empfohlen). 
- Weitere Konfiguration abhängig von Größe der Organisation: Kann variieren zwischen 4-32 GB RAM, 2 bis 16 Core CPU.
- Erfahrungswert: Bei Verwendung von Moodle: Pro Gigabyte Ram sind 10-20 **gleichzeitige** Zugriffe möglich.
- Mindestens 250 MB Speicher nur für das Spiel (zusätzlich Speicherbedarf für Betriebssystem und eventuell Ihr LMS)
- Oft reicht auch ein 10€ Server von einem Discount Hoster aus (z.B. Strato).

**Notwendiges Know-How**

Technisches Know-How ist notwendig: Administrator oder Entwickler. Auch gut als Projekt für einen Azubi.

**Einrichtungsschritte am Beispiel Moodle / Wordpress**

1. Kaufen Sie einen vServer Ihrer Wahl bei einem Hoster. Tipp: Wählen Sie einen Hoster, bei dem Sie später kostenlos "Upgraden" können. Somit sind Sie flexibel. Sie können auch einen Webspace ausprobieren. Ob dies aber dann einwandfrei funktioniert hängt von Ihrem Provider ab.
2. Richten Sie Moodle oder WordPress ein. Viele Hoster ermöglichen 1-Click Installationen. Nutzen Sie das.
3. Installieren Sie das "H5P Plugin" in Moodle bzw. Wordpress.
4. Erstellen Sie ein H5P-Projekt bzw. H5P-Seite. Laden Sie die Datei "Watzmann-Spiel-2024-06.h5p" hoch.
5. Sie können nun per Drag & Drop Anpassungen am Spiel vornehmen. Ersetzen Sie jede Vorkommen von ```XXX``` durch einen geeigneten Inhalt, z.B. ```Landratsamt XYZ```. 
6. Laden Sie den Ordner ```quiz``` in ein Verzeichnis Ihrer Wahl in Ihrem Web-Server hoch (z.B. ```wwwroot```).
7. Ändern Sie in der Datei "losnummer.php" jede Vorkommen von ```XXX``` in einen geeigneten Inhalt, z.B. "Landratsamt XYZ" oder in eine Kontakt-eMail.  
8. Ändern Sie ggf. die "Besitzer" und Ausführungsrechte so, dass die php Dateien ausgeführt werden dürfen.
9. Kehren Sie zurück zum H5P Projekt bzw. Seite. In den H5P Einstellungen in Moodle oder in Wordpress können Sie den "Endbildschirm" ändern. Ändern Sie den Link dort, dass dieser auf "losnummer.php" zeigt. Und passen Sie den Endbildschirm so an, dass bei erfolgreichem Ende das Video "Watzmann-Spiel-Animation_Ende.mp4" abgespielt wird.
10. Testen Sie das Spiel aus, und vergewissern Sie sich, dass Ihre Seite performant ist.

# Betriebsanleitung (Aufwand: ca. 2h/wöchentlich)
**Funktionsweise**
Wird ein Los gezogen, wird dieses entweder mit dem Prefox ```GEWINN-*``` oder ```KEINGEWINN-*``` gespeichert. Zudem wird die Prüfpin mitgespeichert. Diese entspricht einem Hashwert, welches auch die Zeit berücksichtigt. 
Das hat den Vorteil, dass keine Datenbank-Schemas aufgebaut werden müssen und das Betriebssystem die Speicherung selbstständig managed. Für ein nicht-kritisches System, wie dieses hier, ohne personenbezogene Daten ein passender Ansatz.

**Auswertung**
Die Auswertung erfolgt in der aktuellen Variante größtenteils manuell. Wenn Sie den aktuell Spiel-Stand erfahren möchten, gehen Sie so vor:
1. Login per SSH auf Ihren Server/Webspace: ```ssh user@212.132.126.149```
2. Wechseln Sie zu Ihrem **quiz** Ordner: ```cd /var/www/vhosts/bay-sec.de/training.bay-sec.de/onlinetrainings/quiz```
3. Commando um die Ergebnisse zu zählen: ```echo KEINGEWINN && ls -dq *KEINGEWINN* | wc -l && echo GEWINN && ls -dq GEWINN* | wc -l && echo FEEDBACK && ls -dq *rating_* | wc -l && echo RATINGS && head -n 1 rating_* -q && echo KOMMENTARE-000000000000 && head -n 2 rating_* -q```

Sie erhalten eine Ausgabe ähnlich dieser:
```
KEINGEWINN
321
GEWINN
10
FEEDBACK
30
RATINGS
Bewertung: 5
Bewertung: 4
Bewertung: 5
Bewertung: 5
Bewertung: 5
Bewertung: 5
Bewertung: 5
Bewertung: 5
Bewertung: 5
...
..
.
KOMMENTARE-000000000000
Bewertung: 5
Kommentar: 
Bewertung: 4
Kommentar: Ein Punkt Abzug, da kein Ton.
Bewertung: 5
Kommentar: 
Bewertung: 5
Kommentar: 
Bewertung: 5
Kommentar: 
Bewertung: 5
Kommentar: Tolles Spiel..
...
..
.
```

Sie können die Bewertungen (zwischen RATINGS bis "KOMMENTARE-000000000000") in ein Excel kopieren und dort nach belieben auswerten. Die Bereiche "RATINGS" und "KOMMENTARE-000000000000" sind identisch. Nur hilfsweise werden diese doppelt ausgegeben.

**So erkennen Sie potentielle Cheater**
Wenn ein Los gezogen wird, wird dieses als Datei mit dem HTTP_REFERER gespeichert. Cheatet ein Spieler ist der Referer häufig leer bzw. unbekannt. In dem Fall wird im Los der Hinweis "Herkunft bekannt." gespeichert. Ansonsten wird gespeichert von welchem Ort (URL) aus das Los gezogen wurde. In einigen Fällen gibt es aber legitime Use-Cases, z.B. wenn der Benutzer eine **Do-Not-Track-Funktion aktiviert** hat.

# Konzeptionelle Tipps
- Innerhalb eines Monates können Sie ca. 40-50% Ihrer Mitarbeiter erreichen. Rechnen Sie aber mit einer Laufzeit von 3-4 Monaten pro Spielkampangne. Sie können somit durchaus 2 Spiele pro Jahr organisieren.
- Wenn Sie das Spiel verändern, sollte das Konzept für die Teilnehmer attraktiv bleiben:
- Ein großer Aufwand ging in die Erstellung der Fragen und den Feinschliff drauf. Verändern Sie bei den Fragen nur den Text punktuell und ändern Sie die grundsätzliche Struktur der Fragen am Besten gar nicht. Es schleichen sich schnell Fehler ein (z.B. Tippfehler, inkonsistente Fragestellung, etc.)
- Wenn Sie Änderungen durchführen, versuchen Sie dies stets aus der Perspektive des Spielers zu sehen, z.B. versteht eine Mitarbeiterin eines Fachverfahrens wirklich was “Social Engineering” ist? Verwenden Sie lieber deutsche Bezeichnungen, die alle Verstehen können, z.B. “Personifizierung”.
- Ein Gruppen-Bonus fördert den Zusammenhalt und Zugehörigkeit
- Ohne persönliche Gewinne wird es wohl nicht klappen. Ein Spiel ohne Gewinnaussicht haben wir uns nicht getraut.
- Es reichen tatsächlich auch recht günstige Sachpreise aus, z.B. ein Stirnband. Ein iPad oder Elektronik ist nicht notwendig und setzt sogar falsche Anreize. Wichtig ist nur, dass es etwas zu Gewinnen gibt. 
- Die Teilnehmer schätzten insbesondere die Anonymität. Dies sollte man nicht beschneiden. 
- Wichtige Events und Außenfaktoren können den Rollout beeinflussen (z.B. aktuelle Wahlen oder Großveranstaltungen).
- Wie bei jedem Spiel, gibt es auch Cheat-Möglichkeiten. So kann es je nach Art und Weise der Integration möglich sein, dass ein Spieler mehrfach Lose ziehen kann, bis er gewinnt. Solche Versuche werden aber vom System größtenteils erkannt. Vermutlich erlebt aber ein Cheater große Hemmnisse, denn dieser muss erklären, warum er so viele Lose hat oder mehrere Personen einbinden, um den Gruppen-Bonus zu erreichen. Einen echten Fall hatten wir nicht erlebt. Dies sei nur am Rande der Ordnung halber erwähnt.

# Technische Tipps
- Wenn möglich, nehmen Sie Moodle als Basis. Damit können Sie per Drag & Drop das Spiel auf einfache Weise anpassen, Bilder und Pfade ändern. 
- Moodle ist aber nicht notwendig. Um das Spiel dennoch auf einfache Weise per Drag & Drop zu konfigurieren, können Sie z.B.  hilfsweise eine lokale Moodle oder Wordpress Test-Instanz aufsetzen. Die H5P Funktionalität dort aktivieren, die H5P Datei anschließend hochladen, bearbeiten und wieder herunterladen. 
- Sie können ein anderes LMS System verwenden, solange dies H5P unterstützt. Erfahrene Entwickler können dies in jedem System einbinden oder als Stand-Alone (auch ohne ein LMS) einrichten.
- Oft reicht auch ein 10€ Server von einem Discount Hoster aus (z.B. Strato). 
- Verwenden Sie am Besten nur deutsche Rechenzentren an einem schnellen Knotenpunkt (z.B. Frankfurt, München).
- Nutzen Sie ggf. Google PageSpeed Insights um die Geschwindigkeit zu optimieren.
