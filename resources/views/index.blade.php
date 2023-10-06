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
    <style>
        .bg-login-image-bg::before{
            content: "";
            background-image: url('{{ asset("assets/img/art.jpg") }}');
            background-size: cover;
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            opacity: 0.2;
            z-index: -1;
        }
    </style>
</head>

<body class="bg-gradient-light">
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card-body p-0 my-5 shadow-lg o-hidden border-0">
                <div class="row">

                    <div class="col-12 col-lg-5 order-lg-2">
                        <div class="p-0">
                            <div class="text-center p-5"><img src="{{ asset('assets/img/logos/blathy_felirat.png') }}"
                                                              style="width: 100%;">

                                @if(false)
                                    <h4 class="text-dark mb-4">Felvételi jegyzék</h4>

                                    @error('msg')
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Bezár"><span
                                                aria-hidden="true">×</span></button>
                                        <span style="font-size: 13px;">{{ $message }}</span>
                                    </div>
                                    @enderror
                                    @if(false)
                                        <div class="alert alert-warning" role="alert">
                                            <span
                                                style="font-size: 13px;">Adatok frissítve: <i>{{$updated_at}}</i></span>
                                        </div>
                                    @endif
                                    @if(true)
                                        <div class="alert alert-warning" role="alert">
                                            <span
                                                style="font-size: 13px;">Adatok frissítve: <i>2023.03.17. 13:30</i></span>
                                        </div>
                                    @endif


                                    <form class="user" method="post" action="{{ route('result.login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="float-left" for="eduId"
                                                   style="font-size: 13px;padding-left: 15px;"><strong>Oktatási
                                                    azonosító</strong></label>
                                            @error('eduId') <small class="text-right text-danger d-block"
                                                                   style="padding-right: 15px;">{{ $message }}</small> @enderror
                                            <input
                                                class="form-control form-control-user @error('eduId') border-danger @enderror "
                                                type="number" id="eduId" placeholder="7XXXXXXXXXX" name="eduId">
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
                                            <label class="float-left" for="born"
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
                                                       style="padding-bottom: 0px;padding-right: 0px;"
                                                       data-toggle="modal"
                                                       data-target="#help"></i></a>
                                    </form>
                                    <hr>
                                    <h5 class="text-dark">Adminisztrációs felület</h5><a href="{{ route('login') }}"
                                                                                         class="btn btn-dark btn-block text-white"
                                                                                         role="button"><i
                                            class="fab fa-microsoft"></i>&nbsp; Belépés Microsoft 365 fiókkal</a>

                                @endif
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h5 class="card-title">Nyílt nap</h5>
                                        <p class="card-text">
                                            Amennyiben szívesen megnéznék, hogy milyen órákkal, oktatókal
                                            találkozhatnak iskolánkban, vagy akár az épületre kíváncsiak, esetleg
                                            személyesen tennének fel pár kérdést, várjuk önöket reigsztrációhoz
                                            kötött nyiltnapunkon!
                                        </p>
                                        <a href="https://forms.office.com/e/F0hDsXLvWQ" target="_blank"
                                           class="card-link btn btn-block btn-info">
                                            Nyílt nap
                                            regisztráció</a>
                                    </div>
                                </div>

                                <div class="card mt-5">
                                    <div class="card-body">
                                        <h5 class="card-title">Továbbtanulási szülői értekezlet</h5>
                                        <p class="card-text">Amennyiben szívesen meghallgatná a képzéshez kapcsolódó
                                            információkat és kérdezne a részletekről Madarász Péter igazgató úrtól,
                                            várjuk önt a regisztrációhoz kötött továbbtanulási szülői
                                            értekezletünkön!</p>
                                        <a href="https://forms.office.com/e/F0hDsXLvWQ" target="_blank"
                                           class="card-link btn btn-block btn-info">
                                            Szülői értekezlet regisztráció
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-lg-7 d-lg-flex order-lg-1">
                        <div class="flex-grow-1 bg-login-image bg-login-image-bg" style="overflow: hidden; position: relative; ">
                            <div class="m-5" style="color: black; z-index: 2;">

                                <h1>Felvételi Információk</h1>

                                <h2>Nyílt napok</h2>

                                <p>2023. október 25-27-én és november 8-9-én nyílt napokat tartunk. A résztvevők
                                    bejárhatják
                                    az iskolát, bemutató órákat tekinthetnek meg, kérdéseket tehetnek fel. Az érdeklődő
                                    nyolcadikosoknak iskolánk tanárai egyebek mellett programozás és hálózatok
                                    számítógéptermi szakmai órákat tartanak. Ezeken az órákon a feladatok elvégzését –
                                    szükség esetén – az iskolánk tanulói segítik.</p>

                                <p>A nyílt napokon történtő részvétel regisztrációhoz kötött, ezért kérjük, az alábbi
                                    "Regisztráció" linkeken jelezzék részvételi szándékukat!</p>

                                <p>
                                    További információk az alábbi dokumentumokban érhetőek el

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
                                        BMSZC Bláthy - Részletes fevételi tájékoztató (Hamarosan..)
                                    </li>
                                </ul>

                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" role="dialog" tabindex="-1" id="help">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Segítség</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <p>Lekérdezéshez a következő adatokra van szükség:</p>
                <div class="table-responsive table-borderless">
                    <table class="table table-bordered">
                        <thead style="border-bottom-style: solid;">
                        <tr>
                            <th style="border-right-width: 1px;border-right-style: solid;width: 25%;">Mezőnév</th>
                            <th>Várt adat</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr style="border-bottom-width: 1px;border-bottom-style: solid;">
                            <th style="border-right-width: 1px;border-right-style: solid;">Oktatási azonosító</th>
                            <td>11 számjegyből áll, 7-tel kezdődik (megtalálható a diákigazolványon)</td>
                        </tr>
                        <tr style="border-bottom-width: 1px;border-bottom-style: solid;">
                            <th style="border-right-width: 1px;border-right-style: solid;">Születési dátum</th>
                            <td>A tanuló születési ideje</td>
                        </tr>
                        <tr>
                            <th style="border-right-width: 1px;border-right-style: solid;">Jelige</th>
                            <td>A jelentkezési lapon lehetett megadni, amennyiben nem adott meg, akkor hagyja üresen
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-center">Amennyiben további segítségre van szüksége, írjon a&nbsp;<a
                        href="mailto:felveteli@blathy.info">felveteli@blathy.info</a>&nbsp;címre.<br></p>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/chart.min.js') }}"></script>
<script src="{{ asset('assets/js/bs-init.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>
</body>
</html>
