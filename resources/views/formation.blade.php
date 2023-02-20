<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DePaulwin! • formations</title>
        <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
        <link rel="stylesheet" href={{ asset('css/bg.css') }}>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div id="bgformation">
        <br><br><br><br><br><br>
                   <div class="container">
                    <div class="bg-secondary text-center mt-6 ">
                        <h2>Formations en {{ $referenciel['libelleReferentiel'] }}</h2>
                    </div>

                <div class="row">
                    @foreach ($referenciel->formations as $formation)
                        <div>
                            <div class="col-md-5" > <h5>{{ $formation['nomFormation'] }}</h5> </div>
                            <br>
                            <div class="col-md-5" > <b>Durée:</b> {{ $formation['duree'] }} mois</div>
                            <br>
                            <div class="col-md-5" > <b>Description:</b> {{ $formation['description'] }}</div>
                            <br>
                            <div class="col-md-5" > <a href="/formations/{{ $formation['id'] }}" class="btn btn-success" style="width:200px;"> Postuler ici </a> </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>    
    </body>
    <script src="/js/sc.js"></script>
</html>
