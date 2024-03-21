{{-- Központi felvételi beosztás --}}

@extends('layouts.index')

@section('sidebar')

        <h4 class="text-dark mb-4">Előzetes felvételi rangsor</h4>

        @error('msg')
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"
                    aria-label="Bezár"><span
                    aria-hidden="true">×</span></button>
            <span style="font-size: 13px;">{{ $message }}</span>
        </div>
        @enderror
        @isset($updated_at)
            <div class="alert alert-warning" role="alert">
                                            <span
                                                style="font-size: 13px;">Adatok frissítve: <i>{{$updated_at}}</i></span>
            </div>
        @else
            <div class="alert alert-warning" role="alert">
                                            <span
                                                style="font-size: 13px;">Elérhető legkorábban: <i> - 2024.03.22. - </i></span>
            </div>
        @endif

        @if(true)
        <form class="user" method="post" action="{{ route('student.login') }}">
            @csrf
            <div class="form-group">
                <label class="float-left" for="eduId"
                       style="font-size: 13px;padding-left: 15px;"><strong>Oktatási
                        azonosító</strong></label>
                @error('eduId') <small class="text-right text-danger d-block"
                                       style="padding-right: 15px;">{{ $message }}</small> @enderror
                <input
                    class="form-control form-control-user @error('eduId') border-danger @enderror "
                    type="number" id="eduId" placeholder="7XXXXXXXXXX" name="eduid">
            </div>
            <div class="form-group">
                <label class="float-left" for="born"
                       style="font-size: 13px;padding-left: 15px;"><strong>Születési
                        dátum</strong></label>
                @error('born') <small class="text-right text-danger d-block"
                                      style="padding-right: 15px;">{{ $message }}</small>@enderror
                <input
                    class="form-control form-control-user @error('born') border-danger @enderror "
                    id="born" name="born" type="date" pattern="\d{4}-\d{2}-\d{2}"
                    placeholder="éééé-hh-nn"></div>
            <div class="form-group">
                <label class="float-left" for="sign"
                       style="font-size: 13px;padding-left: 15px;"><strong>Jelige</strong></label>
                @error('sign') <small class="text-right text-danger d-block"
                                      style="padding-right: 15px;">{{ $message }}</small>@enderror
                <input
                    class="form-control form-control-user @error('sign') border-danger @enderror "
                    type="text" id="sign" placeholder="ha nem adott meg, hagyja üresen"
                    name="sign">
            </div>
            <button class="btn btn-primary btn-block text-white btn-user mb-3" name="submit"
                    type="submit">Lekérdezés
            </button>

            <a href="#"><i class="fas fa-question-circle float-right"
                           style="padding-bottom: 0;padding-right: 0;"
                           data-toggle="modal"
                           data-target="#help"></i></a>
        </form>
        @endif

        @if(false)
        <hr>
        <h5 class="text-dark">Adminisztrációs felület</h5><a href="{{ route('login') }}"
                                                             class="btn btn-dark btn-block text-white"
                                                             role="button"><i
                class="fab fa-microsoft"></i>&nbsp; Belépés Microsoft 365 fiókkal</a>
        @endif
@endsection

@section('content')
    <h1>Felvételi tájékoztató</h1>

    <p>
        A 2024/2025. tanévben indítani tervezett képzéseink:
    </p>
    <ul>
        <li>
            az általános iskolát a 2023/2024. tanévben befejezőknek a 9. évfolyamtól indulóan 5 éves technikumi képzés az informatika és távközlés ágazatban,
        </li>
        <li>
            mindkét képzési formában a 11. évfolyamtól választhatóan „Szoftverfejlesztő és -tesztelő technikus” vagy „Informatikai rendszer- és alkalmazás-üzemeltető technikus” szakmákban.
        </li>
    </ul>

    <p>
        További információk az alábbi dokumentumokban érhetőek el
    </p>
    <ul>
        <li>
            <a href="/docs/nyilt_2324_Blathy.pdf" target="_blank">
                BMSZC Bláthy - Szórólap
            </a>
        </li>
        <li>
            <a href="/docs/nyilt_2324_Blathy_Taj_Kicsi.pdf" target="_blank">
                BMSZC Bláthy - Rövid tájékoztató
            </a>
        </li>
        <li>
            <a href="/docs/nyilt_2324_BlathyTajReszl.pdf" target="_blank">
                BMSZC Bláthy - Részletes fevételi tájékoztató
            </a>
        </li>
        <li>
            <a href="/docs/nyilt_2324_Prezentacio.pdf" target="_blank">
                BMSZC Bláthy - Nyílt napi prezentáció
            </a>
        </li>
        <!--li>
            <a href="/docs/BMSZC_Blathy_Szobeli%20felveteli_reszletes_tajekoztato_2024.pdf" target="_blank">
                BMSZC Bláthy - Szóbeli felvételi, részletes tájékoztató
            </a>
        </li-->
    </ul>

    <br>

    <ul>
        <li>
            <a href="/docs/FelveteliJegyzek2024.pdf" target="_blank">
                BMSZC Bláthy - Előzetes felvételi jegyzék
            </a>
        </li>
    </ul>

@endsection

