## 1. A rendszer célja

## 2. Projektterv

### 2.1 Projektszerepkörök, felelősségek

Projekt Manager: Kovács Máté

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

A képernyőtervek egy html/css kód használatával megírt prototípus weboldal formájában állnak rendelkezésre, melyeket a leendő felhasználók számára készítettünk el a funkcionális specifikáció részeként, és mivel pozitív fogadtatásra talált, ezért a rendszerterv része is lett. A forrás fájlok a [prototype](https://github.com/beresgabor76/AFP2020_1_Lev_Csop2/tree/main/Doc/prototype/) GitHub mappából tölthetőek le, ezt követően lehet megjeleníteni az oldalakat böngészőben. A prototípus nem fed le minden forgatókönyvet, az űrlapok mezői általában adatok nélkül szerepelnek, néhány esetben demonstratív jelleggel ki van töltve. Visszajelző üzenetek is csak az újonnan felvett olvasók, könyvtárosok és könyvek, valamint jelszómódosítás esetén vannak. Azonban a menürendszerből minden funkcióhoz tartozó képernyőterv - beviteli űrlapok, listák(demo adatokkal) - elérhetőek.

Főbb oldalak:

- **kezdolap.html**, amely minden felhasználó számára először jelenik meg.
- **belepve_olvaso.html**, amely az olvasó bejelentkezése után érhető el, ez jelenleg nem érhető el a kezdőlapon keresztül.
- **belepve.html**, amely az adminisztrátor könyvtáros bejelentkezése után jelenik meg. Ez a kezdőoldal *Belépés* menüpontján keresztül elérhető.

**Megjegyzések:**

- Adminisztrátori jogosultsággal nem rendelkező könyvtáros menürendszere annyiban tér el a fentitől, hogy a *Könyvtáros* menüpont nem szerepel az oldalán, mint az a Menühierarchia fejezetben is ismertetésre került.
- Az *Egyszerű keresés* és az *Részletes keresés* oldalak elérhetők a kezdőlapról és belépést követően is, azonban a keresés eredménye oldalak a kezdőlapra visznek vissza, megváltozik a menürendszer, ez tekinthető a prototípus hiányosságának, azonban a keresési folyamatot így is demonstrálja a weboldal.

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

Minden változás lekezelése szerver oldalon történik, a kliens oldalon nincs szükség új komonensek telepítésére.

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

A rendszerterv szerint implementált szoftver tesztelésének célja, hogy ellenőrizze az *Üzleti folyamatok modellje* című pontban meghatározott folyamatok helyes, specifikáció szerinti lefutását, valamint hogy a kliens webes felület felhasználóbarát módon jelenik meg, és használható különböző hardver és szoftverkörnyezetben.

A tesztelés során használt kiszolgáló hardverkonfigurációja a telepítés során használt hardverrel kompatibilis, teljesítményben (processzor, operatív memória, háttértár) nem tér el jelentősen. A telepítéshez természetesen az általunk ajánlott konfiguráció kerül beszerzésre a felhasználó könyvtár által.

A tesztelés során használt kliens hardverek a napjainkban általánosan elterjedt hardverkonfigurációjú PC-k illetve laptopok, melyeken a leggyakrabban használt böngészőkön (Google Chrome, Mozilla Firefox, Microsoft Edge) teszteljük a rendszert az alábbiakban részletezettek szerint. A minimum hardverkonfiguráció: Intel Celeron processzor, 4GB RAM, 128GB HDD, a képernyők felbontása: 1280x1024, 1920x1080.

A tesztelés során az üzleti folyamatokhoz tartozó különböző forgatókönyvek eredményét vizsgáljuk. Amennyiben az elvártnak megfelelő eredményt kapjuk, a teszteset sikeresnek tekinthető, ellenkező esetben a hibát rögzítjük a tesztjegyzőkönyvben. Ezt követően a feljegyzett hibákat javítjuk a szoftverben, és újbóli tesztelésnek vetjük alá a rendszert.

### 11.2 Tesztelt üzleti folyamatok adminisztrátorok számára:



**Belépés a rendszerbe:**

**Tesztesetek:**

1. Nem regisztrált felhasználónév-jelszó kombináció. Elvárt eredmény: a rendszer hibaüzenetben jelzi ezt a felhasználó számára.
2. Regisztrált felhasználónév-jelszó kombináció. Elvárt eredmény: a rendszer belépteti az adminisztrátort.

### 11.2.1 Olvasók adminisztrációjának tesztelése:

**A) Olvasó regisztrálása a rendszerben:**

### 11.2.2 Katalógus adminisztrációjának tesztelése:

**A) Új hír regisztrációja:**

### 11.3 Olvasói műveletek tesztelése:

**A) Belépés a rendszerbe:**

**Tesztesetek:**

1. 

## 12. Telepítési terv

Fizikai telepítési terv: -Szükség van egy adatbázis szerverre, amely közvetlenül csatlakozik a webszerververhez. -A webszerverre közvetlenül az internetről kapcsolódnak rá a kliensek.

Szoftver telepítési terv: -A szoftver webes felületéhez csak egy ajánlott a böngésző telepítése szükséges ( Google Chrome, Firefox, Opera, Edge) külön szoftver nem kell hozzá.