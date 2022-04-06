<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "crud_pessoa.php" ?>
</head>

<body>

    <a href="cadastrar_pessoa.php?acao=cadastrar">Cadastrar pessoa</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
        <?php
            $pessoas = listarTodosPessoas();
            if ($pessoas !== NULL) {
                while ($linha = $pessoas->fetch_assoc()) {
                    echo "
                        <tr>
                            <td>".$linha["nome"]."</td>
                            <td>".$linha["idade"]."</td>
                            <td><a href='cadastrar_pessoa.php?acao=atualizar&id=".$linha["id"]."'>editar</a></td>
                            <td><a href='deletar_pessoa.php?id=".$linha["id"]."'>deletar</a></td>
                        </tr>
                    ";
                }
            }
        ?>
    </table>
    
</body>

</html>