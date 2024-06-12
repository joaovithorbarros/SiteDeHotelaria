<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="pt-BR" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/form.css">
    <title>Cadastro</title>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary h-100">
    <main class="w-100 m-auto form-container-cad">
        <form action="salvar.php" method="POST" class="text-center">
            <div class="text-center">
                <input type="hidden" name="acao" value="cadastrar">
                <img src="./IMAGENS/SECE.png" class="mb-4" height="150" width="250" />
            </div>
            <h1 class="h3 mb-3 fw-normal">Cadastre-se</h1>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="your-email@gmail.com" name="nome" required>
            <label for="floatingInput">Nome</label> 
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="your-email@gmail.com" name="email">
            <label for="floatingInput">E-mail</label required>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingInput" placeholder="your-email@gmail.com" name="senha" required>
            <label for="floatingInput">Senha</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="floatingInput" placeholder="your-email@gmail.com" name="data-nasc" required>
            <label for="floatingInput">Data de Nascimento</label>
            </div>
            <button class="btn btn-primary w-50 py-2 ">Salvar</button>
        </form>
    </main>
<script src="./JS/bootstrap.bundle.min.js"></script>
</body>
</html>