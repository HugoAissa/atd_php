<?php

include('connect.php');


$pequisa = $mysqli->real_escape_string($_GET['pesquisar']);

$sql_code = "SELECT * FROM cadastro WHERE nome LIKE '%$pequisa%'";

$sql_query = $mysqli->query($sql_code);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Busca e Cadastro</title>
</head>

<body>
<form method="POST">
        <input name='nome' type='text' placeholder="Cadastre o nome do Cliente">
        <input name='pedido' type='text' placeholder="Cadastre o pedido">
        <input name='preco' type='number' placeholder="Cadastre o preço">
        <input name='entrega' type='date'>
        <button name='cadstrar' type='submit'>Cadastrar</button> <br><br>
 
    </form>
    <?php
    $conexao = new PDO("mysql:host=localhost;dbname=empresa", 'root', 'root');
    $nome = "";
    $pedido = "";
    $preco = null;
    $entrega = null;

    if (isset($_POST["nome"], $_POST["pedido"], $_POST["preco"], $_POST["entrega"])) {
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
        $pedido = filter_input(INPUT_POST, "pedido", FILTER_SANITIZE_STRING);
        $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_INT);
        $entrega = filter_input(INPUT_POST, "entrega", FILTER_SANITIZE_NUMBER_INT);

        $stm = $conexao->prepare('INSERT INTO cadastro(nome,pedido,preco,entrega) VALUES (:nome,:pedido,:preco,:entrega);');
        $stm->BindParam("nome", $nome);
        $stm->BindParam("pedido", $pedido);
        $stm->BindParam("preco", $preco);
        $stm->BindParam("entrega", $entrega);
        $stm->execute();

    }
    ?>

    <form action="">
        <input name='pesquisar' type="text" placeholder="Digite o nome do cliente">
        <button type='submit'> Pesquisar </button><a href = 'pesquisa.php'> <button>REFRESH</button> </a>  <br>

        <br>

        <table width="600px" border="1">
            <tr>
                <th>Cliente</th>
                <th>Pedido</th>
                <th>Data de entrega</th>
                <th>Preço</th>
            </tr>

            <?php  
                while ($dados = $sql_query->fetch_assoc()){
                if(!isset($_GET['pesquisar'])) {
                }
                ?>


                <tr>
                    <td>
                        <?php echo $dados['nome']; ?>
                    </td>
                    <td>
                        <?php echo $dados['pedido']; ?>
                    </td>
                    <td>
                        <?php echo $dados['entrega']; ?>
                    </td>
                    <td>
                        <?php echo $dados['preco']; ?>
                    </td>
                </tr>
                <?php
            };
            ?>

        </table>
    </form>
</body>

</html>