<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 </title>
</head>

<body>
    <form method="get">



        <?php
        $sexo = $_GET['sexo'];
        $idade = $_GET['idade'];
        if ($sexo == "Feminino" and $idade >= 25) {
            $result = "ACEITA";
            $nome = $_GET['nome'];

            ?>
            <div class="nome">
                <?php echo $nome ?>
            </div>
            <div class="idade">
                <?php echo $idade ?>
            </div>
            <div class="sexo">
                <?php echo $sexo ?>
            </div>
            <?php

        } else {
            $result = "NÃO ACEITA";
        }




        ?>
        <div class="result">
            <?php echo $result ?>
        </div>

        <input name="nome" type="text" value="">
        <input name="sexo" type="text" value="">
        <input name="idade" type="text" value="">
        <button type="submit">Enviar</button>
    </form>


</body>

</html>