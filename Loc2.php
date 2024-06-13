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
        <h1>Pousada em Paracuru</h1>
        <div class="imagens">
            <div class="imgs">
                <img src="./IMAGENS/Ap2.jpeg" alt="" class="prc">
                <img src="./IMAGENS/Ap21.jpeg" alt="">
                <img src="./IMAGENS/Ap22.jpeg" alt="">
                <img src="./IMAGENS/Ap23.jpeg" alt="">
                <img src="./IMAGENS/Ap24.jpeg" alt="" class="nll">
            </div>
        </div>
        <h2>Pousada de frente ao mar: Localizado em Paracuru - CE</h2>
        <h3>R$ 450.00 a diária com café incluso, 5 pessoas, 2 quartos</h3>
        <p>
        Apartamento completamente mobiliado em um resort à beira mar, ideal para quem gosta de tranquilidade.<br>
        Oferece:</p>

        <ul>
            <li>Área de lazer</li>
            <li>Surf</li>
            <li>Academia</li>
            <li>TV</li>
            <li>Ótima localização</li>
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