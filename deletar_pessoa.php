<html>
<head></head>
<body>
    <?php
        include "crud_pessoa.php";

        $id = $_GET['id'];

        $resultado = deletarPessoa($id);

        if ($resultado === TRUE) {
            echo "Removido com sucesso";
        } else {
            echo $resultado;
        }
    ?>
    <a href="index.php">voltar</a>
</body>
</html>