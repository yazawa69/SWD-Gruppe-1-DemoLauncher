==============
Read the Docs
==============

.. note::

   Dokumentation noch in Bearbeitung


Allgemeine Informationen
================================
Diese Dokumentation wurde mit `Read the Docs <https://readthedocs.org/>`_ erstellt. 
Hier werden nur projektspezifische Anpassungen beschrieben, die für die Erstellung 
der Dokumentation notwendig sind. Für weitere Informationen gibt es das offizielle 
`Tutorial <https://docs.readthedocs.io/en/stable/tutorial/index.html#>`_.

Relevante Dateien
================================
Alle relevanten Dateien befinden sich im Ordner ``docs``. Die Dateien sind wie folgt:

* ``docs/conf.py``: Konfigurationsdatei für Sphinx
* ``docs/.readthedocs.yaml``: Konfigurationsdatei für Read the Docs
* ``docs/index.rst``: Hauptdatei der Dokumentation
* ``docs/user_manual.rst``: Nutzerhandbuch
* ``docs/frontend.rst``: Frontend-Dokumentation
* ``docs/backend.rst``: Backend-Dokumentation
* ``docs/rts.rst``: Informationen über Read the Docs

Die Konfigurationsdateien ``conf.py`` und ``.readthedocs.yaml`` sollten nicht mehr 
verändert werden, da sie bereits für die Erstellung der Dokumentation angepasst wurden.

In den .rst-Dateien (reStructuredText) werden die Inhalte der Dokumentation geschrieben.
Das Frontend-Team sollte also die Datei ``frontend.rst`` bearbeiten und das Backend-Team 
die Datei ``backend.rst``. Jede Datei stellt dabei ein eigenes Kapitel in der Dokumenation 
dar.

Die Dokumentstruktur wird durch einen 
`TOC Tree <https://sphinx-doc-zh.readthedocs.io/en/latest/markup/toctree.html>`_ festgelegt, 
der die Beziehungen zwischen den einzelnen Dateien der Dokumentation herstellt. Diese werden 
in der Datei ``index.rst`` festgelegt. Hier werden die einzelnen Dokumente eingebunden und 
die Reihenfolge festgelegt. Soll ein neues Kapitel hinzugefügt werden, muss also eine neue 
.rst-Datei erstellt werden und diese in der Datei ``index.rst`` eingebunden werden. Die 
Reihenfolge der Einbindung bestimmt dabei die Reihenfolge der Kapitel in der Dokumentation.

Formatierung mit Sphinx und reStructuredText
============================================

Absätze
********
Absätze werden durch eine Leerzeile getrennt.

Inline Markup
**************

* ein Sternchen um Text: *kursiv*
* zwei Sternchen um Text: **fett**
* zwei Backquotes um Text: ``code``

Listen
**************
Vor und nach Listen muss immer eine Leerzeile stehen. Nicht nummerierte Listen werden mit einem Sternchen 
eingeleitet. Nummerierte Listen können mit einer Zahl + . oder mit #. eingeleitet werden.::


    * Erstes Element der Liste
    * Zweites Element der Liste

    1. Erstes Element der Liste
    2. Zweites Element der Liste

    #. Erstes Element der Liste
    #. Zweites Element der Liste

ergibt:

* Erstes Element der Liste
* Zweites Element der Liste

1. Erstes Element der Liste
2. Zweites Element der Liste

#. Erstes Element der Liste
#. Zweites Element der Liste

Verschachtelte Listen werden weiter eingerückt, müssen aber immer durch eine Leerzeile von 
der übergeordneten Liste getrennt werden.::


    * Erstes Element der Liste
    * Zweites Element der Liste

        * Erstes Element der verschachtelten Liste
        * Zweites Element der verschachtelten Liste

    * Drittes Element der Liste
    * Viertes Element der Liste

ergibt:

* Erstes Element der Liste
* Zweites Element der Liste

    * Erstes Element der verschachtelten Liste
    * Zweites Element der verschachtelten Liste

* Drittes Element der Liste
* Viertes Element der Liste

Literalblöcke
**************
Literalblöcke werden durch zwei Doppelpunkte im vorherigen Absatz eingeleitet und müssen 
eingerückt und durch jeweils eine Leerzeile von umgebenden Absätzen getrennt sein.

Hyperlinks
**************
Hyperlinks werden mit einem Backquote um den Linktext und Winkelklamern um die URL 
eingeleitet, zum Beispiel::

    `Hochschule Furtwangen <https://www.hs-furtwangen.de/>`_

ergibt: `Hochschule Furtwangen <https://www.hs-furtwangen.de/>`_.

Guilabel
**************
Mit Guilabel können Buttons, Menüs, etc. gekennzeichnet werden. Ein Guilabel wird mit 
:guilabel: eingeleitet und der Text wird von Backquotes umschlossen, zum Beispiel::

    :guilabel:`Button`

ergibt: :guilabel:`Button`.

Überschriften in Sphinx
================================
Überschriften werden erstellt, indem die Überschrift mit einem Satzzeichen unterstrichen 
(bei Kapitel- und Abschnittsüberschrift auch überstrichen) wird. Die Anzahl der Satzzeichen 
muss dabei mindestens so groß sein wie die Länge der Überschrift. 
Bisher verwendete Überschriften:

* Kapitelüberschrift: = über und unter Text
* Abschnittsüberschrift: # über und unter Text
* Unterabschnittsüberschrift: = unter Text
* Unterunterabschnittsüberschrift: * unter Text
* Absatzüberschrift: - unter Text

Die Art der Überschriften beschreibt auch die Struktur innerhalb eines Kapitels. 

Dokumentation aktualisieren
================================
Wurden Änderungen an der Dokumentation vorgenommen, müssen diese zunächst in das 
GitHub-Repository gepusht werden. Anschließend muss die Dokumentation auf Read the Docs 
neu gebaut werden. Dafür ist ein Account auf Read the Docs notwendig (am besten über 
GitHub anmelden, da die beiden Accounts verknüpft sein müssen). Nach dem Login 
kann über :guilabel:`Projekt importieren` das GitHub-Repository ausgewählt werden. 
Anschließend kann das Projekt über :guilabel:`Meine Projekte` ausgewählt und über 
:guilabel:`Erstellungsprozesse (Builds)` und dann :guilabel:`Version erstellen` 
die Dokumentation neu gebaut werden (dauert ca. 30 Sekunden). Die Dokumentation kann anschließend über 
:guilabel:`Dokumentation ansehen` oder über diesen 
`Link <https://softwaredesign-frontend.readthedocs.io/de/latest/index.html>`_ 
aufgerufen werden. Das Aktualisieren der Webseite kann einige Minuten dauern.
Ganz unten auf der Webseite steht unter "Revision" die ID (SHA) des letzten Commits, 
die mit der ID des letzten Commits im GitHub-Repository verglichen werden kann. 
Ist diese ID nicht aktuell, wurde die Dokumentation noch nicht aktualisiert.




