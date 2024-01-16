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
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
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
                            <div class="text-center p-5">
                                <img src="{{ asset('assets/img/logos/blathy_felirat.png') }}"
                                     style="width: 100%;"
                                     alt="logo" />

                                @section('sidebar')

                                @show

                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-lg-7 d-lg-flex order-lg-1">
                        <div class="flex-grow-1 bg-login-image bg-login-image-bg" style="overflow: hidden; position: relative; ">
                            <div class="m-5" style="color: black; z-index: 2;">
                                @section('content')

                                @show
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
