<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verdadeiro ou Falso</title>
</head>

<body>

    <?php



    ?>
    <form method="get">
        <input type="checkbox" name="v" id="">v <input type="checkbox" name="f" value="off" id=""> f <br>

        <input type="checkbox" name="v2" id="">v <input type="checkbox" name="f2" value="off" id=""> f<br>


        <button type="submit">Enviar </button>

    </form>
    <?php

    /*if ($v =="on" ) {           
    $cont++;
    }*/
    //ou
    
    /*switch ($v == "on") {
    case 'on':
    $cont++;
    break;
    }*/


    $v = array($_GET['v'], $_GET['v2']);
    $arr = array_count_values($v);
        foreach ($arr as $key => $value) {
            if ($value > 0) {
                echo 'Total de Acertos ' . $value . '<br>';
            }
        }

    $f = array($_GET['f'], $_GET['f2']);
    $arr2 = array_count_values($f);

        foreach ($arr2 as $key2 => $value2) {
            if ($value2 > 0) {
                echo 'Total de Erros ' . $value2 . '<br>';
            }
        }
    








    ?>


</body>

</html>