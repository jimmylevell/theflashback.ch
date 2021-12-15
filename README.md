# Web Projekt - http://theflashback.ch   
[![Publish theflashback docker image](https://github.com/jimmylevell/theflashback.ch/actions/workflows/action.yml/badge.svg?branch=master)](https://github.com/jimmylevell/theflashback.ch/actions/workflows/action.yml)  

## Prokjektidee  
Es soll eine statische Webseite für die Jugendband The Flashback entworfen werden. Momentan verfügt die Band nur über eine Facebook Fanpage (https://www.facebook.com/theflashbackbandch/).  
Die Webseite soll in ihrer ersten Version über keine Programmierlogik verfügen.  
Allfällige Fotos oder Texte werden aus der Facebook Page oder aus dem Band-Archiv entnommen.  

## Url
In ihrer finalen Form wird die Webseite auf http://Theflashback.ch publiziert.  
Als Abgabe wird die Webseite aber auch auf dem Dublin Server http://dublin.zhaw.ch/~leveljam/web1/miniProj/ publiziert.  
Für die Bewertung können beide Urls verwendet werden.

## Beteiligte
Folgende Personen haben an der Entwicklung dieser Webseite mitgearbeitet:
* Murat Özçetin  
* James Levell  

Für das CSS und HTML wurde kein Framework verwendetet. Lediglich für das Laden der Unterseiten wurde ein JavaScrpit von W3schools verwendet (Quelle im Code vermerkt).   

## Anfoderungen
Die Webseite soll die wichtigsten Informationen der Band rasch und übersichtlich darstellen. Es sollen folgende Informationen einfach und übersichtlich präsentiert werden:
* Information über die Band
* Möglichkeit die Band zu kontaktieren mit einigen Pflichtfeldern
* Eine Diskographie über die Songs, welche sich auf Youtube befinden
* Eine Liste von den nächsten Auftritten soll ersichtlich sein. Auch sollen die bereits vergangenen Auftritte angezeigt werden können.

## Inhalt / Struktur
### Logischer Inhalt
Nachfolgend wird der logische Aufbau der Webseite kurz vorgestellt. Dies ist ergänzend zum MarkUp im \_Doku Ordner. Die Webseite wird als singlepage organisisert. Dies bedeutet, dass alle Inhalt sich einer Webseite befinden und durch alle Inhalte gescrollt werden kann. Mithilfe der Navigationsleiste kann zu den jeweiligen Themen gesprungen werden.

*	Startseite / Home  
 *	Band-Foto & Beschreibung kurz & knapp  
*	About  
 *	Biographie: kurze Vorstellung der einzelnen Mitglieder  
 * 	Kontaktformular: Mit einigen Pflichtfeldern  
*	Nächsten Auftritte  
 * Eine Webseite, welcher die nächsten Auftritte angezeigt werden.  
*	Repertoire  
 *	Eine Webseite, welche die Songs von Youtube chronologisch darstellt.  

### Dateistruktur
Nachfolgend wird die Ordnerstruktur vorgestellt.

* index.html - Hauptfile, welches alle anderen Seiten mithilfe von JS lädt
* readme.md - Dokumenation der Webseite, welche auch auf GitHub angezeigt wird
* \\\_docu - Ablage für die Dokumentation der Webseite
* \css - CSS Files
* \font - Schriften
* \img - Fotos
 * \aboutUs - Fotos der einzelnen Bandmitglieder
 * \gallery - Gallery Fotos, jeder Auftritt wird in einem einzelnen Unterordner gespeichert
* \sites - Alle Seiten, welche von index.html geladen werden befinden sich hier
* \js - JavaScripts

## Bemerkungen
### Validierung der Webseite
Die Webseite wurde validiert. Folgende Fehler wurden aktzeptiert:
* Attribute w3-include-html not allowed on element article at this point.
 * Dieser Tag sollte mit einem data- Attribut ersetzt werden. Jedoch wird dieser Tag vom Script vom w3schools vorgegeben und aus diesem Grund nicht angepasst.
* Article lacks heading. Consider using h2-h6 elements to add identifying headings to all articles.
 * in den gemeldeten Abschnitten wäre ein Head überflüssing
