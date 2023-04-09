<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>

<body>
    <form method="get">
        <input type="number" value="1" name="num_1" placeholder="Numero 1">
        <input type="number" value="1" name="num_2" placeholder="Numero 2">
        <input type="number" value="1" name="num_3" placeholder="Numero 3">
        <button type="submit">Enviar </button><br/><br/>
        <?php
        $number = array($_GET["num_1"], $_GET["num_2"], $_GET["num_3"]);
        rsort($number);
        foreach ($number as $key => $value) {
            echo ($value . "<br/>");
        }
        ?>
   
    </form>
</body>

</html>