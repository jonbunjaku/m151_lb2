# Modul 151 LB2

### Kurzbeschreibung
Dieses Projekt ist eine API die mit PHP umgesetzt ist. Es können User erstellt und gelöscht werden. Für jeden User sind seine Schulnoten eingetragen. Diese kann ein User selbst eintragen. Das Projekt funktioniert ohne Login und ohne Sessions. 

### Architektur
Für dieses Projekt verwenden wir eine MVC Architektur. Da aber am Schluss kein Frontend exisitieren wird, werden also nur das Model und der Controller implementiert. 

![](https://miro.medium.com/proxy/0*Qf1s2lG86MjX-Zcv.jpg)


### Thema 1: Native SQL Statements
#### Use Cases
1. User kann erstellt werden
2. User kann gelöscht werden
3. User können abgefragt werden
4. Note kann erstellt werden
5. Note kann gelöscht werden
6. Noten können abgefragt werden

|Endpoint| Use Case | Request Method |
|---|---|---|
| /user| Create User  |POST|
| /user | Get a User  |GET|
|/user/{userid} | Delete a User  |DELETE|
|/grade|Create Grade for User| POST |
|/grade|Get a Grade| GET|
|/grade/{gradeid}|Delete a Grade of a User|DELETE|

#### ERM
![](m151_erm.png)

In der User Tabelle ist der Vor- und Nachname enthalten.
In der Grade Tabelle ist eine Note mit dem Fach und dem user enthalten.
1 User kann mehrere Grades haben.

### Reflektion
In diesem Projekt konnten wir einige neue Erfahrungen über PHP und APIs sammeln. Wir haben ein Repository auf GitHub angelegt und unser Projekt mit PHP und einer DB aufgesetzt. Das Projekt beinhaltet zwei Themen. Als erstes haben wir eine vorhandene PHP API verwendet und unsere eigenen HTTP Requests und DB Connection eingesetzt. Wir haben ein wenig zu spät begonnen mit dem ersten Teil und waren deshalb ein wenig im Rückstand. Doch unsere HTTP Requests und die DB haben wir fokussiert und gründlich aufgesetzt. So konnten wir wieder ein wenig Zeit gewinnen. Beim zweiten Thema haben wir unser existierendes Projekt mit ORM(Object-Relational Mapping) erweitert. Dazu haben wir das Tool Doctrine verwendet. Doch das Tool hat uns schnell Probleme bereitet. Es war eher kompliziert und hat nicht funktioniert wie wir es wollten. Wir haben uns dann Hilfe geholt und sind wieder vorwärts gekommen. Unser Zeitplan war die grösste Herausforderung. Und dies wurde leider auch schlussendlich eine zu grosse Herausforderung. Wir konnten den ORM nicht implementieren, da wir am letzten Tag bis in die Nacht an einem Error sassen und diesen einfach nicht fixen konnten. Also haben wir beim zweiten Thema nicht den ganzen Auftrag fertig geschafft.
