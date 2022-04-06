<html>
<head></head>
<body>
    <?php
        include "crud_pessoa.php";

        $acao = $_GET['acao'];
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];

        if ($acao === "cadastrar") {
            $resultado = adicionarPessoa($nome, $idade);

            if ($resultado === TRUE) {
                echo "Cadastrado com sucesso";
            }

        } else if ($acao === "atualizar") {
            $id = $_GET['id'];
            $resultado = atualizarPessoa($id, $nome, $idade);

            if ($resultado === TRUE) {
                echo "Atualizado com sucesso";
            }
        }
    ?>
    <a href="index.php">voltar</a>
</body>
</html>