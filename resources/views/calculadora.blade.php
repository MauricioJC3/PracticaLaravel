<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="/calcular" method="POST">
        @csrf
        <input type="number" name="num1" required>
        <select name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <input type="number" name="num2" required>
        <button type="submit">Calcular</button>
    </form>

    @if (isset($resultado))
        <h2>Resultado: {{ $resultado }}</h2>
    @endif
</body>
</html>
