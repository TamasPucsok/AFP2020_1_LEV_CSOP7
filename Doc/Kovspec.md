**Híroldal létrehozás projekt**

Üzleti követelmény specifikáció

Verzió: 1.0

2020.10.29

<u>Projekttagok:</u>

- Kardinál Zsófia
- Győri Zoltán
- Oláh Róbert
- Pucsok Tamás
- Kovács Máté

 Üzleti követelmény specifikáció

## 1.   Áttekintés

A projekt célja egy híroldal létrehozása, amely hirdetési bevételt generál. Mivel a piac jelenleg telített, ezért a híroldal támogatja az érdeklődési körökre bontott, személyes preferenciákon nyugvó hírolvasás lehetőségét. 

Kezdetben a hírek kategorizálásával, regisztráció során megadott preferenciák alapján történő megjelenítéssel (projekt 'scope'), és elemezhető adathalmaz előállítással indul az oldal. 

A tartalom részben saját készítésű, de lehetséges külső hírforrások beillesztése is.

Funkcióit tekintve, minél szélesebb körű, külső szolgáltatások igénybevételét támogató funkciók támogatják, hogy a felhasználók minél több általuk már ismert szolgáltatást elérjenek, ezzel növelve a honlapon töltött időt.

## 2.   Jelenlegi helyzet

A projekt célja egy új platform létrehozása, nem egy meglévő site módosítása. Az üzleti igények definiálásában a tervezési szakaszban a projektcsapat meghatározta az elvárt funkcionalitást. 

A piacon jelenleg tematikus és átfogó híroldalak is nagy számban elérhetőek. Ezen oldalak jellemzően nem igényelnek regisztrációt, és híreiket nem személyes preferenciák alapján jelenítik meg. 

A személyes preferenciákat nélkülöző honlapok alapvetően rövid oldallátogatási időt tudnak elérni magas látogatószám mellett, a tematikus oldalak jellemzője a hosszabb olvasási idő, azonban mindezt alacsonyabb látogatásszám mellett teszik. 

A piacon a kombinált megoldások száma elenyésző, jellemzően csak a közösségi média biztosít hasonló elérést, azonban ott algoritmusok által definiált az érdeklődési kör és nem az olvasó által beállítottakra épül.

## 3.   Elvárt rendszer

Tekintve a honlap jellegét, a híroldalnak képesnek kell lennie hírek megjelenítésére. A kor elvárásainak megfelelően a hírek a szöveges és képes tartalmakon felül videókat, infógrafikákat, egyéb beágyazott tartalmakat kell megjeleníteni a honlapon. A kategorizálás funkció elsődleges fontosságú, tehát hírek szintjén kell kezelni a kategóriákat, és ezeket szűrten megjeleníteni. Az oldal látogatása regisztrációhoz kötött, csak a belépést követően elérhetőek a hírek.

A felhasználók a regisztráció során rögzíthetik az őket érdeklő témaköröket, de fontos, hogy ezen adatokat a későbbiekben is módosíthatják.

A hírolvasási, és szűrt megjelenítési funkciókon felül rendelkeznie kell beépített időjárás megjelenítési, és útvonaltervezési funkcióval, valamint beépített keresővel, amely nemcsak a honlapon keres.

## 4.   Funkcionális követelmények:

1. <u>Jogosultsági szintek:</u>

- Adminisztrátori jogosultság
- Olvasási (látogatói) jogosultság

2. <u>Honlap felépítése (látogató):</u>

- Kezdőképernyő: Csak belépésre
- Belépés utáni nyitóképernyő
  - Érdeklődésnek megfelelő hírek
  - Időjárás
  - Útvonaltervező

3. <u>Adminisztrátori jogok:</u> 

- Hírfeltöltés
- Regisztrációs adatok áttekintése
- Hírek esetében kategória megjelölés

4. <u>Oldalakon banner kezelés</u>

5. <u>Kapcsolat/jogszabályi és egyéb kötelező tartalmak</u>

## 5.   Jogszabályi követelmények

A programnak a mindenkori Magyarországi jogszabályi, rendeleti előírásoknak kell megfelelnie. A projekt indításakor hatályos jogszabályok listája az alábbiakban olvasható:

·     2003. évi C. törvény az elektronikus hírközlésről 

·     AZ EURÓPAI PARLAMENT ÉS A TANÁCS (EU) 2016/679 RENDELETE
 (2016. április 27.)
 a természetes személyeknek a személyes adatok kezelése tekintetében történő védelméről és az ilyen adatok szabad áramlásáról, valamint a 95/46/EK irányelv hatályon kívül helyezéséről (általános adatvédelmi rendelet)

·     2011. évi CXII. törvény az információs önrendelkezési jogról és az információszabadságról   ( Infotv.)

## 6.   Igényelt üzleti folyamatok

Mivel a projekt nem meglévő alapokra építkezik, ezért nem szükséges jelenlegi üzleti folyamatot implementálni.

Az új folyamatok részletezése az alábbiakban látható:

![](G:\RFT\Doc\folyamatrészletezés.png)
