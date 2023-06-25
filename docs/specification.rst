=============================
Pflichtenheft
=============================

##################
L² GmbH (LackingLogic GmbH)
##################

===================== ==================================================
Projektbezeichnung    Softwaredesign - L² GmbH (Lacking Logic GmbH)
--------------------- --------------------------------------------------
Projektleitung        Ethan Fuchs
--------------------- --------------------------------------------------
Erstellt am           18.04.2023
--------------------- --------------------------------------------------
Letzte Änderung am    27.04.2023
--------------------- --------------------------------------------------
Status                fertiggestellt
--------------------- --------------------------------------------------
Aktuelle Version      1.1
===================== ==================================================

Änderungsverlauf
==============================

==== ============== ============ ==================== ================== ================ ==========
Nr.  Datum          Version      Geänderte Kapitel    Art der Änderung   Verantwortlich   Status
---- -------------- ------------ -------------------- ------------------ ---------------- ----------
1    18.04.2023     1.0          Alle                 Erstellung         Guido, Mattis    fertig
---- -------------- ------------ -------------------- ------------------ ---------------- ----------
2    27.04.2023     1.1          Alle                 Erstellung         Guido, Mattis    fertig
==== ============== ============ ==================== ================== ================ ==========

1. Einleitung
==============================
Das vorliegende Pflichtenheft definiert die funktionalen und nicht-funktionalen 
Anforderungen an das zu entwickelnde Produkt. Im Falle eines Vertragsabschlusses 
zwischen Auftragnehmer:in und Auftraggeber:in wird das Pflichtenheft rechtlich 
bindend sein. Alle vorherigen Vereinbarungen zwischen den Parteien werden in 
der Regel durch das Pflichtenheft ersetzt, sofern nichts Gegenteiliges vermerkt 
ist. Die Anforderungen legen die Rahmenbedingungen für die Entwicklung des 
Produkts fest, die vom Auftragnehmer:in im Detail im Pflichtenheft 
ausgestaltet werden müssen.

2. Allgemeines
==============================

    2.1. Ziel und Zweck des Dokuments
    ----------------------------------------------
    Das Ziel des Pflichtenhefts ist es, die Anforderungen und Spezifikationen 
    für die Entwicklung einer Webanwendung zu definieren, die die Planung und 
    Durchführung von Vorstellungen und Demonstrationen der Geräte im Labor 
    erleichtert. Das Pflichtenheft soll sicherstellen, dass die Anwendung 
    den Anforderungen und Bedürfnissen der Mitarbeiter des Instituts für 
    Intelligente Interaktive Ubiquitäre Systeme entspricht und die Effizienz 
    bei der Planung und Durchführung von Vorstellungen und Demonstrationen erhöht.

    2.2. Ausgangssituation
    ----------------------------------------------
    Die Ausgangssituation des Projekts ist, dass Mitarbeiter des Instituts für 
    Intelligente Interaktive Ubiquitäre Systeme bei der Demonstration von Geräten 
    im Labor viel manuellen Arbeitsaufwand haben und oft spezifisches Fachwissen 
    benötigen. Das Ziel ist es, eine Webanwendung zu entwickeln, die die Planung 
    und Durchführung von Vorstellungen und Demonstrationen der im Labor vorhandenen 
    Geräte erleichtert und dabei den manuellen Arbeitsaufwand minimiert. Die 
    Anwendung soll auch Mitarbeitern mit weniger spezifischem Fachwissen eine 
    sichere Durchführung ermöglichen.
    Die Anwendung soll mit der bestehenden Infrastruktur des Labors und dem 
    vorhandenen Equipment kompatibel sein und moderne und wartbare Technologien 
    nutzen. Sie soll sinnvoll für den Zweck der Webanwendung sein, und es soll 
    überzeugend dargelegt werden, warum diese Technologien gewählt wurden.

    2.3. Teams und Schnittstellen
    ----------------------------------------------
    Mitwirkende am Projekt werden möglichst genau benannt und die Schnittstellen 
    aufgezeigt. Darüber hinaus wird eine Tabelle mit allen Mitwirkenden und 
    den Kontaktdaten angelegt.
    
    ==================================== =================== =========================================== =====
    Rolle                                Name                E-Mail                                      Team
    ------------------------------------ ------------------- ------------------------------------------- -----
    Projektmanager/Backend-Entwicklung   Ethan Fuchs         ethan.alexander.fuchs@hs-furtwangen.de      2 
    ------------------------------------ ------------------- ------------------------------------------- -----
    Frontend-Entwicklung                 Guido Grün          guido.gruen@hs-furtwangen.de                1 
    ------------------------------------ ------------------- ------------------------------------------- -----
    Frontend-Entwicklung                 Marit Zenker        marit.luise.zenker@hs-furtwangen.de         1 
    ------------------------------------ ------------------- ------------------------------------------- -----
    Frontend-Entwicklung                 Mattis Petroll      mattis.frederik.petroll@hs-furtwangen.de    1
    ------------------------------------ ------------------- ------------------------------------------- -----
    Frontend-Entwicklung                 Lisa Kutowinski     lisa.anne-maria.kutowinski@hs-furtwangen.de 1 
    ------------------------------------ ------------------- ------------------------------------------- -----
    Backend-Entwicklung                  Vadim Borejko       vadim.borejko@hs-furtwangen.de              2  
    ------------------------------------ ------------------- ------------------------------------------- -----
    Backend-Entwicklung                  Lea Hergert         lea.hergert@hs-furtwangen.de                2
    ------------------------------------ ------------------- ------------------------------------------- -----
    Backend-Entwicklung                  Nico Berndt         nico.berndt@hs-furtwangen.de                2
    ==================================== =================== =========================================== =====

3. Konzept
=========================

    3.1. Ziel(e) und Nutzen der Anwender:innen
    ----------------------------------------------
    Die angebotene Web-Applikation ermöglicht die Planung und Inszenierung von Vorführungen 
    und Demonstrationen im Labor. Die Anwendung ist kompatibel mit der bestehenden Labor 
    Infrastruktur und dem vorhandenen Equipment und kann auf verschiedenen Endgeräten 
    genutzt werden. Die Anwendung ermöglicht es Benutzern, verschiedene Demo-Szenarien zu 
    erstellen und diese automatisch oder manuell auszuführen.

    3.2. Zielgruppe(n)
    ----------------------------------------------
    Die Zielgruppe zeichnet sich durch technisches Wissen an den vorhandenen Technologien 
    aus. Sie verfügen über grundlegende Kenntnisse im Umgang mit den Laborgeräten.

4. Funktionale Anforderungen
========================================
    
    4.1. Anforderung 1
    -------------------------------------------
    Die Anwendung muss in der Lage sein, verschiedene Demo-Szenarien zu erstellen und 
    zu speichern.

    4.2. Anforderung 2
    -------------------------------------------
    Die Anwendung muss die Möglichkeit bieten, Demo-begleitendes Material anzulegen, 
    sowie bei Bedarf gerätespezifische Anwendungen zu starten.

5. Nichtfunktionale Anforderungen
===================================

    5.1. Allgemeine Anforderungen
    -------------------------------------------
    Die Anwendung soll eine Hilfestellung bei der Planung und Inszenierung von 
    Vorführungen und Demonstrationen im Labor sein.

    5.2. Technische Anforderungen
    -------------------------------------------
    1. Kompatibilität mit der vorhandenen Infrastruktur und dem Equipment: Die 
    Anwendung muss so entwickelt werden, dass sie mit den vorhandenen Geräten 
    und der Infrastruktur des Labors kompatibel ist, um eine reibungslose 
    Integration zu gewährleisten.
    2. Benutzerfreundlichkeit und Sicherheit: Die Anwendung muss 
    benutzerfreundlich sein und die sichere Durchführung von Vorstellungen 
    und Demonstrationen ermöglichen. Dies erfordert eine intuitive 
    Benutzeroberfläche, die es auch Mitarbeitern mit weniger spezifischem 
    Fachwissen ermöglicht, die Anwendung sicher zu nutzen.
    3. Dokumentation und Wartbarkeit: Die Anwendung sollte gut dokumentiert 
    und wartbar sein. Eine ordnungsgemäße Dokumentation des 
    Entwicklungsprozesses sowie des Codes erleichtert die Nachvollziehbarkeit 
    und die zukünftige Wartung der Anwendung.

6. Use Cases
=======================

Use Case Diagramm
-------------------------------------------
.. image:: docs\UseCaseDiagramm.jpg
  :width: 1275
  :alt: Use Case Diagramm


+-------------------+--------------------------+-------------------------------------------------------+
| Use Case "Gerät hinzufügen"                                                                          |
+===================+==========================+=======================================================+
| Ziel              | Verfügbares Laborgerät mit Anwendung verbinden und speichern                     |
+-------------------+--------------------------+-------------------------------------------------------+
| Kurzbeschreibung  | | Ein im Labor verfügbares Gerät soll mit der Anwendung verbunden werden, um     |
|                   | | gerätespezifische Medien (Demos) hinzuzufügen und das Gerät innerhalb eines    |
|                   | | Szenarios anzusteuern.                                                         |                             
+-------------------+--------------------------+-------------------------------------------------------+
| Auslöser          | Neues Gerät im Labor                                                             |
+-------------------+--------------------------+-------------------------------------------------------+
| Akteure           | Experte am Institut (für hinzuzufügendes Gerät)                                  |
+-------------------+--------------------------+-------------------------------------------------------+
|Vorbedingungen     | | Installierte Applikation                                                       |                                                   
|                   | | Gerät im Labor ansteuerbar                                                     |                                             
+-------------------+--------------------------+-------------------------------------------------------+
| Nachbedingungen   | | Das Gerät wurde mit der Anwendung verbunden und von dieser gespeichert und     |
|                   | | kann nun ausgeschaltet werden                                                  |
+-------------------+--------------------------+-------------------------------------------------------+
| | Eingehende      | Daten zu Gerät                                                                   |                                                    
| | Informationen   |                                                                                  |                                                  
+-------------------+--------------------------+-------------------------------------------------------+
| Ergebnisse        | Gerät wurde hinzugefügt                                                          |       
+-------------------+--------------------------+-------------------------------------------------------+
| Verbindungen      | Szenario erstellen                                                               |                
+-------------------+--------------------------+-------------------------------------------------------+
| Ablauf            | Handlung Benutzer        | Handlung Systeme                                      |
|                   +--------------------------+-------------------------------------------------------+
|                   | | Anwendung starten      | | Seite "Verbundene Geräte" öffnen                    |
|                   | | Gerät starten          | | Verbundene Geräte und Auswahlmöglichkeiten anzeigen |
|                   | | Menü öffnen            |                                                       |                                                        
|                   +--------------------------+-------------------------------------------------------+
|                   | | "Neues Gerät hinzu-    | | Seite "Neues Gerät hinzufügen" öffnen               |
|                   | | fügen" auswählen       | | Eingabefelder anzeigen                              |
|                   +--------------------------+-------------------------------------------------------+
|                   | | Geräte-Kategorie wählen| IP-Adresse suchen und verbinden                       |
|                   | | Name, IP-Adresse und   |                                                       |                            
|                   | | Beschreibung eingeben  |                                                       |           
|                   +--------------------------+-------------------------------------------------------+
|                   | "Speichern" drücken      | | Eingaben zu Gerät speichern                         |     
|                   |                          | | Zur Seite "Verbundene Geräte" zurückkehren          |
+-------------------+--------------------------+-------------------------------------------------------+

=================== ========================= =======================================================
Use Case "Demomaterial hinzufügen"
=====================================================================================================
Ziel                | Demomaterial hinzufügen
------------------- ---------------------------------------------------------------------------------
Kurzbeschreibung    | Bereits vorhandenes Demomaterial (Textdokument, Präsentation, Video, ...)
------------------- ---------------------------------------------------------------------------------
Auslöser            | Neues Demomaterial
------------------- ---------------------------------------------------------------------------------
Akteure             | Experte am Institut
------------------- ---------------------------------------------------------------------------------
Vorbedingungen      | Installierte Applikation
                    | Demomaterial vorhanden und kompatibles Dateiformat
------------------- ---------------------------------------------------------------------------------
Nachbedingungen     | Das Demomaterial wurde zur Anwendung hinzugefügt
------------------- ---------------------------------------------------------------------------------
| Eingehende        | Daten zu Demomaterial
Informationen
------------------- ---------------------------------------------------------------------------------
Ergebnisse          | Demomaterial wurde hinzugefügt
------------------- ---------------------------------------------------------------------------------
Verbindungen        | Szenario erstellen
------------------- ---------------------------------------------------------------------------------
Ablauf              | Handlung Benutzer       | Handlung Systeme
                    ------------------------- -------------------------------------------------------
                    | Anwendung starten       | Seite "Demomaterial verwalten" öffnen
                    | Menü öffnen             | Art des Materials und Auswahlmöglichkeiten
                    | "Demomaterial ver-      
                    | walten" wählen
                    ------------------------- -------------------------------------------------------
                    | Aus Dropdown-Menü ent-  | Seite "Neues Material hinzufügen" öffnen
                    | sprechendes Dateiformat | Upload- und Eingabefelder anzeigen
                    | auswählen               |
                    | "Neues Material hinzu-
                    | fügen" auswählen
                    ------------------------- -------------------------------------------------------
                    | Name und Beschreibung   | Demomaterial und Eingaben speichern
                    | eingeben                | Zur Seite "Demomaterial verwalten" zurückkehren
                    | Demomaterial hochladen
                    | "Speichern" drücken
=================== ========================= =======================================================

=================== ========================= =======================================================
Use Case "Szenario erstellen"
=====================================================================================================
Ziel                | Neues Szenario erstellen und speichern
------------------- ---------------------------------------------------------------------------------
Kurzbeschreibung    | Ein neues Szenario soll erstellt werden. Dafür muss zunächst ein geeigneter
                    | Name sowie eine Beschreibung vergeben werden. Dann werden verfügbare Geräte
                    | sowie ggf. gerätespezifische Medien (Demomaterial) ausgewählt, die beim Starten
                    | des Szenarios gestartet werden sollen.
------------------- ---------------------------------------------------------------------------------
Auslöser            | Neues Szenario soll erstellt werden (z.B. weil neue Geräte verfügbar sind oder
                    | ein neues Meidm gezeigt werden soll)
------------------- ---------------------------------------------------------------------------------
Akteure             | Experte am Institut (für gewünschte Gerät)
------------------- ---------------------------------------------------------------------------------
Vorbedingungen      | Installierte Applikation
                    | Gewünschte Geräte bereits in Anwendung gespeichert und ansteuerbar
                    | Gewünschte Demos vorhanden und mit gewünschtem Gerät kompatibel
------------------- ---------------------------------------------------------------------------------
Nachbedingungen     | Das Szenario wurde erstellt und kann bei Bedarf gestartet werden
------------------- ---------------------------------------------------------------------------------
| Eingehende        | Name und Beschreibung für Szenario
Informationen       | Gewünschte Geräte
                    | Gewünschte Mediendemos
                    | Gewünschte Startreihenfolge
------------------- ---------------------------------------------------------------------------------
Ergebnisse          | Gewünschtes Szenario wurde erstellt und kann gestartet werden (anderer
                    | Anwendungsfall)
------------------- ---------------------------------------------------------------------------------
Verbindungen        | Szenario starten
------------------- ---------------------------------------------------------------------------------
Ablauf              | Handlung Benutzer       | Handlung Systeme
                    ------------------------- -------------------------------------------------------
                    | Anwendung starten       | Seite "Szenarien verwalten" öffnen
                    | Menü öffnen             | 
                    | "Szenarien verwalten"   |
                    | wählen                  |
                    ------------------------- -------------------------------------------------------
                    | "Neues Szenario er-     | Seite "Neues Szenario erstellen" öffnen
                    | stellen" auswählen      | Auswahlmöglichkeiten anzeigen
                    ------------------------- -------------------------------------------------------
                    | Name und Beschreibung   | Phase auswählen und anzeigen
                    | eingeben 
                    | Im Dropdown-Menü Phase
                    | auswählen bzw. neue
                    | Phase erstellen
                    ------------------------- -------------------------------------------------------
                    | "Gerät hinzufügen"      | Liste mit bereits gespeicherten Geräten anzeigen
                    | wählen 
                    ------------------------- -------------------------------------------------------
                    | Verfügbare Geräte       | Ausgewählte Geräte anzeigen
                    | auswählen
                    ------------------------- -------------------------------------------------------
                    | Optional Demomaterial   | Für Gerät verfügbares Demomaterial anzeigen
                    | hinzufügen: bei ge-     
                    | wünschtem Gerät "+"
                    | drücken 
                    ------------------------- -------------------------------------------------------
                    | Gewünschtes Demo-       | Ausgewählte Geräte, Demomaterial und Startreihenfolge
                    | material auswählen      | speichern
                    | Optional: Startreihen-  | Zur Startseite zurückkehren
                    | folge ändern
                    | "Speichern" drücken              
=================== ========================= =======================================================

=================== ========================= =======================================================
Use Case "Szenario starten"
=====================================================================================================
Ziel                | Ausgewühltes Szenario starten
------------------- ---------------------------------------------------------------------------------
Kurzbeschreibung    | Ein bereits erstelltes Szenario wird in der Anwendung ausgewählt und gestartet.
                    | In dem Szenario hinterlegte Geräte werden automatisch eingeschaltet, ggf.
                    | gerätespezifische Medien (Demomaterial) gestartet und der Nutzer wird durch
                    | die manuellen Schritte geleitet.
------------------- ---------------------------------------------------------------------------------
Auslöser            | Demonstrator-Szenario soll ausgeführt werden
------------------- ---------------------------------------------------------------------------------
Akteure             | Mitarbeiter am Institut
------------------- ---------------------------------------------------------------------------------
Vorbedingungen      | Installierte Applikation
                    | Geräte mit Applikation verbunden und gespeichert
                    | Auszuführendes Szenario erstellt und gespeichert
                    | Geräte ansteuerbar
------------------- ---------------------------------------------------------------------------------
Nachbedingungen     | Das Szenario wurde ausgeführt, wird beendet und entsprechende Geräte werden
                    | ausgeschaltet
------------------- ---------------------------------------------------------------------------------
| Eingehende        | Auswahl Szenario
Informationen       | Verfügbarkeit Geräte
------------------- ---------------------------------------------------------------------------------
Ergebnisse          | Anwendung startet entsprechende Geräte und ggf. gerätespezifische Demos
------------------- ---------------------------------------------------------------------------------
Verbindungen      
------------------- ---------------------------------------------------------------------------------
Ablauf              | Handlung Benutzer       | Handlung Systeme
                    ------------------------- -------------------------------------------------------
                    | Anwendung starten       | Gewähltes Szenario laden
                    | Szenario auswählen      | Informationen zu Szenario anzeigen
                    ------------------------- -------------------------------------------------------
                    | Szenario starten        | Zu Szenario gehörige Geräte starten
                    |                         | Evtl. gerätespezifische Demo laden
                                              | Informationen zu Szenario anzeigen
                    ------------------------- -------------------------------------------------------
                    | Wenn vorhanden Phasen   | Ausgewähltes Demomaterial abspielen
                    | steuern: "nächste
                    | Phase" oder "Phase
                    | zurück" auswählen
                    ------------------------- -------------------------------------------------------
                    | Optional wenn Gerät     | Demomaterial pausieren oder abhängig von Art des
                    | mehrere Demomaterialien | Materials Schritt weiter/zurück (z.B. nächste/
                    | hat: auf Pfeil neben    | vorherige Folie in Präsentation)
                    | gewünschtem Material
                    | klicken 
                    ------------------------- -------------------------------------------------------
                    | Szenario beenden        | Demos schließen; Geräte wieder ausschalten
                    |                         | Zur Startseite zurückkehren
=================== ========================= =======================================================

7. Rahmenbedingungen
================================

    7.1. Zeitplan
    -------------------------------------------
    1. Planungsphase (3 Wochen)
        * Anforderungsanalyse und Spezifikationen erstellen
        * Design und Architektur der Anwendung entwerfen
        * Auswahl geeigneter Technologien
    2. Implementierungsphase (5 Wochen)
        * Entwicklung der Szenarienerstellung und Szenarien-Ausführung Funktionen
        * Integration der Komponenten und Gerätesteuerung
        * Erstellung von Demo-Material-Verwaltungsfunktionen
        * Implementierung von Automatisierung und Protokollierung
    3. Testphase (2 Wochen)
        * Durchführung von Funktions- und Integrationstests
        * Fehlerbehebung und Optimierung der Anwendung
    4. Dokumentations- und Wartungsphase (1 Woche)
        * Erstellung von Anwender- und Entwickler-Dokumentationen
        * Überprüfung der Codequalität und Wartbarkeit
        * Bereitstellung der Anwendung für den Einsatz im Institut

    7.2. Problemanalyse
    -------------------------------------------
    1. Kompatibilität: Die Anwendung soll mit der vorhandenen Infrastruktur des 
    Labors und dem vorhandenen Equipment kompatibel sein.
    2. Benutzerfreundlichkeit: Die Anwendung soll für Mitarbeiter mit weniger 
    spezifischem Fachwissen einfach zu bedienen sein. 
    3. Zuverlässigkeit: Fehler oder Abstürze der Anwendung während einer Vorstellung 
    können zu Unterbrechungen und Unannehmlichkeiten führen.
    4. Wartbarkeit: Der Code der Anwendung sollte gut lesbar und wartbar sein, um 
    eventuelle spätere Änderungen oder Weiterentwicklungen zu erleichtern.

    7.3. Qualität
    -------------------------------------------
    Der Entwicklungsprozess soll sinnvoll dokumentiert werden und der entstehende 
    Code gut lesbar und wartbar sein. Zudem sollte der Code regelmäßig getestet 
    werden, um die Fehlerquote so gering wie möglich zu halten.

8. Liefer- und Abnahmebedingungen
=======================================
Abgenommen wird das Projekt von Professor Schlegel. Selbiger bestimmt ebenso, ob die Qualität stimmt und ob das Projekt erfolgreich abgeschlossen wurde.
Das Projekt wird mitsamt Dokumentation und Nachweis auf ausführliches Testen geliefert. Außerdem wird ein Beispiel-Anwendungsfall mitgeliefert.




