<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>

<body>
    <?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $result = $num1 + $num2;
    ?>
    <form method="get">
        <input name="num1" type="number">
        <input name="num2" type="number">
        <button type="submit">Enviar </button>

        <?php
        if ($result >= 20) {
            $result = $result + 8;
        } else if ($result <= 20) {
            $result = $result - 5;
        }
        ?>
        <div class="result">
            <?php echo $result ?>
        </div>
    </form>
</body>

</html>