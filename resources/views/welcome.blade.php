<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <script src="https://kit.fontawesome.com/3f087d4b59.js"></script>
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">

        <title>Bible Encouragements</title>
        <!-- Styles -->
        <link rel="icon" href="{{ URL::asset('/css/favicon-96x96.png') }}" type="image/x-icon"/>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    </head>
    <body style="background-color: #6f0021 !important; height:100%">
        <div class="container-fluid h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12 ">
                    <div class="card text-center mx-auto align" style="width: 500px !important">
                        <div class="card-body">
                            <img src="{{asset('/storage/be.jpg')}}" alt="malasakit-logo" height="120px">
                                <p class="text-muted font-italic">...THIS SITE WILL BE ENCOURAGING SOON...</p>
                                <div class="d-flex flex-row justify-content-center px-3">
                                    <a class="mx-2" href="https://www.facebook.com/biblencourage" style="text-decoration: none !important; color: #6f0021; font-size:24px" ><i class="fab fa-facebook fa-lg"></i></a>
                                    <a class="mx-2" href=" https://twitter.com/biblencourage" style="text-decoration: none !important; color: #6f0021; font-size:24px" ><i class="fab fa-twitter fa-lg"></i></a>
                                    <a class="mx-2" href="https://www.instagram.com/biblencourage" style="text-decoration: none !important; color: #6f0021; font-size:24px" ><i class="fab fa-instagram fa-lg"></i></a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
