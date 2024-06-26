<?php
    include("protect.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SECE | Experiências e hospedagem</title>
    <link rel="stylesheet" href="./CSS/portal.css">
    <link rel="stylesheet" href="./CSS/reset.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./IMAGENS/favicon.ico" type="image/x-icon">
</head>

<body>
    <header>
        <div class="logo"><a href="#"><img src="./IMAGENS/SECE-removebg-preview.png" alt="logo-sece" height="100px"></a></div>
        <div class="acoexp">
            <div class="contorno_aco" id="a-aco">
                <div class="aco"> <a onclick="cl()">Acomodações</a> </div> 
            </div>
            <div class="contorno_exp" id="a-exp">
                <div class="exp"> <a onclick="ct()">Experiências</a> </div>
            </div>
        </div>
        <div onmouseleave="mouseOverIcon()" class="perfil" id="perfil">
            <div class="icone" id="icone">
                <button type="submit" onclick="openBox()" id="botao" class="botao"><img src="./IMAGENS/icon_azul.png" alt="perfil-icone" height="50px" id="img"></button>
            </div>
            <div class = "profileBox" id = "profileBox">
                <div class="contentProfileBox" id="contentProfileBox">
                    <div class="c-exit" id="i-exit"><a class="c-exit" href="logout.php">Sair</a></div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="pesquisa">
            <div class="destino">
                <div class="onde">Onde</div>
                <div class="Bdestino">Buscar destinos</div>
            </div>
            <div class="borda-inv">
                <div class="binv"></div>
            </div>
            <div class="hospede">
                <div class="quem"> Quem </div>
                <div class="hospedes">Hóspedes?</div>
            </div>
            <div class="contorno-lupa">
                <div class="lupa">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAd5JREFUSEu11cvLTWEUx/HPGxnIpSiXiZAwcIuSAQpFL2XqUgxIURhQBv4AMiEhDCgk5Q+Q0VsImSAlopTIgFwi9+uz6nl1HO/e5xnssya7zn7O+j5rrd9v7R5djp4u51cHmIB1WInZ+SJ3cAkX8LzkcgMBRuAcVtck+I2L2IRPdaB2wFDcwgx8xUkcxpOcZDJ2YQuG5LOL8L0K0g44iw14hhV4UPHHWbicLjAeB7G7BDAT9/Aj9Xk+ot91sRhX8A2T8GKgw60VHMF2HMWOkgHiPNYnyF7s7wR4jCm5//cLAUvQh2vpGRX9F60VfEQMeRB+FQJGpWpf4w1GdwK8x3AMQ8BKIs5+wCuM6QS4mw01L3ngdkn2pKQFSW03c5uWdQIcSKbZgxPYVgg4kzyyMbUnBLKzE2AqHuJnoUzDYFdz0sqq2412Ktv/KZYnCT6qqGRONtrY7PatJUaLM62r4guO41B2dryPKmNVbMbgnDRmEK6PYdfKtP/lyGygVTVzeJd20b7U0rWYm12/FPH7P1G3ridml/Yids/nrK4bOIa3CB+E0WKdhwpDSeGJv9HEBycg1zEdsQ0W4mU/oQlA5AqThaKm5fmcbhoQ+cal9b4mfz8abVGtJ5tqUSWk64A/OxFWGSrrSC8AAAAASUVORK5CYII="/>
                </div>
            </div>
        </div>
        <div class="icones">
            <div class="icones1">
                <img src="./IMAGENS/pontos-turisticos.png" alt="" width="30" height="30">
                <p>Pontos Turísticos</p>
            </div>
            <div class="icones2">
                <img class="img1" src="./IMAGENS/roda-gigante.png" alt="" width="30" height="30" >
                <p>Diversões</p>
            </div>
            <div class="icones3">
                <img src="./IMAGENS/restaurante1.png" alt="" width="30" height="30">
                <p>Restaurantes</p>
            </div>
        </div>
        <div class="conteudoh">
            <div class="box">
                <img src="./IMAGENS/Ap1.jpeg" alt="">
                <p>Apartamento Meireles - Fortaleza</p>

            </div>
            <div class="box">
                <img src="./IMAGENS/Ap2.jpeg" alt="">
                <p>Pousada em Paracuru</p>
                
            </div>
            <div class="box">
                img
                nome
                
            </div>
            <div class="box">
                img
                nome
                
            </div>
        </div>
    </section>

    <footer>
        <div class="rodape"><p>&copy; DireitosAutorais</p></div>
    </footer>
    <div class="janela-modal" id="ijanela-modal">
        <div class="modal">
            <button onclick="sairModal()" class="fechar" id="fechar">X</button>
            <h1>Login</h1>
            <form action="./JS/cadastro.js">
            </form>
        </div>        
    </div>
    <script src="./JS/index.js"></script>
</body>
</html>
