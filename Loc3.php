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
        <h1>Chalé em Itapipoca</h1>
        <div class="imagens">
            <div class="imgs">
                <img src="./IMAGENS/Ap3.jpg" alt="" class="prc">
                <img src="./IMAGENS/Ap31.jpeg" alt="">
                <img src="./IMAGENS/Ap32.jpeg" alt="">
                <img src="./IMAGENS/Ap33.jpeg" alt="">
                <img src="./IMAGENS/Ap34.jpeg" alt="" class="nll">
            </div>
        </div>
        <h2>Chalé em Itapipoca frente ao mar: Localizado em Itapipoca - CE</h2>
        <h3>R$ 263.00 a diária com café incluso, para casal</h3>
        <p>
        Chalé com acesso há uma Praia paradisíaca e tranquila para descansar. O quarto possui Hidromassagem, ar condicionado, chuveiro elétrico e TV LCD 32 polegadas. Possuímos estacionamento interno para comodidade dos hóspedes.<br>
        Oferece:</p>

        <ul>
            <li>Wi-Fi</li>
            <li>Estacionamento incluído</li>
            <li>Café da manhã</li>
            <li>Piscina</li>
            <li>Jacuzzi privativa</li>
            <li>TV</li>
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