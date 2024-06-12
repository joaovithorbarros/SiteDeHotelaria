<?php
    include("config.php");


    if(isset($_POST['email']) || isset($_POST['senha']))
    {
        if(strlen($_POST['email']) == 0)
        {
            echo "Informe o email";
        }
        else if(strlen($_POST['senha']) == 0)
        {
            echo "Informe a senha";
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Email:</label>
        <input type="text" name="email"><br><br>
        <label for="">Senha:</label>
        <input type="password" name="senha"><br><br>
        <button type="submit">OK!</button>
    </form>
</body>
</html>