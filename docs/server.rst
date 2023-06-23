==============
Server
==============

##########################
Einrichtung eines Servers auf BWCloud, SSL-Verschlüsselung mit Nginx und Integration von Laravel mit Git-Repository
##########################

Bericht von Lea
================================

Wir, ich und Vadim, haben uns im Rahmen unseres Projekts erfolgreich daran gemacht, einen Server auf BWCloud einzurichten. Unsere virtuelle Maschine (VM) basierte auf Ubuntu 20.04 als Betriebssystem. Um eine Verbindung zum Server herzustellen, haben wir PuTTYgen verwendet, um das Terminal zu öffnen.

Nachdem die VM einsatzbereit war, haben wir Nginx als Webserver installiert. Nginx ist für seine Leistungsfähigkeit und Skalierbarkeit bekannt und erfüllte somit unsere Anforderungen optimal. Mit Nginx konnten wir unsere Website einfach und effizient hosten.

Um unsere Website über eine Domain erreichbar zu machen, haben wir den DynDNS-Dienst genutzt, um einen Host zu erstellen. Dieser Dienst ermöglicht es uns, dynamische IP-Adressen mit einem Domainnamen zu verknüpfen. Dadurch wird unsere Website unter einer benutzerdefinierten Domain erreichbar.

Sobald der Host eingerichtet war, haben wir uns der Verschlüsselung unserer Website gewidmet. Hierfür haben wir ein Zertifikat über Certbot installiert. Certbot ist ein beliebtes Open-Source-Tool, mit dem kostenlose SSL/TLS-Zertifikate von Let's Encrypt erhalten werden können. Diese Zertifikate gewährleisten eine sichere Kommunikation zwischen dem Server und den Besuchern der Website.

Um das Zertifikat zu installieren und zu konfigurieren, mussten wir einige Änderungen in der Nginx-Konfigurationsdatei (nginx.conf) vornehmen. Dabei haben wir die erforderlichen Anpassungen für SSL/TLS vorgenommen, um eine verschlüsselte Verbindung zu gewährleisten. Dies umfasste das Hinzufügen der Zertifikatsdateien und die Konfiguration der SSL-Protokolle und -Chiffren.

Nachdem alle Schritte abgeschlossen waren, konnten wir unsere Website über HTTPS aufrufen. Die SSL-Verschlüsselung gewährleistet die Sicherheit der übertragenen Daten und schützt die Privatsphäre der Besucher unserer Website.

Zusätzlich zur Servereinrichtung haben wir auch Laravel, ein beliebtes PHP-Framework, auf unserem Server eingerichtet. Laravel ermöglicht es uns, unsere Website effizient zu entwickeln und zu verwalten. Wir haben auch eine Verbindung zu unserem Git-Repository hergestellt, um ein effektives Versionskontrollsystem zu nutzen. Diese Integration erlaubt es uns, Änderungen an unserem Code effizient zu verfolgen, zu verwalten und bereitzustellen.

Der Server war nun betriebsbereit und unsere Website kann sicher über HTTPS aufgerufen werden. Mit Laravel und der Git-Integration sind wir in der Lage, unsere Website effizient zu entwickeln und unseren Codeversionierungsprozess zu optimieren.