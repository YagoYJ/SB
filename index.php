<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <link rel="stylesheet" href="css/padrao.css">
        <link rel="stylesheet" href="css/index.css">
        <title>Página inicial</title>
    </head>

    <body>
        <div id="divCabecalho">
            <header>
                <nav>
                    <a href="index.php"><img src="img/Logo-header.jpg" alt="Logo"></a>
                    <ul>
                        <li id="liInicio"><a href="index.php">Início</a></li>
                        <li id="liBrownies"><a href="brownies.php">Brownies</a></li>
                        <li id="liQuemSomos"><a href="quemSomos.php">Quem somos</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div id="divCorpo">
            <h1>SUPER BROWNIE</h1>
            <h2>MAIS VENDIDOS</h2>

            <div id="divFotosMaisVendidos">
                <a href="infoProd.php?cod=prod1"><img src="img/prod1.jpg" alt="Produto dos mais vendidos"></a>
                <a href="infoProd.php?cod=prod2"><img src="img/prod2.jpg" alt="Produto dos mais vendidos"></a>
                <a href="infoProd.php?cod=prod3"><img src="img/prod3.jpg" alt="Produto dos mais vendidos"></a>
            </div>
            <a href="brownies.php"><button id="btnVerMais">Ver mais</button></a>


        </div>

        <div id="divRodape">
            <footer>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <p>&copy; Todos os direitos reservados - Super Brownie</p>
            </footer>
        </div>

    </body>

</html>