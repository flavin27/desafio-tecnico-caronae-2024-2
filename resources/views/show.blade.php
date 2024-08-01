<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Carona</title>
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
            max-width: 1200px;
            margin: 0 auto;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .card img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .card h2 {
            margin-top: 0;
            font-size: 1.5em;
            color: #333;
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
        }
        .button:hover {
            background-color: #0056b3;
        }
        .details {
            margin-top: 20px;
        }
        .details p {
            margin: 5px 0;
        }
        .details .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Detalhes da Carona</h1>
    </div>

    <div class="container">
        <div class="card">
            <div style="display: flex; align-items: center;">
                <img src="{{ $carona->motorista->foto }}" alt="Foto do Motorista">
                <div style="margin-left: 20px;">
                    <h2>{{ $carona->motorista->nome }}</h2>
                    <p><span class="label">Situação:</span> {{ $carona->motorista->situacao }}</p>
                    <p><span class="label">Telefone:</span> {{ $carona->motorista->telefone }}</p>
                </div>
            </div>
            <div class="details">
                <p><span class="label">Local de Partida:</span> {{ $carona->local_partida }}</p>
                <p><span class="label">Local de Chegada:</span> {{ $carona->local_chegada }}</p>
                <p><span class="label">Ponto de Encontro:</span> {{ $carona->ponto_encontro }}</p>
                <p><span class="label">Observações:</span> {{ $carona->observacoes }}</p>
                <p><span class="label">Horário de Partida:</span> {{ $carona->horario_partida }}</p>
                <p><span class="label">Horário de Chegada:</span> {{ $carona->horario_chegada }}</p>
                <p><span class="label">Vagas:</span> {{ $carona->vagas }}</p>
                <p><span class="label">Trajeto:</span> {{ $carona->trajeto }}</p>
                <p><span class="label">Indo:</span> {{ $carona->indo ? 'Sim' : 'Não' }}</p>
            </div>
            <br>
            <a href="{{ url('/') }}" class="button">Voltar para a lista</a>
        </div>
    </div>
</body>
</html>
