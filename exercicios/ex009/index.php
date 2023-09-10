<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício PHP</title>
</head>

<body>

    <?php
    $v1 = $_GET['v1'] ?? 0;
    $v2 = $_GET['v2'] ?? 0;
    ?>

    <main>
        <h1>Somador de Valores</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="idv1" value="<?= $v1 ?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="idv2" value="<?= $v2 ?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php
        $soma = $v1 + $v2;
        echo "<p>$v1 + $v2 = <strong>$soma</strong></p>";
        ?>
    </section>
</body>

</html>