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
        <h1>Apartamento de alto padrão Meireles</h1>
        <div class="imagens">
            <div class="imgs">
                <img src="./IMAGENS/Ap1.jpeg" alt="" class="prc">
                <img src="./IMAGENS/Ap11.jpeg" alt="">
                <img src="./IMAGENS/Ap12.jpeg" alt="">
                <img src="./IMAGENS/Ap13.jpeg" alt="">
                <img src="./IMAGENS/Ap14.jpeg" alt="" class="nll">
                <img src="./IMAGENS/Ap15.jpeg" alt="" class="nll">
            </div>
        </div>
        <h2>Condomínio fechado: Localizado em Fortaleza - CE</h2>
        <h3>R$ 250.00 a diária pra família, 3/4 pessoas</h3>
        <p>
        Apartamento de alto padrão completo de todos os confortos, a sua casa fora de casa, vista pro mar em prédio novíssimo com academia, piscina, salão de jogos.<br>
        Oferece:</p>

        <ul>
            <li>Wi-Fi</li>
            <li>Estacionamento incluído</li>
            <li>Piscina</li>
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