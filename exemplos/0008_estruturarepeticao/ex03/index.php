<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body>
    <form method="get" action="exercicio03.php">
        <p>
            <label for="cinicio">Início:</label>
            <input type="number" name="cinicio">
        </p>
        <p>
            <label for="cfim">Fim:</label>
            <input type="number" name="cfim">
        </p>
        <p>
        <label for="cincremento">Incremento:</label>
            <select name="cincremento" id="tincremento">
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </p>
        <p><input type="submit" value="Calcular"></p>
    </form>
</body>

</html>