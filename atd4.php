<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa por ID e Conteudo</title>
</head>
<body>
    <?php
    include('connect_atd4.php');

    $pesquisa = $mysqli->real_escape_string($_GET['pesquisa']);
    $sql_code = "SELECT * FROM pesquisa_n WHERE cont like '%$pesquisa%' OR id_pesquisa LIKE '%$pesquisa%'";
    $sql_query = $mysqli->query($sql_code);
    $cont = "";
    ?>
    <form action="">
        <table width="600px" border="1">
            <tr>
                <th>ID</th>
                <th>Conteudo</th>
            </tr>

            <?php
            while ($dados = $sql_query->fetch_assoc()) {
                if (!isset($_GET['pesquisa'])) {}
                ?>
                <tr>
                    <td>
                        <?php echo $dados['id_pesquisa']; ?>
                    </td>
                    <td>
                        <?php echo $dados['cont']; ?>
                    </td>

                </tr>
                <?php
            }
            ?>
            <input type="text" name="pesquisa" id="" placeholder="Insira o ID ou Nome">
            <button type="submit">Enviar</button>
    </form>

</body>

</html>