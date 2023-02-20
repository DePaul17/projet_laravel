<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DePaulwin! • Graphe de tranche d'age</title>
        <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
        <link rel="stylesheet" href={{ asset('css/bg.css') }}>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div id="bggraphe_age">
        <div class="col-md-10">
                <div class="content-head">
                    <canvas id="ageChart" width="200" height="100"></canvas>
                </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('ageChart').getContext('2d');
            var ageChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: {!! json_encode($labels) !!},
                    datasets: [{
                        label: 'Nombre de candidats',
                        data: {!! json_encode($values) !!},
                        backgroundColor: [
                            'rgba(0, 128, 128, 0.2)',
                            'rgba(128, 0, 128, 0.2)',
                            'rgba(70, 130, 180, 0.2)'
                        ],
                        borderColor: [
                            'rgba(32, 178, 170, 1)',
                            'rgba(184, 134, 11, 1)',
                            'rgba(160, 82, 45, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
        <script src="/js/sc.js"></script>
        </div>
        </div>
    </body>
</html>
