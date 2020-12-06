# Rólunk oldal tesztelése



## 1. Tesztterv



1. Menüsor tesztelés
    * Az egér mutató hatására milyen stílsú lesz az adott gomb a menüsoron. Az adott menü gombok megfelelő oldalakra mutatnak e, illetve a navigációs menü reszponzivitása különböző méretű készülékekre.
    

2. Cím és alcím tesztelése
    * A cím és alcím reszponzivitásának ellenőrzése különböző szélességű készülékeken.
    

3. A menüsor és a cím borítóképének tesztelése
    * Ellenőrizzük a kép méretének arányos növekedését vagy csökkenését az adott eszköz méretéhez, így ellenőrizzük a reszponzivitását. A borító megfelelő helyzetben marad e a méretnövekedésne köszönhetően.
    

4. Bal oldali kör alakú képekek tesztelése
    * Méretváltozás esetén ellenőrizzük, hogy a képek megtartják e az adott helyüket. A kisebb képernyők esetében alkalmazkodnak e az új mérethez (segítik e a felhasználó tájékozódását mobil eszközökön is, tehát nem takarnak ki szöveget és nem lesznek túl nagyok). Mindig a bal oldalon kell lenniük, kivéve ha a méretcsökkenés megköveteli a helyes átrendeződést.
    
    
5. Jobb oldali kör alakú képekek tesztelése
    * Méretváltozás esetén ellenőrizzük, hogy a képek megtartják e az adott helyüket. A kisebb képernyők esetében alkalmazkodnak e az új mérethez (segítik e a felhasználó tájékozódását mobil eszközökön is, tehát nem takarnak ki szöveget és nem lesznek túl nagyok). Mindig kisebbnek és a jobb oldal kell lenniük, kivéve ha a méretcsökkenés megköveteli a helyes átrendeződést.


6. Bekezdés címek tesztelése
    * Ellenőrizzük a bekezdés címeket, hogy az adott méretváltozásra helyesen váltanak méretet, főként a mobil eszközökre. Az olvashatóság és a weboldal könnyű használata miatt. A cím ne takajon el szöveget illetve ne csússzon el az oldalon méretváltoztatás miatt.
    
    
7. Bekezdések tesztelése 
    * Megnézzük a bekezdések reszponzivitását. Az ablak méretének csökkenésével tudjuk ellenőrizni, hogy adott méretekben, a szöveg nem lóg e bele a képekbe, valamint helyesen lesz e törrdelve.
    
    
8. Elválasztó vonal tesztelése
    * A vonal mindig a bekezdések alatt és a lábrész felett helyezkedik el. Megnézzük, hogy a vonal nem csúszik e el, vagy, hogy végig ér az adott oldalon különböző méretek mellett.
    

9. Elérhetőség tesztelése
    * Az ikonoknak mindig a z adott sor előtt kell állniuk, minden méret esetén. Valamint a szövegnek is igazodnia kell a kijelző méretekhez.
    
    
10. Fedezze fel a szolgáltatásainkat tesztelése 
    * Cím és a szöveg, valamint az egész blokk helyzetének az igazodása. Minden esetben cím, bekezdés, és alatta pedig a gombot kell látnunk oszlopszerűen. Ellenőrizzük a "oszlop" minden elemének reszponzivitását. A gomb stílusának helyessége minden esetben és a helyes oldara továbbításának az ellenőrzése.
    

11. Lépjen kapcsolatba velünk tesztelése
    * A szövegdobozok méretének és helyzetének ellenőrzése, valamint a felszólító üzenet helyessége minden méret esetén. A gomb stílusa és reszponzivitása.


12. Social links felirat tesztelése
    * A szövegrész és a vonal sítlusának ellenőrzése minden képrenyő mérethez a  helyzetük megtartásával 
    

13. Social ikonok tesztelése
    * Az ikonok animációjának tesztelése minden méretben, illetve az ikonok elhelyezése a hátterükön megfelelő e.
    

14. Terms | privacy tesztelése
    * Ellenőrizzük a két szó helyzetét és stílusát minden képernyőhöz.   
    


## 2. Felkészülés a végrehajtásra



A teszteléshez használt eszközök/programok:


* Visual Studia Code
    * Live Server bővítmény (nem kötelező)
* Általunk kedvelt böngésző (Internet Explorer nem ajánlott)


A tesztek Windows-os környzetben készültek.



## 3. Tesztek Végrehajtása



> ### **1. Menüsor tesztelés**
>    * Az egér mutató hatására milyen stílsú lesz az adott gomb a menüsoron. Az adott menü gombok megfelelő oldalakra mutatnak e, illetve a navigációs menü reszponzivitása különböző méretű készülékekre.



**A navigációs menüsor alapesetben:**
![Navbar alap állpota](/Documentation/teszt/rólunk_oldal/Images/Navbar1.png "Navbar alap állpota")


**A navigációs menüsor aktív kurzor esetén:**
![Navbar állpota aktív kurzor esetén](/Images/Navbar2.png "Navbar állpota aktív kurzor esetén")


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


**Menüsor reszponzivitása 1920px szélesség esetén:**


![Navbar reszponzivitása 1920px](/Images/Navbar3.png "Navbar reszponzivitása 1920px")


*Láthatjuk, hogy a menüsor teljesen használható, nem csúszik el, nem megy össze. Pontosan a helyén marad.*


**Menüsor reszponzivitása 960px szélesség esetén:**


![Navbar reszponzivitása 960px](/Images/Navbar4.png "Navbar reszponzivitása 960px")


![Navbar reszponzivitása 960px](/Images/Navbar5.png "Navbar reszponzivitása 960px")


*Láthatjuk, hogy a navigációs sor eltűnt és csak egy gomb van a helyén (első kép). A gomb nyomása esetén bal oldalt felbukkan a menüsor (második kép) csak most már oszlopos alakban, nem pedig sorban. Ezzel a módszerrel könnyen alkalmazkodhatunk különböző kijelzőkhöz is, mint például a mobil kijelzők. Ebben az esetben is érvényesül, hogy a menüsor minden pontja látszik, de ha rávisszük az egyik pontra az egeret, akkor az adott pont kiemelkedik, létrejön az animáció. A többi gomb pedig addig elhalványul.*


**Menüsor reszponzivitása mobilon:**


![Navbar reszponzivitása mobilon](/Images/Navbar6.png "Navbar reszponzivitása mobilon")


*Ebben az esetben is látszik, hogy a bal oldalon az oszlopos elrendezésben vannak a menüpontok. Ezt a módszert alkalmaztuk az 1200px vagy attól kisebb szélességű kijelzők esetén.*



> ### **2. Cím és alcím tesztelése**
>    * A cím és alcím reszponzivitásának ellenőrzése különböző szélességű készülékeken.



      <div class="cim">
          <h1>Rólunk</h1>
          <h3>Instituendi</h3>
      </div>
 
 
*A cím egy h1-es, az alcím pedig egy h3-as HTML tag-et kapott. Ezt egy külön div-be rendeztük, így könnyebb volt megszerkeszteni a stíluslapját.*


**A címek reszponzivitása 1920px szélesség esetén:**


![A címek reszponzivitása 1920px](/Images/Title1.png "A címek reszponzivitása 1920px")


**A címek reszponzivitása 960px szélesség esetén:**


![A címek reszponzivitása 960px](/Images/Title2.png "A címek reszponzivitása 960px")


**A címek reszponzivitása mobilon:**


![A címek reszponzivitása mobilon](/Images/Title3.png "A címek reszponzivitása mobilon")


*A fenti képeken is látható, hogy a címek megfelelően alkalmazkodnak a méretváltozáshoz, így minden méretben jól olvashatóak és nem takarnak bele más képbe vagy szövegbe.*



> ### **3. A menüsor és a cím borítóképének tesztelése**
>    * Ellenőrizzük a kép méretének arányos növekedését vagy csökkenését az adott eszköz méretéhez, így ellenőrizzük a reszponzivitását. A borító megfelelő helyzetben marad e a méretnövekedésne köszönhetően.


**A borítókép reszponzivitása 1920px szélesség esetén:**


![A borítókép reszponzivitása 1920px](/Images/Bground1.png "A borítókép reszponzivitása 1920px")



*A fenti képen láthatjuk, hogy a képet nem tudjuk jobbra, ballra, fel vagy le mozgatni semmilyen eszköz segítségével, tehát a kép igazodik az adott eszköz képarányaihoz. Ezt az alábbi CSS kódrészlet segítette elő:*



      .borito {
          display: grid;
          height: 50vh;
          transition: 0.5s;
          width: 100%;
          position: relative;
          background-image: url("../../../resources/images/rolunk_oldal_images/rolunkborito.jpg");
          background-repeat: no-repeat;
          background-position: center;
          background-size: cover;
      }


**A borítókép reszponzivitása 960px szélesség esetén:**


![A borítókép reszponzivitása 960px](/Images/Bground2.png "A borítókép reszponzivitása 960px")


**A borítókép reszponzivitása reszponzivitása mobilon:**


![A borítókép reszponzivitása mobilon](/Images/Bground3.png "A borítókép reszponzivitása mobilon")


*A fenti képeken látszik, hogy a böngésző, a képből mindig egy közelített részletet mutat, ahogy megyünk az egyre kisebb szélességek felé, úgy a kép közepét látjuk, ezt a CSS-ben lehet állítani. Ez persze sokmindentől függ, hogy a készítő, hogyan állítja be a hátteret. Egyik méretben sem tudjuk a képet görgetni vagy csúsztatni bármely irányba, tehát sikerült a reszponzivitás.*



> ### **4. Bal oldali kör alakú képekek tesztelése**
>    * Méretváltozás esetén ellenőrizzük, hogy a képek megtartják e az adott helyüket. A kisebb képernyők esetében alkalmazkodnak e az új mérethez (segítik e a felhasználó tájékozódását mobil eszközökön is, tehát nem takarnak ki szöveget és nem lesznek túl nagyok). Mindig a bal oldalon kell lenniük, kivéve ha a méretcsökkenés megköveteli a helyes átrendeződést.


*A képeket egy kör alapba raktuk bele, ez a stílus jobban illik a weboldalhoz, kedvesebb és látványosabb is. A képek helyzete mindvégigi bal oldalon marad, de a kisebb méretű képernyőknél (főleg mobilkijelzők esetén) a képek mellett már nem található szöveg. Így a felhasználók szebben láthatják a képet és a szöveget, mert ha ezt nem tennénk meg, akkor a kép szétszabdalná a szöveget úgy, hogy az éretelmetlenné válna.*

**Az alábbi kódrészlettel formáztuk meg és illesztettük a helyére a képet:**



      /*BAL KÉP DOBOZ */

      .kor.kor1 {
          width: 500px;
          height: 500px;
          float: left;
          border-radius: 50%;
          margin: 20px;
          shape-outside: circle();
          transition: 0.2s;

      }
      
      
      
       /* BAL KÉP ILLESZTÉS*/

      .kor.kor1 img {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          object-fit: cover;

      }



**Bal oldali körképek reszponzivitása 1920px szélesség esetén:**


![Bal oldali körképek reszponzivitása 1920px](/Images/Left1.png "Bal oldali körképek reszponzivitása 1920px")


*Itt a kép igazodik a nagy mérethez, azért ilyen nagy a mérete.**


**Bal oldali körképek reszponzivitása 960px szélesség esetén:**


![Bal oldali körképek reszponzivitása 960px](/Images/Left2.png "Bal oldali körképek reszponzivitása 960px")


*Itt már látszik, hogy arányosan összébmegy a kép, igazodik az adott ablak méretéhez.*


**Bal oldali körképek reszponzivitása reszponzivitása mobilon:**


![Bal oldali körképek reszponzivitása mobilon](/Images/Left3.png "Bal oldali körképek reszponzivitása mobilon")


*Megvalósul a reszponzivitás, a képek egymás alá kerültek, ez volt a legjobb megoldás, hogy láthatóak is maradjanak, de a szöüveget se tördeljék el.*



> ### 5. Jobb oldali kör alakú képekek tesztelése
>    * Méretváltozás esetén ellenőrizzük, hogy a képek megtartják e az adott helyüket. A kisebb képernyők esetében alkalmazkodnak e az új mérethez (segítik e a felhasználó tájékozódását mobil eszközökön is, tehát nem takarnak ki szöveget és nem lesznek túl nagyok). Mindig kisebbnek és a jobb oldal kell lenniük, kivéve ha a méretcsökkenés megköveteli a helyes átrendeződést.




*A képeket egy kör alapba raktuk bele, ez a stílus jobban illik a weboldalhoz, kedvesebb és látványosabb is. A képek helyzete mindvégigi a jobb oldalon marad, de a kisebb méretű képernyőknél (főleg mobilkijelzők esetén) a képek mellett már nem található szöveg, a képek egymás alá kerülnek. Így a felhasználók szebben láthatják a képet és a szöveget, mert ha ezt nem tennénk meg, akkor a kép szétszabdalná a szöveget úgy, hogy az éretelmetlenné válna.*

**Az alábbi kódrészlettel formáztuk meg és illesztettük a helyére a képet:**



      /* JOBB KÉP DOBOZ */

      .kor.kor2 {
          width: 300px;
          height: 300px;
          float: right;
          border-radius: 50%;
          margin: 20px;
          shape-outside: circle();
          transition: 0.2s;
      }
      
      
      
       /* JOBB KÉP ILLESZTÉS */

      .kor.kor2 img {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          object-fit: cover;
      }



**Jobb oldali körképek reszponzivitása 1920px szélesség esetén:**


![Jobb oldali körképek reszponzivitása 1920px](/Images/Right1.png "Jobb oldali körképek reszponzivitása 1920px")


*Itt a kép igazodik a nagy mérethez, azért ilyen nagy a mérete.**


**Jobb oldali körképek reszponzivitása 960px szélesség esetén:**


![Jobb oldali körképek reszponzivitása 960px](/Images/Right2.png "Jobb oldali körképek reszponzivitása 960px")


*Itt már látszik, hogy arányosan összébmegy a kép, igazodik az adott ablak méretéhez.*


**Jobb oldali körképek reszponzivitása reszponzivitása mobilon:**


![Jobb oldali körképek reszponzivitása mobilon](/Images/Right3.png "Jobb oldali körképek reszponzivitása mobilon")


*Megvalósul a reszponzivitás, a képek egymás alá kerültek, ez volt a legjobb megoldás, hogy láthatóak is maradjanak, de a szöüveget se tördeljék el.*



> ### **6. Bekezdés címek tesztelése**
>    * Ellenőrizzük a bekezdés címeket, hogy az adott méretváltozásra helyesen váltanak méretet, főként a mobil eszközökre. Az olvashatóság és a weboldal könnyű használata miatt. A cím ne takajon el szöveget illetve ne csússzon el az oldalon méretváltoztatás miatt.



**Bekezdés címek reszponzivitása 1920px szélesség esetén:**


![Bekezdés címek reszponzivitása 1920px](/Images/TextT1.png "Bekezdés címek reszponzivitása 1920px")


*Jól látható, hogy a címnek bőven van elég hely, könnyen olvasható, Szépen igazodik a kör alakú képekhez, tartja a távolságot tőlük.*


**Bekezdés címek reszponzivitása 960px szélesség esetén:**


![Bekezdés címek reszponzivitása 960px](/Images/TextT2.png "Bekezdés címek reszponzivitása 960px")


*Itt a cím már közelebb kerül a képekhez. A cím alkalmazkodik a mérethez, nem lóg bele a képekbe vagy a szövegbe.*


**Bekezdés címek reszponzivitása reszponzivitása mobilon:**


![Bekezdés címek reszponzivitása mobilon](/Images/TextT3.png "Bekezdés címek reszponzivitása mobilon")


*A címeket szépen eltördeltük, így olvashatóak, nem lógnak ki a képernyőről, valamint a szöveget illetve a képeket se tolja el.*




> ### **7. Bekezdések tesztelése** 
>    * Megnézzük a bekezdések reszponzivitását. Az ablak méretének csökkenésével tudjuk ellenőrizni, hogy adott méretekben, a szöveg nem lóg e bele a képekbe, valamint helyesen lesz e törrdelve.
  
  
 
**Bekezdések reszponzivitása 1920px szélesség esetén:**


![Bekezdések reszponzivitása 1920px](/Images/Paragraph1.png "Bekezdések reszponzivitása 1920px")


*A képen is látható, hogy a szüveg szépen eloszlik a képernyőn, azonos távolságot tart a képektől és a bekezdés címektől is.*


**Bekezdések reszponzivitása 960px szélesség esetén:**


![Bekezdések reszponzivitása 960px](/Images/Paragraph2.png "Bekezdések reszponzivitása 960px")


*A szöveg már jobban kitölti a teret, mivel az balak mérete csökkent. Így a szöveg szépen a képek alá is kerül, ezzel növelve az olvashatóságot. Itt is megvan a fix távolság a képektől és a címektől iy, valamint az oldal szélétől.*


**Bekezdések reszponzivitása reszponzivitása mobilon:**


![Bekezdések reszponzivitása mobilon](/Images/Paragraph3.png "Bekezdések reszponzivitása mobilon")
 
 
*A szöveg kitölti a teret, mint egy hosszú egybefuggő csíkot képez, de ez a mobiloknál nem meglepő, hiszen így marad olvasható az oldal. Ebben az esetben a képek a szövegek elé kerülnek elhelyezésre, így biztosítják az olvashatóságot.*  




> ### **8. Elválasztó vonal tesztelése**
>    * A vonal mindig a bekezdések alatt és a lábrész felett helyezkedik el. Megnézzük, hogy a vonal nem csúszik e el, vagy, hogy végig ér az adott oldalon különböző méretek mellett.



**Elválasztó vonal reszponzivitása 1920px szélesség esetén:**


![Elválasztó vonal reszponzivitása 1920px](/Images/Line1.png "Elválasztó vonal reszponzivitása 1920px")


*Láthatjuk, hogy a vonal a bal oldaltól a jobb oldalig rat végig. Ez egy összetett vonal a stílusát tekintve, hiszen a felső színt mi adjuk meg, de az alsót azt a CSS alkotja meg. Az eredeti szín egy sötétebb változatát csinálja meg.*

**A fent említett CSS ódrészlet:**


      footer {

          border-top-style: ridge;
          border-top-color: rgb(104, 184, 206);
          border-width: 0.5rem;
          display: grid;
          grid-template-columns: 33.33% 33.33% 33.33%;
          grid-template-rows: repeat(auto, 4);
          grid-template-areas: "info about message" "efekt efekt efekt" "social social social" "term term term";
          height: 100%;
          padding-top: 3%;

      }


**Elválasztó vonal reszponzivitása 960px szélesség esetén:**


![Elválasztó vonal reszponzivitása 960px](/Images/Line2.png "Elválasztó vonal reszponzivitása 960px")


*A vonal itt is szépen végig ér az oldalon. Tartja a távolságot a felette lévő szövegtől és az alatt lécő címtől is.*


**Elválasztó vonal reszponzivitása reszponzivitása mobilon:**


![Elválasztó vonal reszponzivitása mobilon](/Images/Line3.png "Elválasztó vonal reszponzivitása mobilon")


*A vonal mobil kijelzőn is szépen látható, itt is tartja az ablak szélességet. Az alatta és a felette lévő részek közötti távolság nyilván csökkent, de így is átlátható és kivehető minden információ az oldalról.*



> ### **9. Elérhetőség tesztelése**
>    * Az ikonoknak mindig a z adott sor előtt kell állniuk, minden méret esetén. Valamint a szövegnek is igazodnia kell a kijelző méretekhez.



**Elérhetőség reszponzivitása 1920px szélesség esetén:**


![Elérhetőség reszponzivitása 1920px](/Images/Connect1.png "Elérhetőség reszponzivitása 1920px")


*Az úgynevezett "lábrész" három részből áll, az elérehetőség az első része, azaz a bal oldai. A nagyobb képernyő méreteknél ez a három rész egymás mellett helyezkedik el, de kisebb részeknál már oszlopszerűen láthatjuk, a jobb olvashatóság kedvéért. Fontos, hogy az ikonok mindig a szövegek előtt álljanak, ne csússzanak vagy mozogjanak el.*



**Elérhetőség reszponzivitása 960px szélesség esetén:**


![Elérhetőség reszponzivitása 960px](/Images/Connect2.png "Elérhetőség reszponzivitása 960px")


*Itt már életbe lép az oszlopos felállás. Az elérhetőség került legfelülre, hiszen ez volt a legszélső (az első). Ebben a helyzetben szabályosan középre kerül minden infomáció, ami az elérhetőségekben szerepel. Az ikonok is a helyükön maradtak*


**Elérhetőség reszponzivitása reszponzivitása mobilon:**


![Elérhetőség reszponzivitása mobilon](/Images/Connect3.png "Elérhetőség reszponzivitása mobilon")


*Mobil kijelzőn is remekül lehet olvasni az elérehetőségek részt. Az információ egymás alá került, az ikonok is a helyükön vannak. A szöveg megfelelő távolságot tart a képernyő szélétől és az alatta vagy éppen a fölötte lévő szövegektől is.*



> ### **10. Fedezze fel a szolgáltatásainkat tesztelése** 
>    * Cím és a szöveg, valamint az egész blokk helyzetének az igazodása. Minden esetben cím, bekezdés, és alatta pedig a gombot kell látnunk oszlopszerűen. Ellenőrizzük a "oszlop" minden elemének reszponzivitását. A gomb stílusának helyessége minden esetben és a helyes oldara továbbításának az ellenőrzése.



**Fedezze fel a szolgáltatásainkat reszponzivitása 1920px szélesség esetén:**


![Fedezze fel a szolgáltatásainkat reszponzivitása 1920px](/Images/Services1.png "Fedezze fel a szolgáltatásainkat reszponzivitása 1920px")


*Az úgynevezett "lábrész" három részből áll, a fedezze fel a szolgáltatásainkat a második része, azaz a középső. A nagyobb képernyő méreteknél ez a három rész egymás mellett helyezkedik el, de kisebb részeknál már oszlopszerűen láthatjuk, a jobb olvashatóság kedvéért. Fontos, hogy a középső részben a szöveg olvastó legyen, és ne lógjon túl vagy bele más részekbe, illetve a gomb is a megfelelő oldalra irányítson minket. A gomb animálva van, ha rávisszük az egeret, akkor kicsit összébb megy és egy fehér "keret" (alul és felül egy vonal) jelenik meg rajta.*



**Fedezze fel a szolgáltatásainkat reszponzivitása 960px szélesség esetén:**


![Fedezze fel a szolgáltatásainkat reszponzivitása 960px](/Images/Services2.png "Fedezze fel a szolgáltatásainkat reszponzivitása 960px")


*Itt már életbe lép az oszlopos felállás. A fedezze fel a szolgáltatásainkat került középre, hiszen ez volt a középső a sorban. Ebben a helyzetben a cím, a szöveg és a gomb is megfelelő távolságra vannak egymástól és persze a kpernyő szélétől is. Ebben a helyzetben középre vannak helyzve, így stílusosabb az oldal.*


**Fedezze fel a szolgáltatásainkat reszponzivitása reszponzivitása mobilon:**


![Fedezze fel a szolgáltatásainkat reszponzivitása mobilon](/Images/Services3.png "Fedezze fel a szolgáltatásainkat reszponzivitása mobilon")


*Mobil kijelzőn is remekül lehet olvasni a fedezze fel a szolgáltatásainkat részt. A szöveg megfelelő távolságot tart a gombtól és a címtől. Az oldal ezen része sem takar vagy torzít bele más részekbe, tehát a reszponzivtás itt is sikerült.*


**Fedezze fel a szolgáltatásainkat rész gomb animációja:**


![Fedezze fel a szolgáltatásainkat gomb animációja](/Images/Services4.png "Fedezze fel a szolgáltatásainkat gomb animációja")


> ### **11. Lépjen kapcsolatba velünk tesztelése**
>    * A szövegdobozok méretének és helyzetének ellenőrzése, valamint a felszólító üzenet helyessége minden méret esetén. A gomb stílusa és reszponzivitása.



**Lépjen kapcsolatba velünk reszponzivitása 1920px szélesség esetén:**


![Lépjen kapcsolatba velünk reszponzivitása 1920px](/Images/Email1.png "Lépjen kapcsolatba velünk reszponzivitása 1920px")


*Az úgynevezett "lábrész" három részből áll, a lépjen kapcsolatba velünk a harmadik része, azaz a jobb szélső. A nagyobb képernyő méreteknél ez a három rész egymás mellett helyezkedik el, de kisebb részeknál már oszlopszerűen láthatjuk, a jobb olvashatóság kedvéért. Fontos, hogy a jobb szélső részben az email és az üzenet "boxa" ne lógjon túl vagy bele más részekbe, illetve a gomb is a megfelelően működjön. A gomb animálva van, ha rávisszük az egeret, akkor kicsit összébb megy és egy fehér "keret" (alul és felül egy vonal) jelenik meg rajta.*



**Lépjen kapcsolatba velünk reszponzivitása 960px szélesség esetén:**


![Lépjen kapcsolatba velünk reszponzivitása 960px](/Images/Email2.png "Lépjen kapcsolatba velünk reszponzivitása 960px")


*Itt már életbe lép az oszlopos felállás. A lépjen kapcsolatba velünk került alulra, hiszen ez volt a jobb szélső a sorban. Ebben a helyzetben a cím, a két box és a neveik  is megfelelő távolságra vannak egymástól és persze a képernyő szélétől is. Ebben a helyzetben középre vannak helyzve, így stílusosabb az oldal.*


**Lépjen kapcsolatba velünk reszponzivitása mobilon:**


![Lépjen kapcsolatba velünk reszponzivitása mobilon](/Images/Email3.png "Lépjen kapcsolatba velünk reszponzivitása mobilon")


*Mobil kijelzőn is remekül lehet használni a lépjen kapcsolatba velünk részt. A két box és a neveik is megfelelő távolságot tartanak a gombtól és a címtől. Az oldal ezen része sem takar vagy torzít bele más részekbe.*


**Lépjen kapcsolatba velünk gomb animációja és a figyelmeztető szöveg:**


![Lépjen kapcsolatba velünk reszponzivitása mobilon](/Images/Email4.png "Lépjen kapcsolatba velünk reszponzivitása mobilon")


*A képen jól látható, hogy a figyelmeztető szöveg elég feltünő, így a felhasználó majd tudni fogja, hogy mit rontott el, és azt is, hogy hogyan tudja majd kijavítani a hibát.*


> ### **12. Social links felirat tesztelése**
>    * A szövegrész és a vonal sítlusának ellenőrzése minden képrenyő mérethez a  helyzetük megtartásával 



**Social links felirat reszponzivitása 1920px szélesség esetén:**


![Social links felirat reszponzivitása 1920px](/Images/SocialL1.png "Social links felirat reszponzivitása 1920px")


*Az oldal végén található elválasztó design vonal és szöveg. Egy kicsit megtöri a háttér egyhangú színét, ezzel hívja fel a felhasználó figyelmét az alatta lécő ikonokra. A csík nem megy végig az oldalon azaz nem tart a baloldaltól egészen a jobb oldalig.*


**Social links felirat reszponzivitása 960px szélesség esetén:**


![Social links felirat reszponzivitása 960px](/Images/SocialL2.png "Social links felirat reszponzivitása 960px")


*Ekkora szélességnél látszi, hogy a vonal és a szöveg kisebb lett, hiszen a képernyő mérete is kisebb lett.*


**Social links felirat reszponzivitása mobilon:**


![Social links felirat reszponzivitása mobilon](/Images/SocialL3.png "Social links felirat reszponzivitása mobilon")


*Ilyen kis méretben erre a csíkra már nincs szükség, a felirat elég, hogy felkeltse a felhasználó figyelmét.*



> ### **13. Social ikonok tesztelése**
>    * Az ikonok animációjának tesztelése minden méretben, illetve az ikonok elhelyezése a hátterükön megfelelő e.


**Social ikonok reszponzivitása 1920px szélesség esetén:**


![Social ikonok reszponzivitása 1920px](/Images/SocialI1.png "Social ikonok reszponzivitása 1920px")


*Az közösségi médiához vezető gombok az oldal majdnem legalján találhatóak. Ezek a gombok vezteik át a felhasználót az SZFM cég közösségi oldalira. A gombok egy forgás animációt kaptak, ami elég stílusos az ilyen megjelenéshez. A gombok és a bennük lévő ikonok egymáson helyezkednek el és persze az egész gomb sor középen található.*


**Social ikonok reszponzivitása 960px szélesség esetén:**


![Social ikonok reszponzivitása 960px](/Images/SocialI2.png "Social ikonok reszponzivitása 960px")


*Ahogy a szélesség csökken nyilván a gombok mérete is úgy csökken szabályosan.*


**Social ikonok reszponzivitása mobilon:**


![Social ikonok reszponzivitása mobilon](/Images/SocialI3.png "Social ikonok reszponzivitása mobilon")


*A gombok mobil méretben is használhatóak, az animáció is működik rajtuk minden méretben.*


**Social ikonok animációja:**


![Social ikonok reszponzivitása mobilon](/Images/SocialI4.png "Social ikonok reszponzivitása mobilon")


*Amint a felhasználó rávitte az egeret a gombra, az elkezd pörögni, majd leáll, de a hátterer kicsit megváltozik, ezt láthatjuk is  fneti képen.*



> ### **14. Terms | Privacy tesztelése**
>    * Ellenőrizzük a két szó helyzetét és stílusát minden képernyőhöz.



**Terms | Privacy reszponzivitása 1920px szélesség esetén:**


![Terms | Privacy reszponzivitása 1920px](/Images/TermsP1.png "Terms | Privacy reszponzivitása 1920px")


*Mint minden weboldalnak, nekünk is kellett cisnálnunk egy ilyen menüpontot. A szavak mindvégig a képernyő közepén helyezkednek el, arányosan csökkennek és nőnek az oldal átméretezésével. Ezt bizonyítják az alábbi képek*


**Terms | Privacy reszponzivitása 960px szélesség esetén:**


![Terms | Privacy reszponzivitása 960px](/Images/TermsP2.png "Terms | Privacy reszponzivitása 960px")


*A szélességa  felére csökkent így a szavak mérete is, a stílusuk maradt ugyanolyan, nem csúsztak el egymás mellől*


**Terms | Privacy reszponzivitása mobilon:**


![Terms | Privacy reszponzivitása mobilon](/Images/TermsP3.png "Terms | Privacy reszponzivitása mobilon")


*A mobil verzión is jól láthatóak a gombok, nem csúsznak el, illetve még mindig középen helyezkednek el.*


## 3. Eredmények értékelése

Az SZFM weboldal Rólunk című oldalának sikerült végehze vinni a célokat: 

* Az oldal reszponzív lett minden készülékre.
* Az animációk és az elredezés is megmaradt minden méretben.
* A képek és a borító kép is teljesen reszponzív lett.
