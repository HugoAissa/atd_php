<?php
$num_1 = $_GET["num_1"];
$num_2 = $_GET["num_2"];
$result = 0;
if ($num_1 == $num_2) {
    $result = ($num_1 + $num_2) * 3;
} else {
    $result = $num_1 + $num_2;
}

echo($result);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7</title>
</head>

<body>
    <form method="get">
        <input type="number" name="num_1" value="">
        <input type="number" name="num_2" value="">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>