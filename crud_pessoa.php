<?php
    $conn = null;

    function conexao() {
        $servername = "localhost";
        $username = "root";
        $password = "";

        $connection = new mysqli($servername, $username, $password);

        if ($connection->connect_error) {
            die("Não pegou" . $connection->connect_error);
        }

        return $connection;
    }

    function obterPessoaPorId($id) {
        $conn = conexao();

        $sql = <<<STR
            SELECT id, nome, idade FROM meubanco.pessoa WHERE id = $id;
        STR;
        
        $resultado = $conn->query($sql);


        if($resultado->num_rows > 0) {
            return $resultado->fetch_array(MYSQLI_ASSOC);
        } else {
            return NULL;
        }
    }

    function listarTodosPessoas() {
        
        $conn = conexao();

        $sql = <<<STR
            SELECT id, nome, idade FROM meubanco.pessoa;
        STR;

        $resultado = $conn->query($sql);

        if($resultado->num_rows > 0) {
            return $resultado;
        } else {
            return NULL;
        }
    }

    function adicionarPessoa($nome, $idade) {
        $conn = conexao();

        $sql = <<<STR
            INSERT INTO meubanco.pessoa (nome, idade) VALUES ('$nome', $idade);
        STR;

        if ($conn -> query($sql) === true) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return $conn->error;
        }
    }

    function deletarPessoa($id) {
        $conn = conexao();

        $sql = <<<STR
            DELETE FROM meubanco.pessoa where id = $id;
        STR;

        $resultado = $conn -> query($sql);
        if ($resultado === true) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return $conn->error;
        }

    }

    function atualizarPessoa($id, $nome, $idade) {
        $conn = conexao();

        $sql = <<<STR
            UPDATE meubanco.pessoa SET nome = '$nome', idade = $idade WHERE id = $id;
        STR;

        $resultado = $conn -> query($sql);

        if ($resultado === true) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return $conn->error;
        }
    }
?>