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
                    <p class="text-success d-inline m-0 font-weight-bold">Szóbeli felvételire beosztott tanuló</p>
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

                    {{--
                    <tr>
                        <th>Oktatási azonosító:</th>
                        <td style="color: whitesmoke;">{{$student->edu_id}}</td>
                    </tr>
                    --}}
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-center">

        </div>
    </div>
    @if($student->verbalSchedule != NULL)
        <div class="card shadow my-5 border-left-primary">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-auto align-self-center"><i
                            class="fas fa-list bg-primary border rounded-circle shadow"
                            style="padding: 10px;font-size: 20px;color: var(--white);"></i></div>
                    <div class="col align-self-center">
                        <p class="text-primary d-inline m-0 fw-bold"><strong>Szóbeli felvételi információk</strong></p>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <div class="card-text">
                    @if($student->verbalSchedule->szobelizhet == "szóbeli")
                        Vizsga terem: <strong> {{$student->verbalSchedule->szobeli_bizottsag}} </strong> <br>

                        Megjelenés időpontja: <strong>
                            {{$student->verbalSchedule->szobeli_datum}}
                            {{$student->verbalSchedule->szobeli_idosav}}
                        </strong>
                    @elseif($student->verbalSchedule->szobelizhet == "FELMENTVE")
                        A tanuló a központi felvételin elért pontszámnak és a hozott pontoknak köszönhetően felmentésre került a
                        szóbeli felvételi alól.
                        <br>
                        A szóbeli értékelésre a legmagasabb ponszámot kapja.
                    @elseif($student->verbalSchedule->szobelizhet == "#ÉRTÉK!")
                        Nem teljesítette a felvételi követelményeket, így nem került beosztásra!
                    @endif
                </div>

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
                        <p class="text-primary d-inline m-0 fw-bold"><strong>Szóbeli felvételi beosztás</strong></p>
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
