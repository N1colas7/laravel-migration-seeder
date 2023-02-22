<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel-Migration-Seeder</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @foreach($train as $item)
    <div class="container">
        <div class="card">
            <p>azienda:{{ $item['azienda']}}</p>
            <p>orario-partenza:{{ $item['orario_partenza']}}</p>
            <p>orario-arrivo:{{ $item['orario_arrivo']}}</p>
            <p>stazione-partenza:{{ $item['stazione_partenza']}}</p>
            <p>stazione-partenza:{{ $item['stazione_arrivo']}}</p>
            <p>codice-treno:{{ $item['codice_treno']}}</p>
            <p>num-carrozze:{{ $item['num_carrozze']}}</p>
            <p>In orario:{{ $item['in_orario']}}</p>
        </div>
    </div>    
    @endforeach

</body>

</html>