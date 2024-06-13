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
        <h1>Experiência de Natal</h1>
        <div class="imagens">
            <div class="imgs">
                <img src="./IMAGENS/Ap5.jpg" alt="" class="prc">
                <img src="./IMAGENS/Ap51.jpeg" alt="">
                <img src="./IMAGENS/Ap52.jpeg" alt="">
                <img src="./IMAGENS/Ap53.jpeg" alt="">
                <img src="./IMAGENS/Ap54.jpeg" alt="" class="nll">
            </div>
        </div>
        <h2>Casa do filme "Esqueceram de mim"</h2>
        <h3>R$ 202.00 por hóspede, diária para até 4 pessoas</h3>
        <p>
        Um sonho de Natal que se torna realidade: um ambiente natalino aconchegante com luzes cintilantes e uma linda árvore espera por você no "castelo" dos McCallister (ah, e minha tarântula também! Pode ficar de olho nela para mim?), agora disponível para reserva<br>
        Oferece:</p>

        <ul>
            <li>Ambientação ùnica</li>
            <li>Wi-Fi</li>
            <li>TV</li>
            <li>Lareira</li>
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