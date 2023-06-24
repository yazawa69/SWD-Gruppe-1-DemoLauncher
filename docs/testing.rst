#################################
Testen der Anwendung
#################################

Testgegenstand
================================
Getestet werden soll die Demo-Launcher-Applikation für die Mitarbeiter des Instituts für Intelligente Interaktive Ubiquitäre Systeme (IIIUS) zur zentralen Ansteuerung und Bedienung der Geräte aus dem Labor, welche vor allem für Demonstrationszwecke angedacht ist. 

Testumgebung
================================
Webbrowser: Mozilla Firefox (Version 114.0.2)
Datenbank: MySQL Workbench (Version 8.0.33) 
Entwicklungsplattform: Visual Studio Code (Version 1.79.2)
API: Insomnia (Version 2023.2.2)

Testvoraussetzungen
================================
•	Der Computer muss mit dem Internet verbunden sein, um auf die Webanwendung zuzugreifen und externe Ressourcen zu laden.
•	Bevor getestet werden kann, müssen alle erforderlichen Abhängigkeiten der Webanwendung installiert sein, einschließlich Insomnia und MySQL
•	Um den Testbetrieb zu ermöglichen, muss die Testdatenbank korrekt konfiguriert und mit Beispieldaten gefüllt sein. Im Fall des Demo-Launchers werden Gerätekategorien und verschiedene Arten von Demo-Material benötigt.
•	Die testende Person muss über ausreichende Zugriffsrechte auf die Testdatenbank verfügen zur Gewährleistung des Lese- und Schreibzugriffs für die Webanwendung
 (Testdaten angeben??)

 Testbeschreibung
================================
Zum Testen der korrekten Implementierung des Demo-Launchers haben wir uns für eine Kombination aus Integrationstest und funktionalem Test entschieden, um zum einen die Funktionalität im Hinblick auf die Implementierung funktionaler Anforderungen und die erwartete Benutzererfahrung zu analysieren und zu bewerten, zum anderen zur Testung der Zusammenarbeit und Interaktion zwischen verschiedenen Komponenten der Software.
Es soll also kurz gesagt die Zusammenarbeit zwischen den Komponenten überprüft werden, aber auch die Anwendung als Ganzes in Relation zu den spezifizierten Anforderungen.
Dies soll gewährleisten, Fehler zu erkennen und zu beheben, die Qualität zu steigern und eine Wartung/Verbesserung der Software an den richtigen Stellen im System zu ermöglichen.

Alle Testfälle wurden in einer Tabelle festgehalten und ihren Funktionen entsprechend sortiert.
Die Tabelle dient der Einheitlichkeit der Tests und zur übersichtlichen Strukturierung dieser.
Die Tabelle ist in acht Spalten unterteilt: Testfallnummer, Beschreibung, Voraussetzungen, Testfall, Soll-Output, Ist-Output, Testergebnis und Anmerkungen.


.. csv-table:: Demolauncher Testfälle
   :file: ``docs/Testfälle_DemoLauncher.CSV`` 
   :widths: 30, 70
   :header-rows: 1
