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

Demolauncher Testfälle
================================

.. list-table:: Navigation durch die Anwendung
   :widths: 10, 13, 13, 13, 15, 13, 13, 10
   :header-rows: 1
   
   * - Test-Nr.
     - Szenario
     - Voraussetzungen
     - Testfall
     - Erwarteter Output
     - Ist-Output
     - Test bestanden?
     - Anmerkungen
   * - 1
     - Über Logo zurück auf Startseite navigieren
     -
     - Auf beliebigen Unterseiten auf das Logo der Anwendung drücken
     - Zurückleitung zur Startseite
     - Zurückleitng zur Startseite
     - Ja
     -
   * - 2
     - Durch die Anwendung navigieren
     - Anwendung läuft
     - 1. Klick auf das Burgermenü
     - Alle möglichen Unterseiten über Klick aufrufen
     - Alle möglichen Unterseiten (Startseite, Szenarien verwalten, 
     Geräte verwalten, Demomaterial verwalten) sind aufgelistet + werden bei Klick entsprechend aufgerufen
     - Alle möglichen Unterseiten (Startseite, Szenarien verwalten,
       Geräte verwalten, Demomaterial verwalten) sind aufgelistet + werden bei Klick entsprechend aufgerufen
     - Ja
     -
   * - 3
     - Von Startseite aus ein Szenario bearbeiten
     - Bereits erstelltes Szenario
     - 1. Auf Startseite Szenario auswählen ("Szenario auswählen") 2. Auf Bearbeiten klicken
     - Weiterleitung zum szenariospezifischen "Szenario bearbeiten"
     - Weiterleitung zum szenariospezifischen "Szenario bearbeiten"
     - Ja
     - 



   


Auswertung der Testergebnisse und Einhaltung der Anforderungen aus dem Pflichtenheft
================================
Die Anwendung wurde auf die korrekte Implementierung der funktionalen Anforderungen getestet.
Diese waren im Pflichtenheft wie folgt spezifiziert:


4.1 Anforderung 1
   Die Anwendung muss in der Lage sein, verschiedene Demo-Szenarien zu erstellen und zu speichern.

4.2 Anforderung 2
   Die Anwendung muss die Möglichkeit bieten, demo-begleitendes Material anzulegen, sowie bei Bedarf gerätespezifische Anwendungen zu starten.


Wie in Anforderung 1 und 2 spezifiziert, muss die Anwendung in der Lage sein, Szenarien zu Demonstrationszwecken zu erstellen und zu speichern, sowie Demo-begleitendes Material anzulegen und gerätespezifische Anwendungen zu starten.
Dies wird durch die Implementierung der Funktionen ``Szenarien verwalten``, ``Geräte verwalten`` und ``Demomaterial verwalten`` gewährleistet.
Geräte können in der Anwendung angelegt und verwaltet werden, sowie Demo-Materialien, die auf den Geräten abgespielt werden können.
Die Demo-Materialien können dann in Szenarien eingebunden werden, um diese zu erstellen und zu speichern.
Die Anwendung ist also in der Lage, die funktionalen Anforderungen 1 und 2 zu erfüllen.

Die entprechenden Komponenten wurden auf ihre korrekte Implementierung erfolgreich getestet.
Es bestehen jedoch noch Fehler bezüglich der korrekten Speicherung der Daten in der Datenbank, welche in der Testphase nicht behoben werden konnten.
Betroffen ist v.a. die korrekte Speicherung der Daten bei Bearbeitung der Phasen unter ``Phase bearbeiten`` in Verbindung mit dem Reiter ``Szenario bearbeiten``.
Genaue Details zu den Fehlern sind in der Tabelle der Testfälle zu finden.



Erweiterungen und geplante Wartungen
================================
Zunächst angesetzte Erweiterungen
--------------------------------
•   Unterschiedliche Steuerungselemente für unterschiedliche Demomaterialien: Die Steuerungselemente für die Demo-Materialien sind aktuell noch nicht auf die jeweiligen Materialien angepasst, sondern sind für alle Materialien gleich.
    Um die Bedienung der Demo-Materialien zu vereinfachen, sollen die Steuerungselemente für die jeweiligen Materialien angepasst werden.
    So soll beispielsweise die Steuerung für ein Video aus einem anderen Steuerungselement bestehen als die Steuerung für eine Präsentation.
    Genauso sind zusätzliche Steuerungselemente denkbar, wie beispielsweise ein Steuerungselement für die Lautstärke eines Videos.
•	Responsive Design: Die Webanwendung ist aktuell für die Nutzung auf mobilen Endgeräten optimiert, um Demomaterialien ähnlich wie bei einer Fernbedienung leicht bedienen zu können.
    Jedoch ist die Anwendung nicht für die Nutzung auf Tablets oder Desktop-PCs optimiert, was die Bedienung auf diesen Geräten erschwert.
    Um die Anwendung auch auf diesen Geräten nutzbar zu machen, ist ein Responsive Design geplant, welches die Anwendung an die Bildschirmgröße des Endgeräts anpasst.

Weitere UI-Verbesserungen
--------------------------------
•	Unter ``Szenario bearbeiten`` soll unter Auflistung der Phasen eine visuelle Erweiterung hinzugefügt werden, die anzeigt, welche Geräte einer Phase zugeordnet sind. 
    Dies soll die Übersichtlichkeit erhöhen und die Zuordnung von Geräten zu Phasen vereinfachen.
•	Die Reihenfolge der Phasen soll veränderbar sein, um die Erstellung von Szenarien zu vereinfachen. Angedacht ist hierbei ein Drag-and-Drop-Verfahren innerhalb von ``Szenario bearbeiten``.
•	Ebenfalls soll die Reihenfolge der Geräte innerhalb einer Phase veränderbar sein, um auch hier die Erstellung von Szenarien zu vereinfachen. Angedacht ist hierbei ein Drag-and-Drop-Verfahren innerhalb von ``Phase bearbeiten``.
•	Unter ``Szenario bearbeiten`` soll außerdem ein visueller Hinweis angezeigt werden, wenn eine Phase noch leer ist.
•   Die Geräteübersicht soll unter ``Geräte verwalten`` um eine Suchfunktion erweitert werden, um die Suche nach Geräten zu vereinfachen.
•	Bei der Erstellung eines Szenarios unter ``Szenarien verwalten`` soll die Möglichkeit bestehen, ein Szenario zu duplizieren.

Weitere Funktionalitäten
--------------------------------
•   Die Ansteuerung weiterer Gerätekategorien soll implementiert werden. 
    Aktuell ist die Ansteuerung von VR-Brillen und Bildschirmen möglich. 
    Die Ansteuerung von weiteren Gerätekategorien wie beispielsweise Audio-Geräten oder Smart-Home-Geräten soll implementiert werden.



