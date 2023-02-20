<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DePaulwin! • référentiel</title>
        <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
        <link rel="stylesheet" href={{ asset('css/bg.css') }}>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div id="bgref">
                <div class="container mt-6 col-md-5 " style="border:none;">

                 <br>
                        <p class="text-center bg-secondary" style="font-weight:600; font-size:25px;">Indiquez le référentiel de la formation</p>

                    <div>
                        @foreach ($type->referentiels as $referentiel)
                                <div class="mt-5 text-center">
                                    <a href="/referentiels/{{ $referentiel['id'] }}" class="btn btn-success" style="width:200px;">{{ $referentiel['libelleReferentiel'] }}</a>
                                </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </body>
    <script src="/js/sc.js"></script>
</html>

