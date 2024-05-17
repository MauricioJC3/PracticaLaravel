<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Peso Corporal</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: 'Figtree', sans-serif;
            font-size: 20px;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
        }
        .container {
            text-align: center;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container input, .container button {
            font-size: 16px;
            padding: 10px;
            margin: 10px;
            width: 80%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Peso Corporal (IMC)</h1>
        <form action="/calcular-imc" method="POST">
            @csrf
            <input type="number" step="0.01" name="peso" placeholder="Peso en kg" required>
            <input type="number" step="0.01" name="altura" placeholder="Altura en metros" required>
            <button type="submit">Calcular IMC</button>
        </form>

        @if (isset($imc))
            <h2>Tu IMC es: {{ number_format($imc, 2) }}</h2>
            <p>
                @if ($imc < 18.5)
                    Bajo peso
                @elseif ($imc < 24.9)
                    Peso normal
                @elseif ($imc < 29.9)
                    Sobrepeso
                @else
                    Obesidad
                @endif
            </p>
        @endif
    </div>
</body>
</html>
