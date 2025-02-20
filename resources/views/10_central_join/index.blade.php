{{-- Központi felvételi jelentkezés --}}

@extends('layouts.index')

@section('sidebar')

    <div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title">Továbbtanulás</h5>
            <p class="card-text">
            </p>
            <a href="/docs/BMSZCBlathyFelveteli_tajekoztato_2025_2026ra_V1.0.pdf" target="_blank"
               class="btn btn-block btn-info">
                Részletes tájékoztató
            </a>
            <a href="/docs/Bláthy20252026FelvTajPrez_V1.0-vid.pdf" target="_blank"
               class="btn btn-block btn-info" >
                Prezentáció
            </a>
        </div>
    </div>
    {{--<div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title">Központi felvételi</h5>
            <p class="card-text"></p>
            <a href="https://ejel.kozfelvir.hu/" target="_blank"
               class="btn btn-block btn-info">
                Online jelentkezés!
            </a>
            <a href="https://felveteli.blathy.info/docs/KOZFELVIR_Jelentkezesi_lap_2024_BLATHY.docx" target="_blank"
               class="btn btn-block btn-info">
                Jelentkezési lap (DOCX)
            </a>
            <a href="https://felveteli.blathy.info/docs/KOZFELVIR_Jelentkezesi_lap_2024_BLATHY.pdf" target="_blank"
               class="btn btn-block btn-info">
                Jelentkezési lap (PDF)
            </a>
        </div>
    </div>--}}
    <div class="card mt-5">
        <div class="card-body">
            <h5 class="card-title">Szóbeli felvételi</h5>
            <p class="card-text"></p>
            <a href="https://felveteli.blathy.info/docs/BMSZC_Blathy_Szobeli felveteli_reszletes_tajekoztato_2025_V1.0.pdf" target="_blank"
               class="btn btn-block btn-info">
                BMSZC Bláthy - Szóbeli felvételi, részletes tájékoztató (2025) V1
            </a>
        </div>
    </div>
@endsection

@section('content')
    <h1>Felvételi tájékoztató</h1>

    <p>
        A 2025/2026. tanévben indítani tervezett képzéseink:
    </p>
    <ul>
        <li>
            az általános iskolát a 2024/2025. tanévben befejezőknek a 9. évfolyamtól indulóan 5 éves technikumi képzés az informatika és távközlés ágazatban,
        </li>
        <li>
            mindkét képzési formában a 11. évfolyamtól választhatóan „
            <a href="https://ikk.hu/szakmakartyak/szakmak/szoftverfejleszto-es-tesztelo" target="_blank">Szoftverfejlesztő és -tesztelő</a>
            ” vagy „
            <a href="https://ikk.hu/szakmakartyak/szakmak/informatikai-rendszer-es-alkalmazas-uzemelteto-technikus" target="_blank">Informatikai rendszer- és alkalmazás-üzemeltető technikus</a>
            ” szakmákban.
        </li>
    </ul>

    <p>
        További információk az alábbi dokumentumokban érhetőek el
    </p>
    <ul>
        <li>
            <a href="/docs/nyilt_2425_Blathy.pdf" target="_blank">
                BMSZC Bláthy - Szórólap
            </a>
        </li>
        <li>
            <a href="/docs/nyilt_2425_Blathy_Taj_Kicsi.pdf" target="_blank">
                BMSZC Bláthy - Rövid tájékoztató
            </a>
        </li>
        <li>
            <a href="/docs/BMSZCBlathyFelveteli_tajekoztato_2025_2026ra_V1.0.pdf" target="_blank">
                BMSZC Bláthy - Részletes fevételi tájékoztató
            </a>
        </li>
        <li>
            <a href="/docs/Bláthy20252026FelvTajPrez_V1.0-vid.pdf" target="_blank">
                BMSZC Bláthy - Nyílt napi prezentáció
            </a>
        </li>
    </ul>

{{--
    <h2 id="kozponti_jelentkezes">
        Jelentkezés központi írásbeli felvételi vizsgára
    </h2>

    <p>
        Iskolánk az idei tanévben is megszervezi a középfokú iskola 9. évfolyamára jelentkezők központi írásbeli vizsgáját magyar nyelvből és matematikából.
    </p>

    <p>
        <strong>
            Javasoljuk, hogy a jelentkezési lap kitöltésének megkezdése előtt feltétlenül olvassák el az <a href="https://www.oktatas.hu/kozneveles/kozepfoku_felveteli_eljaras/KIFIR_TT_felveteli_tajekoztato_kereso">
                oktatási hivatal tájékoztatóját</a>
        </strong>
        , amelyben
    </p>

    <ul>
        <li>
            részletesen ismertetik a jelentkezési lap kitöltésének módjait és
        </li>
        <li>
            tájékoztatást adnak a különleges bánásmódot igénylő (SNI - sajátos nevelési igényű, illetve a BTMN - beilleszkedési, tanulási, magatartási nehézségekkel küzdő) tanuló esetében követendő eljárásról a speciális vizsgakörülmények (pl. hosszabb kidolgozási idő, számológép használata, stb.).
        </li>
    </ul>

    <p>
        <strong>
            A felvételi vizsgára a 2024. december 02-ig lehet jelentkezni az alábbi módokon. Kérjük, hogy amennyiben lehetőségük van rá, az ügyfélkapun keresztüli jelentkezési módot válasszák!
        </strong>
    </p>

    <ul>
        <li>
            <strong>Ügyfélkapunk keresztül</strong>, elektronikus űrlap használatával. Az ügyfélkapun beküldendő elektronikus űrlap kitöltése előtt kérjük, hogy tekintsék meg a program használatához készített <strong>videóútmutatót</strong> (<a href="https://www.youtube.com/watch?v=6HMagO9tcuk" target="_blank">https://www.youtube.com/watch?v=6HMagO9tcuk</a>), vagy olvassák el a kitöltési útmutatót!
            <ul>
                <li>
                    Közfelvir - Elektronikus jelentkezési felület (<a href="https://ejel.kozfelvir.hu/" target="_blank">https://ejel.kozfelvir.hu/</a>)
                </li>
            </ul>
        </li>
        <li>
            A letöltött és kinyomtatott, <strong>kitöltött papír alapú dokumentumokat</strong> (jelentkezési lap és esetlegesen speciális vizsgakörülményre irányuló kérelem és szakértői vélemény) <strong>az iskola portáján leadva vagy az iskola címére postai úton megküldve</strong>
            <ul>
                <li>
                    <a href="/docs/KOZFELVIR_Jelentkezesi_lap_2024_BLATHY.docx" target="_blank">
                        Jelentkezési lap központi írásbeli vizsgára a BMSZC Bláthy-ba (docx)
                    </a>
                </li>
                <li>
                    <a href="/docs/KOZFELVIR_Jelentkezesi_lap_2024_BLATHY.pdf" target="_blank">
                        Jelentkezési lap központi írásbeli vizsgára a BMSZC Bláthy-ba (pdf)
                    </a>
                </li>
                <li>
                    amennyiben a nyomtatást nem tudják megoldani, az iskola portáján kérhetnek papír alapú jelentkezési lapot
                </li>
            </ul>
        </li>
        <li>
            Csak SNI/BTMN tanuló esetében a speciális vizsgakörülmények (pl. hosszabb kidolgozási idő, számológép használata, stb.) kéréséhez szükséges
            <ul>
                <li>
                    <a href="https://www.oktatas.hu/pub_bin/dload/kozoktatas/beiskolazas/2025/KOZFELVIR_szuloi_kerelem_2024.docx" target="_blank">
                        Szülői kérelem a központi írásbeli vizsga speciális vizsgakörülményeinek biztosítására (.docx)
                    </a>
                </li>
                <li>
                    <a href="https://www.oktatas.hu/pub_bin/dload/kozoktatas/beiskolazas/2025/KOZFELVIR_szuloi_kerelem_2024.docx" target="_blank">
                        Szülői kérelem a központi írásbeli vizsga speciális vizsgakörülményeinek biztosítására (.pdf)
                    </a>
                </li>
                <li>
                    Amennyiben speciális vizsgakörülményre vonatkozó kérelmet nyújtanak be csatolni kell az azt alátámasztó érvényes szakértői véleményt is!
                </li>
            </ul>
        </li>
    </ul>

    <p>
        A központi írásbeli vizsga szervezőjének adatai, amennyiben a vizsgát a BMSZC Bláthy Ottó Titusz Informatikai Technikumban kívánják megírni:
    </p>
    <ul>
        <li>OM azonosítója: 203058/002</li>
        <li>Neve: Budapesti Műszaki Szakképzési Centrum Bláthy Ottó Titusz Informatikai Technikum</li>
        <li>Címe: 1032 Budapest, Bécsi út 134.</li>
    </ul>

    <p>
        <strong>
            Felhívjuk a figyelmet arra, hogy a központi írásbeli vizsgák jelentkezési lapja CSAK a központi írásbeli vizsgára vonatkozik, nem tévesztendő össze az eljárás későbbi szakaszában használatos felvételi jelentkezési lappal!
        </strong>
    </p>

    <p>
        A leadott jelentkezés után legkésőbb három munkanappal ellenőrizhető a jelentkezés beérkezése és rögzítése a következő hivatkozáson:
    </p>
    <ul>
        <li>
            <a href="#">A BMSZC Bláthy-ban rögzített jelentkezések (elérhető 2022.11.25-től.)</a>
        </li>
    </ul>

    <p>
        A vizsgára való jelentkezésükkel kapcsolatban esetlegesen felmerülő kérdéseiket a felveteli@blathy.info címen email-ben tehetik fel.
    </p>

--}}
<hr>
    <h2 id="szobeli_beosztas">
        Szóbeli felvételi
    </h2>

    <p>
        Iskolánkban a szóbeli felvételiket 2025. március 10-13. között tartjuk, naponta 13:00-tól, külön beosztás szerint.
    </p>

    <p>
        A szóbeli felvételi beosztást 2025.02.27. és 2025.03.04 között fogjuk publikálni, a beérkező jelentkezések feldolgozása után.
    </p>


@endsection

