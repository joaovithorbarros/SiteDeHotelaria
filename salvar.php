<?php
    include("config.php");
    switch ($_REQUEST["acao"]) {
        case "cadastrar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data-nasc"];
            
            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            $res = $conn->query($sql);

            if($res)
            {
                print "<script>alert('Cadastro realizado com sucesso');</script>";
                print "<script>window.location.href = 'index.php';</script>";
            }
            else
            {
                print "<script>alert('Cadastro não realizado!');</script>";
                print "<a href='index.php' class='btn btn-primary'>Voltar</a>";
            }
        break;

        case "editar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data-nasc"];

            $sql = "UPDATE usuarios SET
                        nome = '{$nome}',
                        email = '{$email}',
                        senha = '{$senha}',
                        data_nasc = '{$data_nasc}'
                    WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res)
            {
                print "<script>alert('Editado com sucesso');</script>";
                print "<script location.href='page=listar'>;</script>";
            }
            else
            {
                print "<script>alert('Não foi possivel editar');</script>";
                print "<script location.href='page=listar'>;</script>";
            }
        break;

        case "excluir":
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res)
            {
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script location.href='page=listar'>;</script>";
            }
            else
            {
                print "<script>alert('Não foi possivel excluir!');</script>";
                print "<script location.href='page=listar'>;</script>";
            }
        break;

        default:
        break;
    }