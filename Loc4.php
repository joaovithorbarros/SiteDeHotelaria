<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./CSS/Loc.css">
    <link rel="stylesheet" href="./CSS/reset.css">
</head>
<body>
    <header>
        <div class="logo"><a href="http://localhost/SiteDeHotelaria/"><img src="./IMAGENS/SECE-removebg-preview.png" alt="logo-sece" height="100px"></a></div>
        <div onmouseleave="mouseOverIcon()" class="perfil" id="perfil">
            <div class="icone" id="icone">
                <button type="submit" onclick="openBox()" id="botao" class="botao"><img src="./IMAGENS/pessoa-icon.png" alt="perfil-icone" height="50px" id="img"></button>
            </div>
            <div class = "profileBox" id = "profileBox">
                <div class="contentProfileBox" id="contentProfileBox">
                    <div class="a-cadastrar" id="a-cadastrar"><a class="cad" href="cadastro.php">Cadastrar-se</a></div><br>
                    <div class="a-cadastrar" id="a-cadastrar"><a class="cad" href="login.php">Entrar</a></div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <h1>Casa Guaramiranga</h1>
        <div class="imagens">
            <div class="imgs">
                <img src="./IMAGENS/Ap4.jpg" alt="" class="prc">
                <img src="./IMAGENS/Ap41.jpeg" alt="">
                <img src="./IMAGENS/Ap42.jpeg" alt="">
                <img src="./IMAGENS/Ap43.jpeg" alt="">
                <img src="./IMAGENS/Ap44.jpeg" alt="" class="nll">
            </div>
        </div>
        <h2>Casa para família em Guaramiranga, pé de serra. Guaramiranga - CE</h2>
        <h3>R$ 234.00 a diária 234 para 6 pessoas</h3>
        <p>
        Lugar perfeito para relaxar com toda a família ao clima da serra de Guaramiranga, em uma propriedade próxima ao Pico Alto. Local calmo, todo arborizado, fácil acesso e seguro.<br>
        Oferece:</p>

        <ul>
            <li>TV à Cabo</li>
            <li>Wi-Fi </li>
            <li>Churrasqueira</li>
            <li>Cozinha completa</li>
            <li>Lareira</li>
            <li>Garagem</li>
        </ul>
        
        <button type="submit">Reservar</button>
    </section>
    <footer><div class="rodape">
        <p>
            &copy; DireitosAutorais
        </p>
        <p>
            Contato: (85) 993768490
        </p>
    </div></footer>
</body>
</html>