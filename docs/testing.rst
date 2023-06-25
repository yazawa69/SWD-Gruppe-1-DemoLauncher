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
•	Der Computer muss mit dem Internet verbunden sein, um auf die Webanwendung zuzugreifen und externe Ressourcen zu laden. Auch müssen alle weiteren Geräte mit dem selben Netzwerk verbunden sein
•	Bevor getestet werden kann, müssen alle erforderlichen Abhängigkeiten der Webanwendung installiert sein.
•	Um den Testbetrieb zu ermöglichen, muss die Testdatenbank korrekt konfiguriert und mit Beispieldaten gefüllt sein. Im Fall des Demo-Launchers werden Gerätekategorien und verschiedene Arten von Demo-Material benötigt.
•	Die testende Person muss über ausreichende Zugriffsrechte auf die Testdatenbank verfügen zur Gewährleistung des Lese- und Schreibzugriffs für die Webanwendung

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


==== ==================== ==================== ==================== ==================== ==================== =========== ============
Navigation durch die Anwendung
======================================================================================================================================
Nr.  Szenario             Voraussetzung        Testfall             Soll-Output          Ist-Output           Best.       Anmerkung
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
1     Startseite                               | Auf beliebigen     | Zurückleitung      | Zurückleitung      Ja          
                                               | Unterseiten auf    | zur Startseite     | zur Startseite 
                                               | das Logo der An-   
                                               | wendung drücken              
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
2    | Durch die An-      Anwendung läuft      | 1. Klick auf das   | Alle möglichen     | Alle möglichen     Ja
     | wendung navigieren                      | Burgermenü         | Unterseiten        | Unterseiten 
                                               | 2. Alle möglichen  | (Startseite, Sze-  | (Startseite, Sze-
                                               | Unterseiten über   | narien verwalten,  | narien verwalten,
                                               | Klick aufrufen     | Demomaterial       | Demomaterial
                                                                    | verwalten) sind    | verwalten) sind
                                                                    | aufgelistet +      | aufgelistet +  
                                                                    | werden bei Klick   | werden bei Klick 
                                                                    | entsprechend       | entsprechend 
                                                                    | aufgerufen         | aufgerufen 
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
3    | Von Startseite     | Bereits erstell-   | 1. Auf Startseite  | Weiterleitung zum  | Weiterleitung zum  Ja
     | aus ein Szenario   | tes Szenario       | Szenario auswählen | szenariospezifi-   | szenariospezifi-
     | bearbeiten                              | ("Szenario aus-    | schen "Szenario    | schen "Szenario
                                               | wählen")           | bearbeiten"        | bearbeiten"
                                               | 2. Auf bearbeiten
                                               | klicken
==== ==================== ==================== ==================== ==================== ==================== =========== ============

==== ==================== ==================== ==================== ==================== ==================== =========== ============
Funktion: Geräte verwalten (Anmerkung: Testfälle gelten für jede Gerätekategorie)
======================================================================================================================================
Nr.  Szenario             Voraussetzung        Testfall             Soll-Output          Ist-Output           Best.       Anmerkung
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
4    | Neues Gerät hinzu- | Gerätekategorie   | 1. Über Burgermenü | Zurückleitung zum  | Zurückleitung zum  Ja
     | fügen              | muss bereits im-   | Reiter "Geräte     | gerätespezifischen | gerätespezifischen 
                          | plementiert sein   | verwalten" auswäh- | "Geräte verwalten" | "Geräte verwalten"
                                               | len                | + entsprechendes   | + entsprechendes
                                               | 2. Gerätekategorie | Gerät wurde er-    | Gerät wurde er-
                                               | auswählen          | folgreich hinzu-   | folgreich hinzu-
                                               | 3. Über Button     | gefügt             | gefügt
                                               | "hinzufügen" neues
                                               | Gerät hinzufügen
                                               | 4. Alle erforder-
                                               | lichen Felder aus-
                                               | füllen (Name, Her-
                                               | steller, Serien-
                                               | nummer)
                                               | 5. Speichern
                                               | drücken
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
5    | Neues Gerät un-    | Gerätekategorie    | 1. Über Burgermenü | Speichern-Button   | Speichern-Button   Ja
     | vollständig hinzu- | muss bereits im-   | Reiter "Geräte     | bleibt so lange    | bleibt so lange
     | fügen              | plementiert sein   | verwalten" auswäh- | ausgegraut und     | ausgegraut und
                          |                    | len                | damit nicht klick- | damit nicht klick-
                                               | 2. Gerätekategorie | bar, bis alle ent- | bar, bis alle ent-
                                               | auswählen          | sprechenden Felder | sprechenden Felder
                                               | 3. Über Button     | ausgefüllt wurden  | ausgefüllt wurden
                                               | "hinzufügen" neues
                                               | Gerät hinzufügen
                                               | 4. Ausfüllbare 
                                               | Felder teilweise 
                                               | unausgefüllt
                                               | lassen
                                               | 5. Speichern
                                               | drücken
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
6    | Ausgewähltes Gerät | Gerät wurde hinzu- | 1. Über Burgermenü | Speichern-Button   | Speichern-Button   Ja
     | erfolgreich bear-  | gefügt             | Reiter "Geräte     | bleibt so lange    | bleibt so lange
     | beiten                                  | verwalten" klicken | ausgegraut und     | ausgegraut und
                                               | 2. Gerätekategorie | damit nicht klick- | damit nicht klick-
                                               | auswählen, in der  | bar, bis eine Än-  | bar, bis eine Än-
                                               | bereits ein Geräte | derung vorgenom-   | derung vorgenom-
                                               | hinzugefügt wurde  | men wurde und      | men wurde und
                                               | 3. Das ent-        | keines der aus-    | keines der aus-
                                               | sprechende Gerät   | füllbaren Felder   | füllbaren Felder
                                               | auswählen          | leer ist           | leer ist
                                               | 4. Auf Bearbeiten  | Nach Klick auf     | Nach Klick auf
                                               | klicken            | Speichern wird man | Speichern wird man
                                               | 5. Beliebige Ände- | zurück auf die ge- | zurück auf die ge-
                                               | rungen vornehmen   | rätespezifische    | rätespezifische
                                               | 6. Speichern       | Seite "Geräte ver- | Seite "Geräte ver-
                                               | drücken            | walten" geleitet,  | walten" geleitet,
                                                                    | wo die Änderungen  | wo die Änderungen
                                                                    | übernommen wurden  | übernommen wurden
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
7    | Ausgewähltes Gerät | Gerät wurde hinzu- | 1. Über Burgermenü | Zurückleitung zum  | Zurückleitung zum  Ja
     | löschen            | gefügt             | auf "Geräte ver-   | gerätespezifischen | gerätespezifischen
                                               | walten klicken     | "Geräte verwalten" | "Geräte verwalten"
                                               | 2. Gerätekategorie | + entsprechendes   | + entsprechendes
                                               | auswählen, in der  | Gerät wurde er-    | Gerät wurde er-
                                               | bereits ein Gerät  | folgreich ent-     | folgreich ent-
                                               | hinzugefügt wurde  | fernt              | fernt
                                               | 3. Das entspre-
                                               | chende Gerät aus-
                                               | wählen
                                               | 4. Auf Bearbeiten
                                               | klicken
                                               | 5. Auf Löschen
                                               | klicken
                                               | 6. Bestätigen
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
8    | Gerätebearbeitung  | Gerät wurde hinzu- | 1. Über Burgermenü | Zurückleitung zum  | Zurückleitung zum  Ja
     | abbrechen          | gefügt             | "Geräte verwalten" | gerätespezifischen | gerätespezifischen
                                               | klicken            | "Geräte verwalten" | "Geräte verwalten"
                                               | 2. Gerätekategorie | + entsprechendes   | + entsprechendes
                                               | auswählen, in der  | Gerät wurde nicht  | Gerät wurde nicht
                                               | bereits ein Gerät  | verändert          | verändert
                                               | hinzugefügt wurde
                                               | 3. Das entspre-
                                               | chende Gerät aus-
                                               | wählen
                                               | 4. Auf Bearbeiten
                                               | klicken
                                               | 5. Beliebige Ände-
                                               | rungen vornehmen
                                               | 6. Auf Abbrechen
                                               | klicken
==== ==================== ==================== ==================== ==================== ==================== =========== ============

==== ==================== ==================== ==================== ==================== ==================== =========== ============
Funktion: Demomaterial verwalten (Anmerkung: Testfälle gelten für jede Art von Demomaterial)
======================================================================================================================================
Nr.  Szenario             Voraussetzung        Testfall             Soll-Output          Ist-Output           Best.       Anmerkung
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
9    | Neues Demomaterial | Das hinzuzufügende | 1. Über Burgermenü | Zurückleitung zu   | Zurückleitung zu   Ja
     | hinzufügen         | Demomaterial muss  | auf "Demomaterial  | "Demomaterial ver- | "Demomaterial ver-
                          | einer der aufge-   | verwalten" klicken | walten" innerhalb  | walten" innerhalb
                          | führten Kategorien | 2. Art des Demo-   | der entsprechenden | der entsprechenden
                          | entsprechen        | materials aus-     | Kategorie + ent-   | Kategorie + ent-
                                               | wählen             | sprechendes Demo-  | sprechendes Demo-
                                               | 3. Hinzufügen      | material wurde er- | material wurde er-
                                               | klicken            | folgreich hinzuge- | folgreich hinzuge-
                                               | 4. Auf Durchsuchen | fügt               | fügt
                                               | klicken und
                                               | passendes Demo-
                                               | material wählen
                                               | 5. Beschreibung
                                               | ausfüllen
                                               | 6. Speichern
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
10   | Neues Demomaterial                      | 1. Über Burgermenü | Speichern-Button   | Speichern-Button   Ja
     | unvollständig hin-                      | auf "Demomaterial  | bleibt so lange    | bleibt so lange
     | zufügen                                 | verwalten" klicken | ausgegraut und     | ausgegraut und
                                               | 2. Art des Demo-   | damit nicht klick- | damit nicht klick-
                                               | materials aus-     | bar, bis alle ent- | bar, bis alle ent-
                                               | wählen             | sprechenden Felder | sprechenden Felder
                                               | 3. Hinzufügen      | ausgefüllt wurden  | ausgefüllt wurden
                                               | klicken
                                               | 4. Ausfüllbare
                                               | Felder teilweise
                                               | unausgefüllt
                                               | lassen
                                               | 5. speichern
                                               | drücken
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
11   | Hinzufügen neuen                        | 1. Über Burgermenü | Zurückleitung zum  | Zurückleitung zum  Ja
     | Demomaterials                           | auf "Demomaterial  | demospezifischen   | demospezifischen
     | abbrechen                               | verwalten" klicken | "Demomaterial ver- | "Demomaterial ver-
                                               | 2. Art des Demo-   | walten" + entspre- | walten" + entspre-
                                               | materials aus-     | chendes Demo-      | chendes Demo-
                                               | wählen             | material wurde     | material wurde
                                               | 3. Hinzufügen      | nicht hinzugefügt  | nicht hinzugefügt
                                               | klicken
                                               | 4. Auf Durchsuchen
                                               | klicken und
                                               | passendes Demo-
                                               | material wählen
                                               | 5. Beschreibung
                                               | ausfüllen
                                               | 6. Abbrechen
                                               | klicken
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
12   | Ausgewähltes Demo- | Demomaterial wurde | 1. Über Burgermenü | Speichern-Button   | Speichern-Button   Ja
     | material bearbei-  | hinzugefügt        | auf "Demomaterial  | bleibt so lange    | bleibt so lange
     | ten/ändern                              | verwalten" klicken | ausgegraut und     | ausgegraut und
                                               | 2. Art des Demo-   | damit nicht klick- | damit nicht klick-
                                               | materials aus-     | bar, bis eine Än-  | bar, bis eine Än-
                                               | wählen, in welchem | derung vorgenom-   | derung vorgenom-
                                               | sich das zu bear-  | men wurde und      | men wurde und
                                               | beitenende Demo-   | keines der aus-    | keines der aus-
                                               | material befindet  | füllbaren Felder   | füllbaren Felder
                                               | 3. Demomaterial    | mehr leer ist +    | mehr leer ist +
                                               | auswählen          | nach Klick auf     | nach Klick auf
                                               | 4. Auf Bearbeiten  | Speichern wird     | Speichern wird
                                               | klicken            | man zurück auf     | man zurück auf
                                               | 5. Änderungen      | die demospezi-     | die demospezi-
                                               | vornehmen          | fische "Demoma-    | fische "Demoma-
                                               | (Datei oder Be-    | terial verwalten"  | terial verwalten"
                                               | schreibung ändern) | Seite geleitet,    | Seite geleitet,
                                               | 6. Speichern       | wo das Demo-       | wo das Demo-
                                               | klicken            | material erfolg-   | material erfolg-
                                                                    | reich aktualisiert | reich aktualisiert
                                                                    | wurde              | wurde
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
13   | Bearbeiten von     | Demomaterial wurde | 1. Über Burgermenü | Zurückleitung zum  | Zurückleitung zum  Ja
     | Demomaterial       | hinzugefügt        | auf "Demomaterial  | demospezifischen   | demospezifischen
     | abbrechen                               | verwalten" klicken | "Demomaterial ver- | "Demomaterial ver-
                                               | 2. Art des Demo-   | walten" + entspre- | walten" + entspre-
                                               | materials aus-     | chendes Demo-      | chendes Demo-
                                               | wählen, in welchem | material wurde     | material wurde
                                               | sich bereits       | nicht verändert    | nicht verändert
                                               | Demomaterial be-
                                               | findet
                                               | 3. Demomaterial
                                               | auswählen
                                               | 4. Auf Bearbeiten
                                               | klicken
                                               | 5. Änderungen
                                               | vornehmen
                                               | (Datei oder Be-
                                               | schreibung ändern)
                                               | 6. Abbrechen
                                               | klicken
==== ==================== ==================== ==================== ==================== ==================== =========== ============

==== ==================== ==================== ==================== ==================== ==================== =========== ============
Funktion: Szenarien verwalten
======================================================================================================================================
Szenario bearbeiten
--------------------------------------------------------------------------------------------------------------------------------------
Nr.  Szenario             Voraussetzung        Testfall             Soll-Output          Ist-Output           Best.       Anmerkung
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
14   | Neues leeres                            | 1. Über Burgermenü | Speichern-Button   | Speichern-Button   Ja
     | Szenario erstellen                      | "Szenarien ver-    | bleibt so lange    | bleibt so lange
                                               | walten" auswählen  | ausgegraut und     | ausgegraut und
                                               | 2. Erstellen       | damit nicht klick- | damit nicht klick-
                                               | klicken            | bar, bis Titel und | bar, bis Titel und
                                               | 3. Titel und Be-   | Beschreibung aus-  | Beschreibung aus-
                                               | schreibung aus-    | gefüllt wurden     | gefüllt wurden
                                               | füllen
                                               | 4. Erstellen
                                               | klicken
                                               | 5. Speichern
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
15   | Erstellen eines                         | 1. Über Burgermenü | automatische Zu-   | automatische Zu-   Ja
     | neuen Szenarios                         | "Szenarien ver-    | rückleitung zu     | rückleitung zu
     | abbrechen                               | walten" auswählen  | "Szenarien ver-    | "Szenarien ver-
                                               | 2. Erstellen       | walten" + entspre- | walten" + entspre-
                                               | klicken            | chendes Szenario   | chendes Szenario
                                               | 3. Titel und Be-   | wird nicht auf-    | wird nicht auf-
                                               | schreibung aus-    | gelistet           | gelistet
                                               | füllen
                                               | 4. Erstellen
                                               | klicken
                                               | 5. Abbrechen
                                               | klicken
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
16   | Szenario löschen   | bestehendes        | 1. Über Burgermenü | automatische Zu-   | automatische Zu-   Ja
                          | Szenario           | "Szenarien ver-    | rückleitung zu     | rückleitung zu
                                               | walten" auswählen  | "Szenarien ver-    | "Szenarien ver-
                                               | 2. bestehendes     | walten" + entspre- | walten" + entspre-
                                               | Szenario auswäh-   | chendes Szenario   | chendes Szenario
                                               | len                | wird nicht auf-    | wird nicht auf-
                                               | 3. Bearbeiten      | gelistet           | gelistet
                                               | klicken
                                               | 4. Löschen klicken
                                               | 5. Löschen bestä-
                                               | tigen
==== ==================== ==================== ==================== ==================== ==================== =========== ============

==== ==================== ==================== ==================== ==================== ==================== =========== ============
Phasen verwalten
--------------------------------------------------------------------------------------------------------------------------------------
Nr.  Szenario             Voraussetzung        Testfall             Soll-Output          Ist-Output           Best.       Anmerkung
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
17   | Phase hinzufügen   | bestehendes        | 1. Über Burgermenü | Neu erstellte      | Neu erstellte      Ja
                          | Szenario           | "Szenarien ver-    | Phase wird nun     | Phase wird nun
                                               | walten" auswählen  | unter Phasen in    | unter Phasen in
                                               | 2. bestehendes     | "Szenario bear-    | "Szenario bear-
                                               | Szenario auswäh-   | beiten" aufge-     | beiten" aufge-
                                               | len                | listet und wurde   | listet und wurde
                                               | 3. Bearbeiten      | somit erfolgreich  | somit erfolgreich
                                               | klicken            | hinzugefügt        | hinzugefügt
                                               | 4. Auf "+ Phase"    
                                               | klicken
                                               | 5. Titel für Phase
                                               | vergeben
                                               | 6. Erstellen
                                               | klicken
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
18   | Phase mit Gerät    | 1. bestehendes     | 1. Über Burgermenü | nach automatischer | nach automatischer Ja          | Eine Phase
     | und Demomaterial   | Szenario           | "Szenarien ver-    | Zurückleitung zu   | Zurückleitung zu               | kann und
     | befüllen und       | 2. bestehende      | walten" auswählen  | "Szenario bearbei- | "Szenario bearbei-             | soll auch
     | speichern          | Phase              | 2. bestehendes     | ten" ist bei er-   | ten" ist bei er-               | gespei-
                          | 3. min. 1 Gerät    | Szenario auswäh-   | neuter Bearbeitung | neuter Bearbeitung             | chert wer-
                          | wurde hinzugefügt  | len                | derselben Phase    | derselben Phase                | den kön-
                          | 4. min. 1 Demo-    | 3. Bearbeiten      | das entsprechende  | das entsprechende              | nen, wenn
                          | material wurde     | klicken            | Gerät und Demo-    | Gerät und Demo-                | kein ge-
                          | hinzugefügt        | 4. Auf Bearbeiten  | material aufge-    | material aufge-                | tespezifi-
                                               | neben bestehender  | listet + Szenario  | listet + Szenario              | sches
                                               | Phase klicken      | kann nach Hinzu-   | kann nach Hinzu-               | Demoma-
                                               | 5. + Gerät aus-    | fügen einer Phase  | fügen einer Phase              | terial
                                               | wählen             | unter "Szenario    | unter "Szenario                | ausgewählt
                                               | 6. Gerätetyp aus-  | bearbeiten" ge-    | bearbeiten" ge-                | wurde
                                               | wählen             | speichert werden   | speichert werden
                                               | 7. Gerät wählen    | durch Klick auf    | durch Klick auf
                                               | 8. Unter Demo-     | Speichern-Button   | Speichern-Button
                                               | material den "+"-
                                               | Button klicken
                                               | 9. Demomaterial-
                                               | typ auswählen
                                               | 10. Demomaterial
                                               | auswählen
                                               | 11. Anwenden
                                               | klicken
                                               | 12. Nach Zurück-
                                               | leitung zu "Sze-
                                               | nario bearbeiten"
                                               | auf Speichern drücken
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
19   | Innerhalb einer    | 1. bestehendes     | 1. Über Burgermenü | Innerhalb einer    | Innerhalb einer    Nein
     | Phase mehrmals     | Szenario           | "Szenarien ver-    |Phase sind bereits  | Phase lässt sich
     | dasselbe Gerät     | 2. bestehende       walten" auswählen   | hinzugefügte Ge-   | dasselbe Gerät
     | hinzufügen         | Phase              | 2. bestehendes     | räte ausgegraut    | mehrmals aus-
                          | 3. min. 1 Gerät    | Szenario auswäh-   | und damit nicht    | wählen
                          | wurde hinzugefügt  | len                | mehr auswählbar
                                               | 3. Bearbeiten
                                               | klicken
                                               | 4. Auf Bearbeiten
                                               | neben bestehender
                                               | 5. + Gerät aus-
                                               | wählen
                                               | 6. Gerätetyp aus-
                                               | wählen
                                               | 7. Gerät wählen
                                               | 8. + Gerät aus-
                                               | wählen
                                               | 9. denselben Ge-
                                               | rätetyp auswählen
                                               | 10. dasselbe Ge-
                                               | rät auswählen
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
20   | Innerhalb einer    | 1. bestehendes     | 1. Über Burgermenü | dasselbe Demo-     | dasselbe Demo-     Ja          | Ein Hin-
     | Phase an einem Ge- | Szenario           | "Szenarien ver-    | material wird      | material wird                  | weis an 
     | rät mehrmals das-  | 2. bestehende      | walten" auswählen  | nicht nochmals     | nicht nochmals                 | den User,
     | selbe Demomaterial | Phase              | 2. bestehendes     | dem Gerät hinzuge- | dem Gerät hinzuge-             | dass das
     | hinzufügen         | 3. min. 1 Gerät    | Szenario auswäh-   | fügt               | fügt                           | Material
                          | wurde hinzugefügt  | len                                                                      | bereits
                          | 4. min. 1 Demo-    | 3. Bearbeiten kli-                                                       | hinzuge-                                    
                          | material wurde     | cken                                                                     | fügt wurde
                          | hinzugefügt        | 4. Auf Bearbeiten                                                        | fehlt
                                               | neben bestehender
                                               | Phase drücken
                                               | 5. + Gerät aus-
                                               | wählen
                                               | 6. Gerätetyp aus-
                                               | wählen
                                               | 7. Gerät wählen
                                               | 8. +-Icon neben
                                               | entsprechendem
                                               | Gerät klicken
                                               | 9. Demomaterial-
                                               | typ auswählen
                                               | 10. Demomaterial
                                               | auswählen
                                               | 11. +-Icon unter
                                               | hinzugefügtem 
                                               | Demomaterial an-
                                               | klicken
                                               | 12. denselben
                                               | Demomaterialtyp
                                               | auswählen
                                               | 13. dasselbe De-
                                               | momaterial aus-
                                               | wählen
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
21   | Phasenbearbeitung  | 1. bestehendes     | 1. Über Burgermenü | Bei erneutem Be- | Bei erneutem Be-     Nein
     | abbrechen          | Szenario           | "Szenarien ver-    | arbeiten der-    | arbeiten der-
                          | 2. bestehende      | walten" auswählen  | selben Phase     | selben Phase
                          | Phase              | 2. bestehendes     | wurde das zu-    | wurde das zu-
                          | 3. min. 1 Gerät    | Szenario auswäh-   | nächst hinzuge-  | nächst hinzuge-
                          | wurde hinzugefügt  | len                | fügte Gerät      | fügte Gerät dennoch
                                               | 3. Bearbeiten      | nicht hinzuge-   | hinzugefügt und ist
                                               | klicken            | fügt und ist     | aufgelistet, die
                                               | 4. Auf Bearbeiten  | somit nicht      | Veränderung wurde
                                               | neben bestehender  | aufgelistet      | also gespeichert
                                               | Phase drücken
                                               | 5. + Gerät aus-
                                               | wählen
                                               | 6. Gerätetyp aus-
                                               | wählen
                                               | 7. Gerät wählen
                                               | 8. Auf Abbrechen
                                               | drücken
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
22   | Phase löschen      | 1. bestehendes     | 1. Über Burgermenü | automatische Zu-   | automatische Zu-   Ja
                          | Szenario           | "Szenarien ver-    | rückleitung zu     | rückleitung zu
                          | 2. bestehende      | walten" auswählen  | "Szenario bear-    | "Szenario bear-
                          | Phase              | 2. bestehendes     | beiten + ent-      | beiten + ent-
                                               | Szenario auswäh-   | sprechende         | sprechende
                                               | len                | Phase wurde ge-    | Phase wurde ge-
                                               | 3. Bearbeiten      | löscht und ist     | löscht und ist
                                               | klicken            | somit nicht mehr   | somit nicht mehr
                                               | 4. Auf Bearbeiten  | aufgelistet        | aufgelistet
                                               | neben bestehender
                                               | Phase drücken
                                               | 5. Auf Löschen
                                               | drücken
                                               | 6. Löschen
                                               | bestätigen
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
23   | Änderungen in      | 1. bestehendes     | 1. Über Burgermenü | automatische Zu-   | automatische Zu-   Nein
     | "Szenario bearbei- | Szenario           | "Szenarien ver-    | rückleitung zu     | rückleitung zu
     | ten" verwerfen     | 2. bestehende      | walten" auswählen  | "Szenarien ver-    | "Szenarien ver-
     | (durch Abbruch der | Phase              | 2. bestehendes     | walten" + bei      | walten" + bei
     | Bearbeitung), wenn | 3. min. 1 Gerät    | Szenario auswäh-   | erneutem Bear-     | erneutem Bear-
     | eine Änderung in   | wurde hinzugefügt  | len                | beiten des ent-    | beiten des ent-
     | "Phase bearbeiten"                      | 3. Bearbeiten      | sprechenden        | sprechenden
     | vorgenommen wurde                       | klicken            | Szenarios und Be-  | Szenarios und Be-
                                               | 4. Auf Bearbeiten  | arbeitung der      | arbeitung der
                                               | neben bestehender  | entsprechenden     | entsprechenden
                                               | Phase drücken      | Phase wurde die    | Phase wurde die
                                               | 5.Beliebige Ände-  | vorgenommene Än-   | vorgenommene Än-
                                               | rung vornehmen     | derung nicht       | derung über-
                                               | (z.B. Gerät hin-   | übernommen         | nommen
                                               | zufügen oder
                                               | löschen)
                                               | 6. Anwenden
                                               | klicken
                                               | 7. In "Szenario
                                               | bearbeiten" auf
                                               | Abbrechen klicken
==== ==================== ==================== ==================== ==================== ==================== =========== ============

==== ==================== ==================== ==================== ==================== ==================== =========== ============
Funktion: Szenario abspielen
======================================================================================================================================
Nr.  Szenario             Voraussetzung        Testfall             Soll-Output          Ist-Output           Best.       Anmerkung
---- -------------------- -------------------- -------------------- -------------------- -------------------- ----------- ------------
24   | Ansteuerung eines  | 1. bestehendes     | 1. Auf Startseite  | Während ein Gerät  | Während ein Gerät  Ja
     | anderen Geräts,    | Szenario           | Szenario auswählen | bereits läuft und  | bereits läuft und
     | während ein Gerät  | 2. bestehende      | "Szenario auswäh-  | die Steuerung      | die Steuerung
     | bereits läuft      | Phase mit min. 2   | len"               | aktiv ist, kann    | aktiv ist, kann
                          | Geräten inkl.      | 2. Start klicken   | man nicht zwischen | man nicht zwischen
                          | Demomaterial       | 3. Gerät auswählen | Geräten wechseln.  | Geräten wechseln.
                          | 3. min. 2 Geräte   | 4. Play-Button     | Erst nachdem die   | Erst nachdem die
                          | wurden hinzugefügt | drücken            | Steuerung aus-     | Steuerung aus-
                          | 4. min. 1 Demo-    | 5. andere Geräte   | geschaltet wurde,  | geschaltet wurde,
                          | material wurde     | anklicken          | kann man zwischen  | kann man zwischen
                          | hinzugefügt        | 6. Pause-Button    | ihnen wechseln     | ihnen wechseln
                                               | klicken
                                               | 7. anderes Gerät
                                               | anklicken
==== ==================== ==================== ==================== ==================== ==================== =========== ============



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
•   Um einen Überblick über die Navigation in den unterschiedlichen Unterseiten zu behalten, sind Navigationspfade vorgesehen, die zur erhöhten Benutzerfreundlichkeit beitragen und die Bedienung der Anwendung erleichtern.
•   Unterschiedliche Steuerungselemente für unterschiedliche Demomaterialien: Die Steuerungselemente für die Demo-Materialien sind aktuell noch nicht auf die jeweiligen Materialien angepasst, sondern sind für alle Materialien gleich.
    Um die Bedienung der Demo-Materialien zu vereinfachen, sollen die Steuerungselemente für die jeweiligen Materialien angepasst werden.
    So soll beispielsweise die Steuerung für ein Video aus einem anderen Steuerungselement bestehen als die Steuerung für eine Präsentation.
    Genauso sind zusätzliche Steuerungselemente denkbar, wie beispielsweise ein Steuerungselement für die Lautstärke eines Videos.
•    Responsive Design: Die Webanwendung ist aktuell für die Nutzung auf mobilen Endgeräten optimiert, um Demomaterialien ähnlich wie bei einer Fernbedienung leicht bedienen zu können.
    Jedoch ist die Anwendung nicht für die Nutzung auf Tablets oder Desktop-PCs optimiert, was die Bedienung auf diesen Geräten erschwert.
    Um die Anwendung auch auf diesen Geräten nutzbar zu machen, ist ein Responsive Design geplant, welches die Anwendung an die Bildschirmgröße des Endgeräts anpasst.

Weitere UI-Verbesserungen
--------------------------------
•	Unter ``Szenario bearbeiten`` soll unter Auflistung der Phasen eine visuelle Erweiterung hinzugefügt werden, die anzeigt, welche Geräte einer Phase zugeordnet sind. Dies soll die Übersichtlichkeit erhöhen und die Zuordnung von Geräten zu Phasen vereinfachen.
•	Die Reihenfolge der Phasen soll veränderbar sein, um die Erstellung von Szenarien zu vereinfachen. Angedacht ist hierbei ein Drag-and-Drop-Verfahren innerhalb von ``Szenario bearbeiten``.
•	Ebenfalls soll die Reihenfolge der Geräte innerhalb einer Phase veränderbar sein, um auch hier die Erstellung von Szenarien zu vereinfachen. Angedacht ist hierbei ein Drag-and-Drop-Verfahren innerhalb von ``Phase bearbeiten``.
•	Unter ``Szenario bearbeiten`` soll außerdem ein visueller Hinweis angezeigt werden, wenn eine Phase noch leer ist.
•   Die Geräteübersicht soll unter ``Geräte verwalten`` um eine Suchfunktion erweitert werden, um die Suche nach Geräten zu vereinfachen.
•	Bei der Erstellung eines Szenarios unter ``Szenarien verwalten`` soll die Möglichkeit bestehen, ein Szenario zu duplizieren.

Weitere Funktionalitäten
--------------------------------
•   Die Ansteuerung weiterer Gerätekategorien soll implementiert werden. 
    Aktuell ist die Ansteuerung von einer Hololens 1. Gen Brille und eines Flask Servers möglich. 
    Die Ansteuerung von weiteren Gerätekategorien wie beispielsweise Audio-Geräten oder Smart-Home-Geräten soll implementiert werden.



