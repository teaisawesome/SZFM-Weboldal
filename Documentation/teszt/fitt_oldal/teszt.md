# Fitt oldal tesztelése


## 1. Tesztterv

1. Fejléc tesztelés
    * Az egér mutató hatására milyen stílsú lesz az adott gomb a menüsoron. Az adott menü gombok megfelelő oldalakra mutatnak e, illetve a navigációs menü reszponzivitása különböző méretű készülékekre. A cím arányosan nő illetve csökken a méretváltozásra. A fejléc hátterének reszponzicitása.
    
2. Fő rész tesztelés
    * A háttér, illetve a rajta lévő box helyzetének a változása. A gombok, választható opciók működése. A linkek és a felugró ablakok helyzete minden méret esetén. A gombok aktivitása kattintás esetén.
    
  
3. Lábrész tesztelés
    * A három oszlopos tagolás, a mezők helyzetet illetve a közzössségi oldalra vezető linkek helyzete és rezspozivitása, valamint ezek animációi minden méretben.


## 2. Felkészülés a végrehajtásra


A teszteléshez használt eszközök/programok:


* Visual Studia Code
    * Live Server bővítmény (nem kötelező)
* Általunk kedvelt böngésző (Internet Explorer nem ajánlott)


A tesztek Windows-os környzetben készültek.


## 3. Tesztek Végrehajtása

> ### **1. Fejléc tesztelés**
>    * Az egér mutató hatására milyen stílsú lesz az adott gomb a menüsoron. Az adott menü gombok megfelelő oldalakra mutatnak e, illetve a navigációs menü reszponzivitása különböző méretű készülékekre. A cím arányosan nő illetve csökken a méretváltozásra. A fejléc hátterének reszponzicitása.


**A fejléc alapesetben:**
![A fejléc alap állpota](/Documentation/teszt/fitt_oldal/Images/Fejlec1.png "A fejléc alap állpota")

**A navigációs menüsor aktív kurzor esetén:**
![A fejléc állpota aktív kurzor esetén](/Documentation/teszt/fitt_oldal/Images/Fejlec2.png "A fejléc állpota aktív kurzor esetén")


*A fenti két képen jól látszik a különbség. Amíg csak alap esetben van a navigációs sor, addig minden menüpont ugyanúgy jelenik meg, tehát nincs méretbeli és színbeli 
eltérés. De amikor rávisszük az egeret valamelyik menüpontra, akkor az kiemelkedik, a többi menü addig halványabbá válik. Látszódik rajta egy animáció a kattintás előtt.*


**Menüpontok beállításai a megfelelő oldalakra:**

    <ul>
      <li><a href="../forum.php">Fórum</a></li>
      <li><a href="../kapcsolat_oldal/kapcsolat.html">Kapcsolat</a></li>
      <li><a href="../szolgaltatasok_osszessege_weboldal/szolgaltatasok.html">Szolgáltatások</a></li>
      <li><a href="../rounk_oldal/rolunk.html">Rólunk</a></li>
      <li><a href="../belepes.php">Belépés</a></li>
      <li><a href="../regisztracio.php">Regisztráció</a></li>
     </ul>


*A fenti kódrészletben láthatjuk a menüsor forrásának egy részét. Itt határozzuk meg, hogy melyik menüpont melyik oldalra visz minket. Mint láthatjuk minden gomb a hozzá tartozó oldalra mutat. Minden oldal külön mappában található, az egyértelműség miatt.*


**A fejléc reszponzivitása 1920px szélesség esetén:**


![A fejléc reszponzivitása 1920px](/Documentation/teszt/fitt_oldal/Images/Fejlec3.png "A fejléc reszponzivitása 1920px")


*Láthatjuk, hogy a fejléc teljesen használható, minden rendezetten megtalálható rajta. A bal felső sarokban a logo, a jobb oldalon felül a navigációs gombok és a háttérkép is, valamint a cím.*


**A fejléc reszponzivitása 960px szélesség esetén:**


![A fejléc reszponzivitása 960px](/Documentation/teszt/fitt_oldal/Images/Fejlec4.png "A fejléc reszponzivitása 960px")


*Láthatjuk, hogy a navigációs sor eltűnt és csak egy gomb van a helyén (első kép). A gomb nyomása esetén bal oldalt felbukkan a menüsor (második kép) csak most már oszlopos alakban, nem pedig sorban. Ezzel a módszerrel könnyen alkalmazkodhatunk különböző kijelzőkhöz is, mint például a mobil kijelzők. Ebben az esetben is érvényesül, hogy a menüsor minden pontja látszik, de ha rávisszük az egyik pontra az egeret, akkor az adott pont kiemelkedik, létrejön az animáció. A többi gomb pedig addig elhalványul. A háttér és a cím is arányosan kisebb lett.*

**A fejléc reszponzivitása mobilon:**


![A fejléc reszponzivitása mobilon](/Documentation/teszt/fitt_oldal/Images/Fejlec5.png "A fejléc reszponzivitása mobilon")


*Ebben az esetben is látszik, hogy a bal oldalon az oszlopos elrendezésben vannak a menüpontok. Ezt a módszert alkalmaztuk az 1200px vagy attól kisebb szélességű kijelzők esetén., a cím is és a háttér is jól látható.*


> ### **2. Fő rész tesztelés**
>    * A háttér, illetve a rajta lévő box helyzetének a változása. A gombok, választható opciók működése. A linkek és a felugró ablakok helyzete minden méret esetén. A gombok aktivitása kattintás esetén.


**A fő rész reszponzivitása 1920px szélesség esetén:**


![A fő rész reszponzivitása 1920px](/Documentation/teszt/fitt_oldal/Images/Main1.png "A fő rész reszponzivitása 1920px")


*Láthatjuk, a fő részben helyezkedik el maga a fitt "generátor rész". Itt a háttéren található egy szürke alap és azon vannak a gombok, a választható opciók. A gombokon egyszerű animálást alkalmaztunk. Az oldal elrendezése mindig fix, a tovább és a vissza gomb alul helyezkedik el, a többi gomb és lehetőség, valamint felirat a szükre négyzeten belül. Összesen 14 oldalt tartalmaz a közpéső rész, ezek között a vissza és a tovább gombbal lehet navigálni.*


**A fő rész reszponzivitása 960px szélesség esetén:**


![A fő rész reszponzivitása 960px](/Documentation/teszt/fitt_oldal/Images/Main2.png "A fő rész reszponzivitása 960px")


*A fenti képen látszik, hogy az oldal minden része arányosan lecsökken, így a reszponzivitás sikerül.*

**A fő rész reszponzivitása mobilon:**

![A fő rész reszponzivitása mobilon](/Documentation/teszt/fitt_oldal/Images/Main3.png "A fő rész reszponzivitása mobilon")


*A mobil verzión is láthatjuk, hogy az oldal aráynosan ment össze, így a háttér, a gombok, a címek is jólláthatóak és értelmezhetőek.* 

**A fő rész aktív kurzor esetén:**
![A fejléc állpota aktív kurzor esetén](/Documentation/teszt/fitt_oldal/Images/Main4.png "A fejléc állpota aktív kurzor esetén")


> ### **3. Lábrész tesztelés**
>    * A három oszlopos tagolás, a mezők helyzetet illetve a közzössségi oldalra vezető linkek helyzete és rezspozivitása, valamint ezek animációi minden méretben.


**A lábrész reszponzivitása 1920px szélesség esetén:**


![A lábrész reszponzivitása 1920px](/Documentation/teszt/fitt_oldal/Images/Labresz1.png "A lábrész reszponzivitása 1920px")


*A weboldal alsó része 3 oszolopra van tagolva. Itt található az Elérehetőségek, a Rólunk és a Lépjen velünk kapcsolatba rész, ezek alatt a közösségi médiához összekötő linkek. A szöveges mezők, a gombok, és a közössségi média linkjei is animálva vannak.*


**A lábrész reszponzivitása 960px szélesség esetén:**


![A lábrész reszponzivitása 960px](/Documentation/teszt/fitt_oldal/Images/Labresz2.png "A lábrész reszponzivitása 960px")


*Ebben a méretben már láthatjuk, hogy a három oszlopos tagolás eltűnt és a három rész egymás alá kerül, így biztosítjuk az oldal reszponzivitását. A mezők így jól láthatóak, a felhasználó számára könnyen elérehtőek. Nem csúsznak szét, tartják a helyüket.*

**A lábrész reszponzivitása mobilon:**


![A lábrész reszponzivitása mobilon](/Documentation/teszt/fitt_oldal/Images/Labresz3.png "A lábrész reszponzivitása mobilon")


*A mobil méretben is megmaradt az egyoszlopos tagolás. A betűméretek, a szövegek, a gombok és a szövegmezők is alkalmazkodtak a kis mérethez, sikerült a reszponzivitást megalkotni.*

**A lábrész aktív kurzor esetén:**
![A lábrész állpota aktív kurzor esetén](/Documentation/teszt/fitt_oldal/Images/Labresz4.png "A lábrész állpota aktív kurzor esetén")


## 3. Eredmények értékelése

Az SZFM weboldal Fitt oldal című oldalához sikerült végehez vinni a célokat: 

* Az oldal reszponzív lett minden készülékre.
* Az animációk és az elredezés is megmaradt minden méretben.
* A háttérképek és a borító kép is teljesen reszponzív lett.
* Az oldal fő részében tudunk lapozni az oldalak között.
* Egyszerre több választ is megadhatunk néhány esetben.
* Nem sikerült az első és az utolsó oldal meghatározása.
