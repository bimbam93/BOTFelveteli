<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Felvételi - Bláthy</title>
    <link rel="icon" href="{{ asset('assets/img/logos/blathy_icon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome5-overrides.min.css') }}">
</head>

<body class="bg-gradient-light">
<nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
    <div class="container-fluid"><img src="{{ asset('assets/img/logos/blathy_felirat.png') }}"
                                      style="min-width: 100px;max-width: 15%;"><a
            class="navbar-brand d-none d-md-inline">- Felvételi tájékoztató felület</a>
        <ul class="navbar-nav flex-nowrap ml-auto">
            <div class="d-none d-sm-block topbar-divider"></div>
            <li class="nav-item"><a href="{{ route('logout') }}" class="btn btn-secondary btn-icon-split" role="button"><span
                        class="text-white text">Kilépés</span><span class="text-white-50 icon"><i
                            class="fas fa-sign-out-alt"></i></span></a></li>
        </ul>
    </div>
</nav>
<div class="container" style="max-width: 750px;">

    <div class="card shadow my-5 border-left-success">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-auto align-self-center"><i
                        class="fa fa-file-text bg-success border rounded-circle shadow"
                        style="color: var(--white);padding: 10px;font-size: 20px;"></i></div>
                <div class="col align-self-center">
                    <p class="text-success d-inline m-0 font-weight-bold">Központi felvételire jelentkezett tanuló</p>
                </div>
            </div>
        </div>
        <div class="card-body" style="padding-bottom: 5px;">
            <p class="text-center card-text">Az alábbi tanuló jelentkezése beérkezett az intézményünkben:</p>
            <div class="table-responsive table-borderless text-left">
                <table class="table table-bordered table-sm">
                    <tbody>
                    <tr>
                        <th style="width: 30%;">Név:</th>
                        <td>{{$student->name}}</td>
                    </tr>
                    <tr>
                        @if($student->born_place == "")
                            <th>Születési idő:</th>
                            <td>{{date("Y.m.d.", strtotime($student->born_date))}}</td>
                        @else
                            <th>Születési hely, idő:</th>
                            <td>{{$student->born_place}}, {{date("Y.m.d.", strtotime($student->born_date))}}</td>
                        @endif
                    </tr>
                    <tr>
                        <th>Oktatási azonosító:</th>
                        <td style="color: whitesmoke;">{{$student->edu_id}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-center">

        </div>
    </div>
    @if($student->centralAdmission != NULL)
        <div class="card shadow my-5 border-left-primary">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-auto align-self-center"><i
                            class="fas fa-list bg-primary border rounded-circle shadow"
                            style="padding: 10px;font-size: 20px;color: var(--white);"></i></div>
                    <div class="col align-self-center">
                        <p class="text-primary d-inline m-0 fw-bold"><strong>Központi felvételi információk</strong></p>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <div class="card-text">

                    Vizsga terem: <strong> {{$student->centralAdmission->room}} </strong> <br>

                    Megjelenés időpontja: <strong> 2024.01.20 09:30 </strong> <br>

                    @if($student->centralAdmission->spec == 1)
                        <br>
                        @if($student->centralAdmission->math_extra_time > 0 || $student->centralAdmission->lit_extra_time > 0)
                            Többletidő:
                            <ul>
                                @if($student->centralAdmission->math_extra_time > 0)
                                    <li>Matematika: <strong>{{$student->centralAdmission->math_extra_time}}</strong>
                                        perc
                                    </li>
                                @endif
                                @if($student->centralAdmission->lit_extra_time > 0)
                                    <li>Magyar nyelv: <strong>{{$student->centralAdmission->lit_extra_time}}</strong>
                                        perc
                                    </li>
                                @endif
                            </ul>
                        @endif
                        @if($student->centralAdmission->lit_extra_text_editor == 1 ||
                            $student->centralAdmission->math_extra_text_editor == 1 ||
                            $student->centralAdmission->math_extra_calc == 1)
                            További használható eszközök:
                            <ul>
                                @if($student->centralAdmission->lit_extra_text_editor == 1)
                                    <li>
                                        Magyar nyelv - Szövegszerkesztő
                                    </li>
                                @endif
                                @if($student->centralAdmission->math_extra_text_editor == 1)
                                    <li>
                                        Matematika - Szövegszerkesztő
                                    </li>
                                @endif
                                @if($student->centralAdmission->math_extra_calc == 1)
                                    <li>
                                        Matematika - Számológép
                                    </li>
                                @endif
                            </ul>
                        @endif
                    @endif

                    @if($student->centralAdmission->math_low_maxpoint || $student->centralAdmission->math_low_maxpoint)
                        Mentesül az értékelés egy része alól
                        <ul>
                            @if($student->centralAdmission->math_low_maxpoint)
                                <li>Matematikából</li>
                            @endif
                            @if($student->centralAdmission->lit_low_maxpoint)
                                <li>Magyar nyelvből</li>
                            @endif
                        </ul>
                    @endif

                </div>

                <p class="card-text">
                    Az írásbeli vizsga során a dolgozat megírásakor a rajzokat ceruzával, minden egyéb írásbeli
                    munkát
                    kék vagy fekete színű tintával kell
                    elkészíteni.
                    <br>
                    A magyar nyelvi feladatlapok kitöltéséhez segédeszköz nem használható.
                    <br>
                    A matematika feladatlapok kitöltéséhez rajzeszközökön (vonalzó, körző, szögmérő) kívül más
                    segédeszköz (pl. zsebszámológép) nem
                    használható.
                </p>

                A vizsgára feltétlenül hozza magával a következőket:
                <ul>
                    <li>személyazonosítására alkalmas igazolványt – diákigazolványt vagy személyi igazolványt,
                    </li>
                    <li>Vizsgabehívó értesítőt.</li>
                </ul>

                <h5>Megtekintés</h5>
                <p class="card-text">
                    Az írásbeli vizsga kiértékelt dolgozatait a vizsgázó és szülője az iskola képviselőjének
                    jelenlétében, az igazgató
                    által meghatározott helyen és időben megtekintheti, azokról kézzel vagy elektronikus úton
                    másolatot
                    készíthet, és – kizárólag a hivatalos
                    javítási-értékelési útmutatótól eltérő értékelés esetén – az értékelésre észrevételt tehet.
                </p>
                <p class="card-text">
                    A megtekintéshez – az adott írásbeli vizsgát követő nyolc napon belül – egy munkanapot
                    (nyolc
                    órát)
                    biztosít az iskola. A vizsgázó
                    észrevételeit a megtekintést követő első munkanap végéig – tizenhat óráig – írásban adhatja
                    le.
                    Az
                    észrevétel benyújtására nyitva álló
                    határidő elmulasztása esetén egy napon belül lehet igazolási kérelmet benyújtani. Az
                    igazolási
                    kérelem benyújtási határideje jogvesztő.
                </p>

                A megtekintés helyszíne és időpontja:
                <ul>
                    <li>Díszterem</li>
                    <li>2024.01.26. 8:00-16:00</li>
                </ul>

            </div>
            <div class="card-footer text-center">
                <p class="text-center" style="margin-bottom: 0px;">A felvételivel kapcsolatos kérdéseket a <a
                        href="mailto:felveteli@blathy.info"><strong>felveteli@blathy.info</strong></a> címre várjuk!</p>
            </div>
        </div>
    @else
        <div class="card shadow my-5 border-left-primary">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-auto align-self-center"><i
                            class="fas fa-list bg-primary border rounded-circle shadow"
                            style="padding: 10px;font-size: 20px;color: var(--white);"></i></div>
                    <div class="col align-self-center">
                        <p class="text-primary d-inline m-0 fw-bold"><strong>Központi felvételi jelentkezés</strong></p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (true)
                    <p class="lead text-center text-uppercase card-text"><strong>Beosztás folyamatban!</strong><br/></p>
                @endif
            </div>
            <div class="card-footer text-center">
                <p class="text-center" style="margin-bottom: 0px;">A felvételivel kapcsolatos kérdéseket/kéréseket a <a
                        href="mailto:felveteli@blathy.info"><strong>felveteli@blathy.info</strong></a> címre kell
                    megküldeni!</p>
            </div>
        </div>
    @endif

</div>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/chart.min.js') }}"></script>
<script src="{{ asset('assets/js/bs-init.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>
</body>
</html>
