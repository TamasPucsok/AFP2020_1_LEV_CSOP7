## 1. A rendszer célja

## 2. Projektterv

### 2.1 Projektszerepkörök, felelősségek

Projekt/Teszt Manager: Kovács Máté

Feladata a projektagok közötti kommunikáció szervezése, irányítása.

Scrum master: Győri Zoltán 

Feladata a kommunikáció a csapat tagjaival, az elvégzett és a következő feladatok átbeszélése, akadályok (impediment) feltárása.

Product owner: Oláh Róbert

Feladata Product Backlog kezelése, prioritással látja el a sztorikat és meghatározza az értéküket.

Üzleti szereplők (Stakeholders):

- Megrendelő:
- Kardinál Zsófia

### 2.2 Projektmunkások és felelősségeik

Frontend:

- Győri Zoltán
- Oláh Róbert
- Kardinál Zsófia - felhasználói tesztelés

Backend:

- Győri Zoltán - adatbázis felépétése
- Oláh Róbert - Webdesgin kialakítása
- Pucsok Tamás - adatbázis feltöltése
- Kovács Máté - dokumentáció elkészítése

Tesztelés:

- Győri Zoltán
- Oláh Róbert
- Kardinál Zsófia
- Pucsok Tamás
- Kovács Máté

### 2.3 Ütemterv

| Funkció / Story           | Feladat / Task                      | Prioritás | Becslés | Aktuális becslés | Elteltidő | Hátralévő idő |
| ------------------------- | ----------------------------------- | --------- | ------- | ---------------- | --------- | ------------- |
| Követelmény specifikáció  |                                     | 0         | 12      | 12               | 12        | 0             |
| Funkcionális specifikáció |                                     | 0         | 12      | 12               | 12        | 0             |
| Rendszerterv              |                                     |           | 16      | 16               | 8         | 8             |
| Adattárolás               | Adatmodell megtervezése             | 0         | 4       | 4                | 4         | 0             |
| Adattárolás               | Adatbázis megvalósítása a szerveren | 1         | 1       | 1                | 1         | 0             |
| Honlap                    | Login funkció megvalósítás          | 1         | 4       | 4                | 4         | 0             |
| Honlap                    | Reg. funkció megvalósítása          | 1         | 4       | 4                | 4         | 0             |
| Honlap                    | Admin site elkészítése              | 1         | 4       | 4                | 4         | 0             |
| Honlap                    | Business logic megvalósítása        | 1         | 8       | 8                | 8         | 0             |
| Honlap                    | Hirdetések listázása                | 2         | 4       | 4                | 4         | 0             |
| Website                   | Tesztelés                           | 2         | 16      | 16               | 0         | 16            |

### 2.4 Mérföldkövek

- A prototipus bemutatása
- Az elkészült szoftver átadása

## 3. Üzleti folyamatok modellje

### 3.1 Üzleti szereplők

A rendszert minden felhasználó csak a regisztrációt követően használhatja. A "user" a hírek megtekintésén kívül az időjárás és útvonaltervező modult használhatja. Az "admin" csak a híreket töltheti fel az adatbázisba.

### 3.2 Üzleti folyamatok

Bejelentkezés mindenki számára ugyanolyan lefutású: A ’Belépés’ menüpontra kattintva megjelenik a ’Felhasználó név’ és ’Jelszó’ beviteli űrlap. A mezők kitöltése után a ’Belépés’ gombra kattint a felhasználó. Ha az azonosítás sikeres, akkor a felhasználó belépett és megjelenik a jogosultságának megfelelő oldal. Ha nem sikerül az azonosítás, hibaüzenet jelenik meg.

#### Üzleti folyamatok userek számára:

- User regisztrálása a rendszerben: A még nem regisztrált felhasználó a regisztráció gombra kattint, megadja a tervezett felhasználónevet, e-mail címét és a terveztt jelszavát, amennyiben a megadott felhasználónévvel felhasználó nem szerepel a rendszerben, akkor a felhasználó eddig megadott adatait a rendszer tárolja és tovább lép a következő szintre. A következő oldalon meg kell adni ismét a választani kívánt felhasználónevet, továbbá vezeték és keresztnevét, illetve rangját (user, admin) továbbá nemét. Minden adat megadása kötelező. Amennyiben ez megtörtént, akkor a következő oldalon be kell állítani a hírekkel kapcsolatos preferenciáját 6 választható checkbox segítségével.

#### Üzleti folyamatok adminisztrátor jogosultsággal rendelkező felhasználók számára:

- Adminisztrátor: Első lépésben a userhez hasonlóan regisztrálnia kell, ahol meg kell adnia a saját adatait, illetve hírekkel kapcsolatos preferenciáit. Viszont a regisztráció során a rang kiválasztásánál "admin" opciót kell választania. Ezt követően a bejelentkezés után lehetősége nyílik új hírek regisztrálására, melyhez meg kell adnia a hír címét, url címét és a hír tartalma szerinti kategóriáját. 

### 3.3 Üzleti entitások

- hír

## 4. Követelmények

### 4.1 Funkcionális követelmények

### 4.2 Nemfunkcionális követelmények

### 4.3 Törvényi előírások, szabványok

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

A rendszerünkben két rendszerszereplő csoportot különböztetünk meg. Az egyik a híreket olvasók csoportja. A másik az adminisztrációt végzők csoportja. Az olvasók igénybe veszik a hírportál szolgáltatásait, míg az adminisztrátorok nyilvántartják a híreket és kiszolgálják az olvasókat.

### 5.2 Rendszerhasználati esetek és lefutásaik



### 5.3 Határ osztályok



### 5.4 Menü hierarchiák

**Olvasóként** belépve a rendszerbe a 

**Adminisztrátorként** belépve a rendszerbe a 

### 5.5 Képernyőtervek

A képernyőtervek egy html/css kód használatával megírt prototípus weboldal formájában állnak rendelkezésre, melyeket a leendő felhasználók számára készítettünk el a funkcionális specifikáció részeként, és mivel pozitív fogadtatásra talált, ezért a rendszerterv része is lett. A forrás fájlok a GitHub-ról tölthetőek le, ezt követően lehet megjeleníteni az oldalakat böngészőben. A prototípus nem fed le minden forgatókönyvet, az űrlapok mezői adatok nélkül szerepelnek. A menü rendszerből minden funkcióhoz tartozó képernyőterv user és admin oldalról is elérhetőek.

Főbb oldalak:

- **index.html** kezdőoldal, ami minden felhasználó számára megjelenik
- **signup.php**, **signin.php** regisztráció, lehet adminként és lehet felhasználóként is
- **interests.php** a regisztráció végén jelenik meg, érdeklődési kör kiválasztása
- **home.php** adott felhasználóval bejelentkezett oldal, hírek megjelenítésével
- **home_old.php** adott felhasználóval bejelentkezett oldal, hírek megjelenítése nélkül
- **properties.php** felhasználó személyes adatait lehet beállítani
- **adminsite.php** adminként új hír feltöltése az oldalra
- **push.php** adatbázist tölti fel a formban megadott adatokkal
- **upload.php** adatbázist tölti fel a formban megadott adatokkal
- **upload2.php** adatbázist tölti fel a formban megadott adatokkal
- **logout.php**, a felhasználó kijelentkezése

## 6. Fizikai környezet

### 6.1 Vásárolt szoftverkomponensek és külső rendszerek

Nincsenek vásárolt szoftverkomponensek.

### 6.2 Hardver és hálózati topológia

- Az alkalmazás web platformra készül.
- Internet böngészőn keresztül érhető el a felhasználó felület.
- Szerverhez kapcsolódnak: -- kliens gépek a helyi hálózaton -- interneten bárki számára elérhető honlap

### 6.3 Fizikai alrendszerek

- Webszerver: 80-as porton elérhető HTTP szolgáltatás
- Mysql adatbázis szerver
- Kliens gépek: a követelményeknek megfelelő internet böngésző futtatására alkalmas PC-k.

### 6.4 Fejlesztő eszközök

- XAMPP Server
- Notepad++
- yED Graph Editor

## 8. Architektúrális terv

Az Apache http szerveren futó alkalmazás szolgálja ki webes felületen keresztül a rendszer felhasználóit. A felhasználó felület böngészőben megjelenő html és php oldalak formájában érhető el, ezen keresztül tudják a felhasználók a rendszert használni. Az adatok tárolása a MySql adatbázis szerveren történik.

### 8.1 Architekturális tervezési minta

Az alkalmazás elkészítése során az MVC (Model, View Controller) modellt használjuk.

### 8.2 Az alkalmazás rétegei, fő komponensei, ezek kapcsolatai

A backend a webszereveren fut, a vékony kliens a böngészőből elérhető a felhasználók számára. Adatbázis szerver (Adatbázis) <-------> Webszerver (Üzleti logika) <-------> Kliens (Felhasználói felület)

### 8.3 Változások kezelése

Minden változás lekezelése szerver oldalon történik, a kliens oldalon nincs szükség új komponensek telepítésére.

## 9. Adatbázisterv

**User egyedet** jellemzi:

**Hír egyedet** jellemzi:


### 9.1 Logikai adatmodell

### Egyed-Kapcsolat diagram

[![ER](https://github.com/TamasPucsok/AFP2020_1_LEV_CSOP7/blob/main/Database/images/ER.png)

### Adatbázis séma

[![Relációsémák](https://github.com/TamasPucsok/AFP2020_1_LEV_CSOP7/blob/main/Database/images/relmod.png)]

** Az adatbázis relációs sémái a létrehozás sorrendjében**

A táblák felvételének sorrendjében


### 9.2 Tárolt eljárások

### 9.3 Fizikai adatmodellt legeneráló SQL szkript

**A táblákat létrehozó parancsok**

**Felhasználókat és jogokat létrehozó parancsok**



## 10. Implementációs terv

A webszerveren futó php program tartalmazza az üzleti logikát. A felhasználói felület, ami böngészőben megjelenő weboldalak formájában érhető el HTML, CSS, és JavaScript technológiák felhasználásával készülnek.
MySql adatbázis szervert használunk az adatok tárolására.

### 10.1 Perzisztencia osztályok

### 10.2 Üzleti logika osztályai

### 10.3 Kliens oldal osztályai

## 11. Tesztterv

A tesztelés célja a projekt által leszállított fejlesztés átadás előtti funkcionális tesztelése. A tesztelés során a tesztelők feladata a fejezetbe rögzített tesztesetek futtatása, valamint a futtatási eredmények rögzítése a  jegyzőkönyvben. (Doc/Tesztjegyzokonyv.MD)

A tesztelés során tekintettel arra, hogy a weboldal mögötti adatbázis lokális szervereken fut, javasolt az egyes teszt funkciókat csoportosan tesztelni, illetve  tesztelés során minden tesztelőnek létrehozni felhasználókat és tartalmat a saját adatbázisában.  

A tesztelés során használt kliens hardverek a napjainkban általánosan elterjedt hardverkonfigurációjú PC-k illetve laptopok, melyeken a leggyakrabban használt böngészőkön (Google Chrome, Mozilla Firefox, Microsoft Edge) teszteljük a rendszert az alábbiakban részletezettek szerint. A minimum hardverkonfiguráció: Intel Celeron processzor, 4GB RAM, 128GB HDD, a képernyők felbontása: 1280x1024, 1920x1080.

A tesztelés során az üzleti folyamatokhoz tartozó különböző forgatókönyvek eredményét vizsgáljuk. Amennyiben az elvártnak megfelelő eredményt kapjuk, a teszteset sikeresnek tekinthető, ellenkező esetben a hibát rögzítjük a tesztjegyzőkönyvben. Ezt követően a feljegyzett hibákat javítjuk a szoftverben, és újbóli tesztelésnek vetjük alá a rendszert.

A hibákat az alábbi három kategóriába soroljuk:

Severity1:Kritikus hiba, átvételt meghiúsítja azonnal javítandó

Severity2:Nem kritikus hiba, azonban az átvételt meghiúsítja, átadásig javítandó

Severity3:Alacsony prioritású hiba. Javítás az átadást követő 30 napban szükséges

### 11.1 Tesztesetek

|         Teszteset         | Funkció | Lépés | Feladat                                      | Elvárt eredmény          | Teszteset száma |
| :-----------------------: | ------- | ----- | -------------------------------------------- | ------------------------ | --------------- |
| Lending page- Login Admin | K1      | 1     | Index oldal megnyitása böngészőben           | Oldal megnyitásra került | 1               |
| Lending page- Login Admin | K1      | 2     | Belépés előzetesen rögzített *admin* userrel | Belépés sikeres          | 1               |
| Lending page -Login User  | K1      | 1     | Index oldal megnyitása böngészőben           | Oldal megnyitásra került | 2               |
| Lending page - Login User | K1      | 3     | Belépés előzetesen rögzített *user* userrel  | Belépés sikeres          | 2               |



|        Teszteset        | Funkció | Lépés | Feladat                                                      | Elvárt eredmény                                              | Teszteset száma |
| :---------------------: | ------- | ----- | ------------------------------------------------------------ | ------------------------------------------------------------ | --------------- |
| Lending page- REG Admin | K2      | 1     | Index oldal megnyitása böngészőben és regisztrációra kattintás | Oldal megnyitásra került, regisztrációs oldal megjelenik     | 3               |
| Lending page- REG Admin | K2      | 2     | Regisztrációhoz szükséges adatok bevitele és folyamat véglegesítése | Regisztráció sikeres. Regisztráció után az adatbázisban látható a felhasználó | 3               |
| Lending page- REG USER  | K3      | 1     | Index oldal megnyitása böngészőben és regisztrációra kattintás | Oldal megnyitásra került, regisztrációs oldal megjelenik     | 4               |
| Lending page- REG USER  | K3      | 2     | Regisztrációhoz szükséges kapcsolati adatok bevitele         | Sikeres adatbevitel                                          | 4               |
| Lending page- REG USER  | k3      | 3     | Preferencia checkbox töltés                                  | Dobozok láthatóak, adatbevitel sikeres. Regisztráció után az adatbázisban látható a felhasználó | 4               |

|                 Teszteset                  | Funkció | Lépés | Feladat                                                      | Elvárt eredmény                                              | Teszteset száma |
| :----------------------------------------: | ------- | ----- | ------------------------------------------------------------ | ------------------------------------------------------------ | --------------- |
| Kapcsolati  és érdeklődési adatok megadása | K4-K5   | 1     | Regisztrációs folyamat indítása                              | Oldal megnyitásra került, regisztrációs oldal megjelenik     | 5               |
| Kapcsolati  és érdeklődési adatok megadása | K4-K5   | 2     | Regisztrációhoz szükséges  emailcím beírása                  | Regisztráció után az adatbázisban látható a felhasználó emailcime a beírtaknak megfelelően | 5               |
| Kapcsolati  és érdeklődési adatok megadása | K4-K5   | 3     | Regisztráció során véletlenszerűen kiválasztott érdeklődési körök megadása | Regisztráció után az adatbázisban látható a felhasználó érdeklődési köre az alábbi szabályokkal:  Üres checkbox a regisztráció során -->boolean0  / TEli checkbox a reg. során:boolean1 | 5               |

| Teszteset | Funkció | Lépés | Feladat                                                      | Elvárt eredmény                                     | Teszteset száma |
| :-------: | ------- | ----- | ------------------------------------------------------------ | --------------------------------------------------- | --------------- |
| Belépés 1 | K7-8-9  | 1     | Belépési folyamat indítása                                   | Oldal megnyitásra került, belépési oldal megjelenik | 6               |
| Belépés 1 | K7-8-9  | 2     | Invalid(adatbázisban nem szereplő) user/PW begépelése és belépés | Sikertelen belépés                                  | 6               |
| Belépés 1 | K7-8-9  | 3     | A felhasználó nem megfelelő  belépési kód esetén újra próbálkozhat.  Limit: Nincs | Belépési képernyő ujra látható                      |                 |
| Belépés 2 | K7-8    | 1     | Belépési folyamat indítása                                   | Oldal megnyitásra került, belépési oldal megjelenik | 7               |
| Belépés 2 | K7-8    | 2     | Valid(adatbázisban szereplő) user/PW begépelése és belépés   | Sikeres belépés, a felhasználó a kezdőlapon landol  | 7               |



|  Teszteset   | Funkció | Lépés | Feladat                                                      | Elvárt eredmény           | Teszteset száma |
| :----------: | ------- | ----- | ------------------------------------------------------------ | ------------------------- | --------------- |
| Hírolvasás 1 | K11     | 1     | Belépés után Hírek olvasása a felhasználó által, a hírek címére kattintással | Választott hír megjelenik | 8               |

## 12. Telepítési terv

Fizikai telepítési terv: -Szükség van egy adatbázis szerverre, amely közvetlenül csatlakozik a webszerververhez. -A webszerverre közvetlenül az internetről kapcsolódnak rá a kliensek.

Szoftver telepítési terv: -A szoftver webes felületéhez csak egy ajánlott a böngésző telepítése szükséges ( Google Chrome, Firefox, Opera, Edge) külön szoftver nem kell hozzá.