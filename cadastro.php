<h1>Cadastro</h1>
<?php
    include("config.php");
?>
<link rel="stylesheet" href="./CSS/bootstrap.min.css">
<form action="salvar.php" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">E-mail</label> <!--campo tipo email valida o '@' -->
        <input type="text" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Senha</label> <!--campo tipo senha esconde o que é digitado -->
        <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Data de Nascimento</label>
        <input type="date" name="data-nasc" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>

<script src="./JS/bootstrap.bundle.min.js"></script>