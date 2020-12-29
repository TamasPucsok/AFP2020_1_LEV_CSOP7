**Híroldal létrehozás projekt**

Üzleti követelmény specifikáció

Verzió: 1.0

2020.11.07

<u>Projekttagok:</u>

- Kardinál Zsófia
- Győri Zoltán
- Oláh Róbert
- Pucsok Tamás
- Kovács Máté

 Funkcionális specifikáció

## 1.   Áttekintés

A projekt során létrehozott, az üzleti megrendelő által meghatározott igények alapján készülő rendszer funkcionalitását az alábbi dokumentumban foglaljuk össze. A megrendelésre ajánlatot a követelményspecifikáció alapján adott a projektcsapat, ennek megfelelően az ott részletezett követelményeket a funkcionális specifikáció foglalja össze. Az esetleges további igények, amelyek a funkcionális specifikáció elfogadása szakaszban jelennek meg, a dokumentumban CR jelzéssel jelöljük (change request) amelyek szállítása nem képezi a projekt jelen szakaszának tárgyát. 

A híroldal egy webböngészőből elérhető oldal, amely lehetővé teszi a látogató számára, hogy a beállított érdeklődési körnek megfelelő híreket böngésszen (core funkció). Személyes preferenciák beállítására a regisztrációs folyamatban van lehetőség. 

A megrendelő bevételeit a hirdetési funkciók biztosítják, ezért a fejlesztés, design kialakítás során biztosítani kell az egyes siteokon a hirdetések elhelyezését. A projektnek nem scopja a hirdetések beillesztése, azonban az oldalon való megjelenítés definiálása, az oldal felkészítése igen. 

Beépülő modulokon keresztül biztosítjuk a nem core szolgáltatások elérhetőségét, tehát ezek fejlesztése nem cél, azonban azok integrálása igen.

## 2.   Jelenlegi helyzet

A projekt célja egy új platform létrehozása, nem egy meglévő site módosítása. Az üzleti igények definiálásában a tervezési szakaszban a projektcsapat (mint megrendelő) meghatározta az elvárt funkcionalitást. 

## 3.   Funkcionális követelmények:

- **Jogosultsági szintek**:

  o  <u>Adminisztrátori jogosultság:</u> Biztosítja a jogosultsággal rendelkező számára, hogy a honlap forráskódjához hozzáférjen, módosításokat hajtson végre a rendszerben és tartalmakat tegyen hozzáférhetővé. Írási/olvasási (R/W) jogokkal rendelkezik a honlap mögöttes adatbázisában közvetlenül az adatbázishoz való hozzáféréssel. 

  o  <u>Olvasási (látogatói) jogosultság:</u> Nem fér hozzá a kódhoz, nem módosíthat a tartalmakon, csak és kizárólag olvasási funkcióval rendelkezik a honlapra vonatkozóan. Az adatbázisban az R/W jogosultság csak saját rekordjára érvényes. Mindkét funkciót csak közvetetten éri el. 

- **Honlap felépítése (látogató):**

  o  <u>Kezdőképernyő:</u> Csak belépésre használható. Tartalmaz képfájl beillesztési lehetőséget (1-5 db), egy felhasználónév és egy jelszó megadására használható szöveges boxot, valamint a belépési kódsor futtatását elindító „belépés” gombot. Egyéb funkciókkal nem rendelkezik

  o  <u>Belépés utáni nyitóképernyő:</u>
  - <u>Érdeklődésnek megfelelő hírek:</u> A sikeres belépést követően lista szerűen megjelennek a felhasználó rekordjában definiált érdeklődési körhöz kapcsolódó hírek. Hírek darabszáma nem korlátozott, az oldal nem statikus, tehát scroll funkció használata megengedett.
  - <u>Időjárás:</u> A honlapon egy külső szolgáltató díjmentes modulja kerül integrálásra. 
  - <u>Útvonaltervező:</u> A honlapon egy külső szolgáltató díjmentes modulja kerül integrálásra.

- **Admin jogok:** 

  o  <u>Hírfeltöltés:</u> Az adminisztrátori joggal lehetőséget biztosítunk hírek megjelenítésére. 

  o  <u>Regisztrációs adatok áttekintése:</u> Megtekinthető az egyes felhasználók regisztráció során megadott adatainak halmaza

  o  <u>Hírek esetében kategória megjelölés:</u> Kategória megjelenítése, amely az adatbázisban ügyfél rekordonként tárolt preferenciákkal való összekapcsolást biztosítja.

- **Oldalakon banner kezelés:** Az üzemeltető számára a bevételeket a hirdetések elhelyezése jelenti. Ezért a fejlesztés során lehetőséget kell biztosítani hirdetések elhelyezésére. Számában nem korlátozott. A projekt jelen fázisában 2 hirdetés/oldal elhelyezésére biztosítunk lehetőséget. 

- **Kapcsolat/jogszabályi és egyéb kötelező tartalmak:** A jogszabályi háttér részletezését a követelmény specifikáció tartalmazza. A szállítónak feladata a kapcsolati adatokra egy oldal létrehozása, jogszabályok megjelenítése, és dokumentum feltöltési hely kialakítása, azonban a jogszabályi megfelelés a feltöltött tartalmak vonatkozásában nem feladat.

## 4.   Követelménylista

Mivel a projekt nem meglévő alapokra építkezik, ezért nem szükséges a jelenlegi üzleti folyamatot implementálni. A követelménylista a megrendelő által készített követelményspecifikáción alapul.
