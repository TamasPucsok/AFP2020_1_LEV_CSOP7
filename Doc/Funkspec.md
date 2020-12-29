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

Az alábbi táblában **userfield1-n, és warning 1-n részletek a rendszerterv dokumentumban elérhetőek.**

|  **Modul**   | **ID** |        **Funkció**         | **Funkció részletei**                                        |
| :----------: | ------ | :------------------------: | ------------------------------------------------------------ |
|   Érkezés    | K1     |          Belépés           | Az oldal rendelkezik belépési  funkcióval a kezdeti oldalon. A belépési hitelesítés a jelszó-felhasználónév  pár adatbázisból történő validálásán alapul. Tiltás funkció nem kerül  beépítésre  CR1: Meghatározott sikertelen  próbálkozás után tiltás. |
|   Érkezés    | K2     |        Regisztrálás        | Az oldal rendelkezik regisztrálás  funkcióval a kezdeti oldalon. A regisztráció gomb használata közvetlenül a K3  ID funkciót tartalmazó aloldalra irányítja át a felhasználót. |
| Regisztráció | K3     | Új látogatok regisztrálása | Új aloldal, ahol a felhasználó  elindíthatja a regisztrációt. Megadásra kerül a felhasználónév. A **felhasználónév  (user field 1)** az oldalról való tovább lépéskor kerül rögzítésre a mögöttes adatbázisban. A K3-K6 funkciók adatinak bevitele egy oldalon történik. Minden mező írható a látogató által. |
| Regisztráció | K4     | Kapcsolati adatok megadása | E-mail / telefonos elérhetőség rögzítése oldalak közötti navigálás nélkül.  **User field2:email**  **User field3:telefon** |
| Regisztráció | K5     |  Érdeklődési kör megadása  | Érdeklődési kör választása listából Thickbox használata az előre  definiált kategóriákra. Az egyes kategóriákat az ügyfél bepipálhatja, a regisztráció lezárásakor az adatbázisba íródik.  **Userfield4-10: (kategória 1-6)** |
| Regisztráció | K6     |      Személyes adatok      | Személyes adatok megadásának  lehetősége a regisztrációs folyamatban  **Userfield11:Név**  **Userfield12:Születési dátum**  **Regisztráció befejezése gomb:** Az adatbázis rekord létrehozása a gomb használatával. |

 

|    Belépés     |  K7  |               Jelszavas hitelesítés               | Jelszó vizsgálata a belépéskor a  mögöttes adatbázisban a **K1** kritériumoknak megfelelően. |
| :------------: | :--: | :-----------------------------------------------: | ------------------------------------------------------------ |
|    Belépés     |  K8  |       Sikeres / sikertelen belépés kezelése       | Elágazás a folyamatban a  sikeres/sikertelen belépésre. Sikertelen esetén **Warning1.**  Sikeres esetén  átirányítás a **K11**-nek megfelelően. |
|    Belépés     |  K9  | Sikertelen esetén lehetőség az újra próbálkozásra | A felhasználó nem megfelelő  belépési kód esetén újra próbálkozhat.  Limit: Nincs |
|    Belépés     | K10  |        Sikeres esetén kezdőlapra irányítás        | Belépés a megfelelő jelszó-felhasználónév párral sikeres autentikációt követően megtörténik. Kezdőoldal URL a rendszertervben kerül meghatározásra. A kezdőlapon a **userfield 6-10 (preferenciák)**  alapján jelenítünk meg tartalmat. |
| Oldalfunkciók  | K11  |                    Hírolvasás                     | Hírek olvasása a felhasználó által, a hírek címére kattintással. A címek linket tartalmaznak amely a hír oldalára irányítja a felhasználót. |
| Oldalfunkciók  | K12  |               Időjárás megtekintése               | Magyar időjárás adatok megjelenítése.  Beépülő modul, API hívás. Preferáltan accuweather free API. |
| Oldalfunkciók  | K13  |                      Keresés                      | Külső google.com keresés  használata. Integrált megoldással. |
| Oldalfunkciók  | K14  |                  Útvonaltervezés                  | Külső utvonaltervező keresés  használata. Integrált megoldással. |
| Oldalfunkciók  | K15  |                    Impresszum                     | Kapcsolati adatok, törvényi  hivatkozások megjelentése egy külön aloldalon. **Dokumentum csatolási  funkció:**(Admin:R/W; Látogató:R)  **Dokumentum darabszám**:2  **Támogatott formátum:** Docx/pdf. |
| Oldalfunkciók  | K16  |                      Kilépés                      | Belépett  felhasználó kiléphet az oldalról a kilépés  gomb használatával. |
| Admin funkciók | K17  |                       Admin                       | Az admin jogokkal rendelkezők hozzáférnek  az adatokhoz és a 3. pontban részletezetteknek megfelelően kezelhetik. |