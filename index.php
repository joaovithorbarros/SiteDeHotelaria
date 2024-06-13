<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SECE | Experiências e hospedagem</title>
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/reset.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./IMAGENS/favicon.ico" type="image/x-icon">
</head>

<body>
    <header>
        <div class="logo"><a href="http://localhost/SiteDeHotelaria/"><img src="./IMAGENS/SECE-removebg-preview.png" alt="logo-sece" height="100px"></a></div>
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
        <div class="pesquisa">
            <div class="destino">
                <div class="onde">Onde &#x21B7</div>
                <div class="Bdestino">Buscar destinos</div>
            </div>
            <div class="borda-inv">
                <div class="binv"></div>
            </div>
            <div class="hospede">
                <div class="quem"> Quem &#x21B7</div>
                <div class="hospedes">Hóspedes?</div>
                <div class="Quem-list">
                    <ul>
                        <li><a href="">2 Pessoas</a></li>
                        <li><a href="">5 Pessoas</a></li>
                        <li><a href="">6 Pessoas</a></li>
                    </ul>
                </div>
            </div>
            <div class="contorno-lupa">
                <div class="lupa">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAd5JREFUSEu11cvLTWEUx/HPGxnIpSiXiZAwcIuSAQpFL2XqUgxIURhQBv4AMiEhDCgk5Q+Q0VsImSAlopTIgFwi9+uz6nl1HO/e5xnssya7zn7O+j5rrd9v7R5djp4u51cHmIB1WInZ+SJ3cAkX8LzkcgMBRuAcVtck+I2L2IRPdaB2wFDcwgx8xUkcxpOcZDJ2YQuG5LOL8L0K0g44iw14hhV4UPHHWbicLjAeB7G7BDAT9/Aj9Xk+ot91sRhX8A2T8GKgw60VHMF2HMWOkgHiPNYnyF7s7wR4jCm5//cLAUvQh2vpGRX9F60VfEQMeRB+FQJGpWpf4w1GdwK8x3AMQ8BKIs5+wCuM6QS4mw01L3ngdkn2pKQFSW03c5uWdQIcSKbZgxPYVgg4kzyyMbUnBLKzE2AqHuJnoUzDYFdz0sqq2412Ktv/KZYnCT6qqGRONtrY7PatJUaLM62r4guO41B2dryPKmNVbMbgnDRmEK6PYdfKtP/lyGygVTVzeJd20b7U0rWYm12/FPH7P1G3ridml/Yids/nrK4bOIa3CB+E0WKdhwpDSeGJv9HEBycg1zEdsQ0W4mU/oQlA5AqThaKm5fmcbhoQ+cal9b4mfz8abVGtJ5tqUSWk64A/OxFWGSrrSC8AAAAASUVORK5CYII="/>
                </div>
            </div>
            <div class="Onde-list">
                <ul>
                    <li><a href="">Meireles</a></li>
                    <li><a href="">Paracuru</a></li>
                    <li><a href="">Itapipoca</a></li>
                    <li><a href="">Guaramiranga</a></li>
                    <li><a href="">Mansao </a></li>
                </ul>
            </div>
        </div>
        <div class="conteudoh">
                <a href="http://localhost/SiteDeHotelaria/Loc1.php"><div class="box" id="meireles">
                <img src="./IMAGENS/Ap1.jpeg" alt="">
                <p>Apto de alto padrão Meireles</p>
                <p>2 Pessoas | 1 Diaria</p>
                <p>R$ 250,00</p></a>

            </div>
            <div class="box">
                <a href="http://localhost/SiteDeHotelaria/Loc2.php"><img src="./IMAGENS/Ap2.jpeg" alt="">
                <p>Pousada em Paracuru</p>
                <p>5 Pessoas | 1 Diaria</p>
                <p>R$ 450.00</p></a>
                
            </div>
            <div class="box">
                <a href="http://localhost/SiteDeHotelaria/Loc3.php"><img src="./IMAGENS/Ap3.jpg" alt="">
                <p>Chalé em Itapipoca</p>
                <p>2 pessoas | 1 diária</p>
                <p>R$ 263.00</p></a>
                
            </div>
            <div class="box">
                <a href="http://localhost/SiteDeHotelaria/Loc4.php"><img src="./IMAGENS/Ap4.jpg" alt="">
                <p>Casa em Guaramiranga</p>
                <p>6 pessoas | 1 diária </p>
                <p>R$ 234.00</p></a>
                
            </div>
            <div class="box-exp">
                <a href="http://localhost/SiteDeHotelaria/Loc5.php"><img src="./IMAGENS/Ap5.jpg" alt="">
                <p>Casa "Esqueceram de mim"</p>
                <p>4 pessoas | 1 diária </p>
                <p>R$ 202.00</p></a>
            </div>
        </div>
    </section>

    <footer>
        <div class="rodape">
            <p>
                &copy; DireitosAutorais
            </p>
            <p>
                Contato: (85) 993768490
            </p>
        </div>
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

