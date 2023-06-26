=============
Geräte Steuerung
=============

*************
Flask Server
*************
Damit das Bild der Hololens auf einem Fernseher gestreamt werden kann, wurde ein Raspberry Pi 3b+ dazwischengeschalten.
Wenn nun die Hololens von einem Rezipienten als Gerät in der Laravel Webapp ausgewählt wird, verarbeitet der Laravel Server den Stream
und sendet diesen an den Flask Server, der auf dem Raspberry Pi läuft. Der Raspberry Pi öffnet den Stream in einem Browser und sendet 
das Bild über ein Hdmi-Kabel an den Fernseher.

Der Flask Server ist in Python geschrieben, und startet automatisch beim Start des Raspberry Pi.

Die Methode ``def live_stream_listener():`` wartet auf requests der Laravel Webapp. Sobald Laravel einen Hololens Stream
bereitstellen kann, ruft Laravel diese Methode auf über die ``@app.route('/live-stream-listener')`` Route auf.
In der Methode wird ein Thread gestartet, der ``def get_livestream(device_id):`` aufruft. In dieser Methode wird der Stream
von Laravel requestet und dann in einem Browser tab geöffnet und dargestellt.

Der Flask Server ist unter folgendem Link zu finden: `Flask Server <https://github.com/yazawa69/flask_code/blob/main/flask_test.py/>`_.

