==============
Nutzerhandbuch
==============

##########################
Allgemeine Informationen
##########################
Unsere Anwendung ermöglicht das Erstellen, Bearbeiten und Abspielen von Szenarien, 
die aus einer oder mehreren Phasen bestehen. Zu jeder Phase können beliebig viele 
Geräte hinzugefügt werden, die wiederum verschiedene Demomaterialien besitzen können.

Szenarien
================================
Das Herzstück der Anwendung bilden **Szenarien**. Diese können automatisch **Geräte** starten 
und bei bedarf Szenarien oder Medien (**Demomaterial**) auf diesen laden. Außerdem ermöglichen sie eine 
Steuerung dieser Medien.

Szenarien werden passend zu einem bestimmten Zweck erstellt und sind immer dann nützlich, 
wenn mehr als ein Gerät genutzt werden soll oder Medien auf einem Gerät gesteuert werden 
sollen.

Beispiel Demonstration VR-Brille: Es soll zur Demonstration eine Szene in einer VR-Brille 
gezeigt werden. Damit aber auch Außenstehende davon profitieren können, sollen zusätzliche 
Informationen auf einem nebenstehenden Bildschirm gezeigt werden. Bei einer manuellen 
Steuerung müssen also zunächst die VR-Brille sowie der Bildschirm gestartet werden. Nach dieser 
Startphase setzt jemand die VR-Brille auf, um dort die gewünschte Szene zu laden. Außerdem muss 
die PDF-Datei mit Zusatzinformationen auf dem Bildschirm geladen und geöffnet werden. Erst dann kann die 
eigentliche Demonstration der Szene beginnen - doch was passiert, wenn ein Fehler auftritt und die 
Szene neu geladen werden muss? Der zuständige Labormitarbeiter muss die Demonstration unterbrechen, 
um die Szene manuell neu zu laden.

Szenarien vereinfachen diesen gesamten Ablauf: Die beiden gewünschten Geräte, die VR-Brille und der 
Bildschirm, werden zu einem Szenario hinzugefügt. Anschließend wird das gewünschte Demomaterial für 
beide Geräte festgelegt - die Szene für die VR-Brille und die PDF-Datei für den Bildschirm. Anschließend 
wird das Szenario gespeichert und kann nun gestartet werden. Beim Start werden die beiden benötigten 
Geräte automatisch angeschaltet und sobald dieser Vorgang abgeschlossen ist, wird das entsprechende 
Demomaterial geladen. Die Demonstration ist also nun ohne manuelle Eingriffe bereit. Und falls es zu 
Problemen kommt und die Szene neugeladen werden muss, kann das einfach über einen Klick in unserer 
Anwendung geschehen. Ebenso kann innerhalb der PDF-Datei auf die nächste oder vorherige Seite geschaltet 
werden.

Bei komplexeren Szenarien mit mehr Geräten können außerdem verschiedene **Phasen** angelegt werden, um den 
Ablauf der Demonstration zu vereinfachen.


Phasen
================================
Ein Szenario hat immer mindestens eine **Phase**. Dies ist ausreichend für simple Szenarien mit wenigen Geräten 
oder Demomaterial. Sind jedoch mehr Geräte vorhanden oder möchte man innerhalb einer Demonstration mehrere 
Geräte oder Demomaterialien gleichzeitig starten, kann man dies über Phasen vereinfachen. Möchte man also 
zuerst eine Szene auf einer VR-Brille zeigen und anschließend Informationen darüber auf zwei verschiedenen 
Bildschirmen anzeigen, kann man dafür zwei Phasen erstellen: Die erste startet die VR-Brille und öffnet die 
entsprechende Szene, die zweite startet die beiden Bildschirme und öffnet darauf die gewünschten Dateien.
Der Nutzer kann dabei entscheiden, wann er in die nächste Phase wechseln möchte. In einer Phase nicht 
benötigte Geräte werden außerdem automatisch abgeschaltet - in diesem Beispiel ist also in Phase eins nur die 
VR-Brille aktiv, in Phase zwei wird sie abgeschaltet und stattdessen die beiden Bildschirme eingeschaltet.

Geräte
================================
**Geräte** bilden den wesentlichen Bestandteil von Szenarien. Sie müssen zunächst zur Anwendung hinzugefügt werden, 
um später innerhalb eines Szenarios angesteuert werden zu können. Nach dem Hinzufügen können dann innerhalb 
eines Szenarios die gewünschten Geräte ausgewählt werden.

Unterstützte Gerätetypen:

* VR-Brillen
* Bildschirme

Demomaterial
================================
Optional kann innerhalb eines Szenarios auch **Demomaterial** zu bestimmten Geräten hinzugefügt werden. Dies wird 
beim Start des Szenarios automatisch geladen und abgespielt und kann zudem - je nach Art des Demomaterials - 
über die Anwendung gesteuert werden. Ein Gerät kann auch mehr als ein Demomaterial besitzen. Der Nutzer kann 
dann während der Demonstration zwischen den hinzugefügten Demomaterialien wechseln.

Untersützte Dateitypen:

* .pdf
* .mp4

.. note::

   Achtung: Nicht jedes Gerät unterstützt jeden Dateityp. Kompatible Geräte für jeden Dateityp werden in der 
   Anwendung dargestellt.


##########################
Nutzung der Anwendung
##########################


Geräte
================================

Gerät hinzufügen
********************************
Um ein Gerät hinzuzufügen über das Burgermenü zur Seite ``Geräte verwalten`` navigieren und anschließend 
passende Gerätekategorie auswählen. Auf der nächsten Seite nun :guilabel:`neues Gerät hinzufügen` auswählen.
Nun kann ein Titel sowie eine Beschreibung für das Gerät angegeben werden. Das Verbinden des Gerätes mit der 
Anwendung kann beispielsweise über die IP-Adresse erfolgen, dies hängt allerdings von der Art des Geräts ab.
Über den Knopf :guilabel:`Speichern` kann das Gerät gespeichert werden und es wird wieder die Seite 
``Geräte verwalten`` geöffnet.

Gerät bearbeiten
********************************
Um ein bereits vorhandenes Gerät zu bearbeiten ähnlich vorgehen wie beim Hinzufügen: Zuerst zu ``Geräte verwalten``
navigieren und dann die entsprechende Gerätekategorie auswählen. Nun werden bereits vorhandene Geräte von der 
ausgewählten Kategorie angezeigt. Das zu bearbeitende Gerät auswählen und :guilabel:`ausgewähltes Gerät bearbeiten` 
drücken. Hier können nun Titel und Beschreibung des Geräts geändert werden. Abschließend :guilabel:`Speichern` 
drücken und zur Seite ``Geräte verwalten`` zurückkehren.

Gerät löschen
********************************
Ähnlich vorgehen wie bei *Gerät bearbeiten*: Zu ``Geräte verwalten`` navigieren, dann die entsprechende 
Gerätekategorie und schließlich das zu löschende Gerät auswählen. Anschließend :guilabel:`ausgewähltes Gerät bearbeiten` 
drücken. Auf der folgenden Seite befindet sich unten am Bildschirmrand der Knopf :guilabel:`Löschen`, der 
das Gerät entfernen wird.


Demomaterial
================================

Demomaterial hinzufügen
********************************
Über das Burgermenü zur Seite ``Demomaterial verwalten`` navigieren und gewünschtes Dateiformat auswählen. 
Oben werden nun die Gerätekategorien angezeigt, die das gewählte Dateiformat unterstützen und abspielen können.
Um neues Demomaterial hinzuzufügen den Knopf :guilabel:`neues Demomaterial hinzufügen` am unteren Bildschirmrand 
drücken. Nun Kann ein Name und eine Beschreibung für das Material hinzugefügt werden. Über das Uploadfeld 
:guilabel:`Datei hochladen` kann das Demomaterial hochgeladen und schließlich über den Knopf 
:guilabel:`Speichern` gespeichert werden.

Demomaterial bearbeiten
********************************
Zunächst ebenfalls zur Seite ``Demomaterial verwalten`` navigieren und das gewünschte Dateiformat auswählen. 
Aus der Liste in der Mitte des Bildschirms das zu bearbeitende Demomaterial auswählen und unten auf 
:guilabel:`ausgewähltes Demomaterial bearbeiten` klicken. Nun können Name und Beschreibung der Datei 
geändert sowie eine neue Datei hochgeladen werden, die die ursprüngliche Datei ersetzt. 
Abschließend :guilabel:`Speichern` drücken und zur Seite ``Demomaterial verwalten`` zurückkehren.

Demomaterial löschen
********************************
Ähnlich vorgehen wie bei *Demomaterial bearbeiten*: Zu ``Demomaterial verwalten`` navigieren, dann das entsprechende 
Dateiformat und schließlich das zu löschende Demomaterial auswählen. Anschließend 
:guilabel:`ausgewähltes Demomaterial bearbeiten` drücken. Auf der folgenden Seite befindet sich unten am 
Bildschirmrand der Knopf :guilabel:`Löschen`, der das Demomaterial entfernen wird.

Szenarien
================================

Szenario erstellen
********************************
.. note::

   Achtung: Um ein neues Szenario zu erstellen müssen zu verwendende Geräte sowie Demomaterial bereits angelegt sein.

Zur Seite ``Szenarien verwalten`` navigieren und :guilabel:`neues Szenario erstellen` auswählen. Nun müssen zunächst 
ein Titel sowie eine Beschreibung für das Szenario eingegeben werden. Falls beim Abspielen des Szenarios Besonderheiten 
berücksichtigt werden müssen, sollte dies ebenfalls in der Beschreibung angegeben werden. 

Darunter werden die Phasen des Szenarios angezeigt. Bei einfachen Szenarien mit wenigen Geräten reicht eine Phase aus, 
die bereits erstellt wurde. Zusätzliche Phasen können über :guilabel:`⊕ Phase` erstellt werden. Über den Knopf 
:guilabel:`bearbeiten` rechts neben dem Titel der Phase kann diese bearbeitet werden. Nun kann zunächst der Titel 
festgelegt werden.Unter "Elemente" können nun über den Knopf :guilabel:`⊕ Gerät` zunächst Geräte zur Phase 
hinzugefügt werden. Wurde bereits ein Gerät hinzugefügt, kann für dieses Gerät passendes Demomaterial hinzugefügt 
werden. Dafür den Knopf :guilabel:`⊕ Demomaterial` rechts neben dem zu bearbeitenden Gerät drücken und aus der Liste 
das gewünschte Demomaterial auswählen. Demomaterial kann über das kleine :guilabel:`ⓧ` Symbol neben dem Namen des 
Materials wieder aus dem Szenario entfernt werden. Ein Gerät kann über das große :guilabel:`ⓧ` Symbol rechts in der 
Zeile entfernt werden. Nach dem Bearbeiten einer Phase :guilabel:`Speichern` drücken um zurück zur Auswahl über die 
verschiedenen Phasen zu kommen. Ist das Szenario fertig, :guilabel:`Speichern` drücken und zur Seite 
``Szenarien verwalten`` zurückkehren.

Szenario bearbeiten
********************************
Um ein bereits vorhandenes Szenario zu bearbeiten auf der Seite ``Szenarien verwalten`` das zu bearbeitende Szenario 
auswählen und auf :guilabel:`ausgewähltes Szenario bearbeiten` klicken. Hier können nun zunächst Titel und 
Beschreibung des Szenarios geändert werden. Wie beim Erstellen eines Szenarios können darunter Phasen hinzugefügt oder 
bereits vorhandene Phasen bearbeitet werden. 

Beim Bearbeiten einer Phase können über den Knopf :guilabel:`⊕ Gerät` neue Geräte hinzugefügt oder über den Knopf 
:guilabel:`ⓧ` ganz rechts in einer Zeile das entsprechende Gerät gelöscht werden. Ebenso kann über 
den Knopf :guilabel:`⊕ Demomaterial` rechts neben dem zu bearbeitenden Gerät ein neues Demomaterial hinzugefügt oder 
ein bereits vorhandenes über das kleine :guilabel:`ⓧ` Symbol neben dem Namen des Materials gelöscht werden.
Die ganze Phase kann über den Knopf :guilabel:`Löschen` am unteren Bildschirmrand gelöscht oder über 
:guilabel:`Speichern` gespeichert werden.

Beides führt zurück zur Seite ``Szenario bearbeiten``, wo das Szenario am unteren Bildschirmrand entweder gelöscht 
oder gespeichert werden kann. Der Knopf :guilabel:`Abbrechen` führt zurück zur Seite ``Szenarien verwalten``, ohne 
die vorgenommenen Änderungen zu speichern.

Szenario abspielen
********************************
Bereits erstellte Szenarien lassen über die Seite ``Szenarien verwalten`` starten. Dazu zunächst das gewünschte Szenario 
auswählen und :guilabel:`ausgewähltes Szenario starten` drücken. Nun werden einige Informationen zu dem gewählten 
Szenario angezeigt:

* Beschreibung des Szenarios
* Phasen mit Geräten und Demomaterial
:guilabel:`Start` drücken, um das Szenario zu starten.

Szenario läuft
--------------------------------
Folgende Informationen werden nun auf dem Bildschirm angezeigt:

* Titel: Name des Szenarios, das gerade abgespielt wird
* Beschreibung: zuvor festgelegte Beschreibung des Szenarios
* Phase: momentan aktive Phase sowie genauere Informationen zu Geräten und Demomaterial

In dem Feld unter "Phase 1" werden in der linken Spalte die gerade aktiven Geräte angezeigt. In der rechten Spalte wird, 
falls vorhanden, das entsprechende aktive Demomaterial für jedes Gerät angezeigt. Falls ein Gerät nur ein Demomaterial 
besitzt, wird dieses automatisch gestartet. Ist mehr als ein Demomaterial vorhanden, wird unter dem aktiven Demomaterial 
ein Symbol angezeigt, das anzeigt, wie viele zusätzliche Demomaterialien vorhanden sind.
Mit einem Klick auf das Geräte-Icon (linke Spalte) öffnet sich, falls vorhanden, ein Pop-Up-Menü zur Auswahl des 
gerade aktiven Demomaterials.
Je nach Demomaterial gibt es außerdem unterschiedliche Steuerungsmöglichkeiten. Diese öffnen sich mit einem Klick auf das 
gerade aktive Demomaterial.

Steuerungsmöglichkeiten von Demomaterial
-----------------------------------------
Folgende Steuerungsmöglichkeiten werden unterstützt:

* PDF: nächste/vorherige Seite
* Video: 10 Sekunden zurückspulen, pausieren/fortsetzen, 10 Sekunden vorspulen
* VR-Szene: neuladen

Die entsprechenden Möglichkeiten werden auch mit einem Klick auf das Infosymbol in dem Steuerungsfeld angezeigt.

Nächste Phase
--------------------------------
Auf den Pfeil rechts am Bildschirmrand klicken, um in die nächste Phase zu gelangen. Hier muss erneut der Wechsel in 
die nächste Phase bestätigt werden, um versehentliche Wechsel zu vermeiden. Falls vorhanden ist auch ein Wechsel in die 
vorherige Phase durch einen Klick auf den Pfeil links am Bildschirmrand möglich.

Szenario beenden
--------------------------------
Zum Beenden des Szenarios den Knopf :guilabel:`Beenden` am unteren Bildschirmrand gedrückt halten. Im Szenario verwendete 
Geräte werden ausgeschaltet und es öffnet sich die Startseite.

Szenario löschen
********************************
Ähnlich vorgehen wie bei *Szenario bearbeiten*: Zu ``Szenarien verwalten`` navigieren, dann das entsprechende 
Szenario auswählen und schließlich :guilabel:`ausgewähltes Szenario bearbeiten` drücken. Auf der folgenden Seite befindet 
sich unten am Bildschirmrand der Knopf :guilabel:`Löschen`, der das Szenario entfernen wird.
