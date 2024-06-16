# Watzmann-Spiel: Erfolgreiche Awareness mit Gamification.
Das Watzmann-Spiel ist ein innovativer Weg die Mitarbeiter in Ihrer Organisation/Behörde zu begeistern und das Wissen aufzufrischen.
Es ist eine kostenlose **Public Code** Lösung von BaySec. Jede deutsche Behörde erhält eine kostenfreie Public Code License (PCL) zur Selbstnutzung.  
Das Spiel verfolgt einen Gamification Ansatz mit einem wohlüberlegten Spiele-Konzept. 

Die Mitarbeiter werden in der Regel vom ISB per E-Mail Verteiler eingeladen. Dieser verteilt einen Link zum Spiel. 

**Spiel-Geschichte**:

Ein Hacker hat sich am Watzmann-Gipfel eingenistet. Um ihn zu vertreiben, müssen alle Fragen richtig beantwortet und der Berg erklommen werden. Es sollten Sachpreise vorgesehen werden. Am Ende ist die Teilnahme an einer Verlosung möglich. Das Ergebnis wird sofort am Bildschirm angezeigt. Die Teilnahme am Spiel als auch an der Verlosung ist anonym - keine Registrierung notwendig.

**Spiele-Konzept**

1. Heimatnah: Bayerisches Wahrzeichen (“Watzmann”) schafft Nähe und Greifbarkeit.
2. Zielgruppengerecht: Fragen waren konzipiert für den Büromitarbeiter im Behörde. Weitere Wanderpfade sind denkbar (z.B. rot für IT Personal).
3. Anonym und frei von Skepsis: Teilnahme am Spiel und Verlosung war freiwillig und anonym. 
4. Keine Leistungskontrolle - weder direkt noch indirekt möglich. 
5. Kein Registrierungszwang.
6. Privacy by Design.
7. Persönliches Ziel: Der Spieler hatte die Aussicht auf einen persönlichen Sachpreis.
8. Gruppenziel: Ein Gruppen-Bonus förderte das Gefühl der Zugehörigkeit. Teilnehmer sollten über das Thema diskutieren und nicht einsam spielen. 
9. Selbstbestimmung: Hat ein Spieler gewonnen, bekam er eine Losnummer mit Prüf-PIN. Dieser diente als Gewinn-Nachweis. Der Spieler hatte stets die Kontrolle darüber, ob und wann er sich zu Erkennen geben möchte.

# Einrichtung (Aufwand: varriert zwischen 1h bis 12h)
**Technische Empfehlungen**

Software
- H5P Gamification Engine 
- Komfortable Integration in Moodle
- Auch andere LMS Systeme möglich (z.B. OpenEdx)
- Auch Stand-Alone möglich: LMS nicht zwingend notwendig.
- Eigens-entwickelte PHP Module für Bewertung und Verlosung

Hardware/Betriebssystem:
- Virtuelle Maschine mit Linux (z.B. Ubuntu) und 1000MB/s Anbindung (empfohlen). 
- Weitere Konfiguration abhängig von Größe der Organisation: Kann variieren zwischen 8-32 GB RAM, 4 oder 8 Core CPU. Bei Verwendung von Moodle: Pro Gigabyte Ram sind 10-20 **gleichzeitige** Zugriffe möglich.
- Oft reicht auch ein 10€ Server von einem Discount Hoster aus (z.B. Strato). 

**Notwendiges Know-How**

Technisches Know-How ist notwendig: Administrator oder Entwickler. Auch gut als Projekt für einen Azubi.

**Einrichtungsschritte**

1. asdf
2. asdf
3. asdf
4. asdf
5. adsf
6. adsf
7. asdf
8. asdf
9. 

# Betriebsanleitung (Aufwand: ca. 2h/wöchentlich)


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
