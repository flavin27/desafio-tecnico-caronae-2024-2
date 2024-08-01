<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Caronas</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Adicione seu CSS aqui -->
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            background-color: #f4f4f4;
        }
        h2 {
            text-align: center;
        }
        .navbar {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .navbar h1 {
            margin: 0;
        }
        .container {
            flex: 1; /* Faz com que o container ocupe todo o espaço restante */
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card h2 {
            margin-top: 0;
            font-size: 1.5em;
            color: #333;
        }
        .card p {
            margin: 5px 0;
            color: #555;
        }
        .card .details {
            margin: 10px 0;
        }
        .button {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1em;
            transition: background-color 0.3s ease;
            margin-top: auto; /* Faz com que o botão fique na parte inferior do card */
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Lista de Caronas</h1>
    </div>

    <div class="container">
        @foreach($caronas as $key => $carona)
            <div class="card">
                <h2>{{ $carona->motorista->nome }}</h2>
                <div class="details">
                    <p><strong>Partida:</strong> {{ $carona->local_partida }}</p>
                    <p><strong>Chegada:</strong> {{ $carona->local_chegada }}</p>
                    <p><strong>Partida às:</strong> {{ $carona->horario_partida }}</p>
                    <p><strong>Chegada às:</strong> {{ $carona->horario_chegada }}</p>
                    <p><strong>Vagas: {{$carona->vagas}}</strong></p>
                </div>
                <a href="{{ route('caronas.show', $key) }}" class="button">Ver Detalhes</a>
            </div>
        @endforeach
    </div>
</body>
</html>
