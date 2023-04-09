<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>

<body>
    <?php
    $result = "";
    $mes_t = array(
        '1' => "Janeiro",
        '2' => "Fevereiro",
        '3' => "Março",
        '4' => "Abril",
        '5' => "Maio",
        '6' => "Junho",
        '7' => "Julho",
        '8' => "Agosto",
        '9' => "Setembro",
        '10' => "Outubro",
        '11' => "Novembro",
        '12' => "Dezembro"
    );

    //var_dump($mes_t);
    $num = $_GET['num'];
    $d = $_GET['d'];
    $a = $_GET['a'];


    foreach ($mes_t as $key => $value) {
        if ($num == $key) {
            echo ($d. " de " . $value. " de " . $a);
        }elseif ($num > 12){
            echo ("Esse mes não existe!");
            break;

        }
    }
    ?>

    <form action="">
        <input name="d" type="number" placeholder="Dia">
        <input name="num" type="number"placeholder="Mes">
        <input name="a" type="number" placeholder="Ano">
        <button type="submit">Enviar </button>

    </form>
</body>

</html>