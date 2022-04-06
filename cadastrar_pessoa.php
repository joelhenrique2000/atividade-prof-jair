<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <?php include "crud_pessoa.php" ?>
</head>
<body>
    <?php 
        if ($_GET['acao'] != NULL
                && $_GET['acao'] == "atualizar"
                && $_GET['id'] != NULL
            ) {
            $id = $_GET['id'];
            $pessoa = obterPessoaPorId($id);
            $nome = $pessoa["nome"];
            $idade = $pessoa["idade"];

            echo <<<STR
            <form action="tratar_cadastro_pessoa.php" method="GET">
                <input type='hidden' name='id' value="$id">
                <input type='hidden' name='acao' value="atualizar">
                Nome:<input type="text" name="nome" id="nome" placeholder="nome" value="$nome">
                Idade:<input type="text" name="idade" id="idade" placeholder="idade" value="$idade">
                <button type="submit">Enviar</button>
            </form>
            STR;

        } else {
            echo <<<STR
            <form action="tratar_cadastro_pessoa.php" method="GET">
                <input type='hidden' name='acao' value="cadastrar">
                Nome:<input type="text" name="nome" id="nome" placeholder="nome">
                Idade:<input type="text" name="idade" id="idade" placeholder="idade">
                <button type="submit">Enviar</button>
            </form>
            STR;
        }
    ?>
    <a href="index.php">voltar</a>
</body>
</html>