<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body>
    <form method="get" action="exercicio02.php">
        <?php
        $i = 1;
        while ($i <= 5) {
            echo "<p><label for=\"v$i\">Valor:</label><input type=\"number\" name=\"v$i\" min=\"2\" max=\"8\" required></p>";
            $i++;
        }
        ?>
        <p><input type="submit" value="Calcular"></p>
    </form>
</body>

</html>