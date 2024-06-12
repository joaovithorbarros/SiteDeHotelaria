<?php
    include("config.php");


    if(isset($_POST['email']) || isset($_POST['senha']))
    {
        if(strlen($_POST['email']) == 0)
        {
            echo "<script>window.alert('Informe o e-mail');</script>";
        }
        else if(strlen($_POST['senha']) == 0)
        {
            echo "<script>window.alert('Informe a senha');</script>";
        }
        else
        {
            $email = $conn->real_escape_string($_POST['email']);
            $senha = $conn->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $conn->query($sql_code) or die($conn->error);

            $quantidade_sql = $sql_query->num_rows;
            if($quantidade_sql == 1)
            {
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION))
                {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: portal.php");
            }
            else
            {
                echo "Login ou senha incorretos";
            }

        }
    }

?>

<!DOCTYPE html>
<html lang="pt-BR" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/form.css">
    <title>Login</title>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary h-100">
    <main class="w-100 m-auto form-container">
    <form action="" method="POST">
        <img src="./IMAGENS/SECE.png" class="mb-4" height="150" width="250" />
        <h1 class="h3 mb-3 fw-normal">Fazer login</h1>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="your-email@gmail.com" name="email">
            <label for="floatingInput">E-mail</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingInput" placeholder="your-email@gmail.com" name="senha">
            <label for="floatingInput">Senha</label>
        </div>
        <button class="btn btn-primary w-100 py-2">Entrar</button>
    </form>
    </main>
    <script src="./JS/bootstrap.bundle.min.js"></script>
</body>
</html>