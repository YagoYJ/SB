<?php
mb_internal_encoding("UTF-8");
mb_http_output("iso-8859-1");
ob_start("mb_output_handler");
header("Content-Type: text/html; charset=ISO-8859-1", true);

$codigo = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_STRING);
$nome = utf8_encode(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING));
$qtd = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
$tamanho = filter_input(INPUT_POST, 'tamanho', FILTER_SANITIZE_STRING);
$preco = number_format(filter_input(INPUT_POST, 'valorPreco', FILTER_SANITIZE_STRING), 2, ",", ".");
?>

<!DOCTYPE html>

<html>
    <head>
        <style>
        </style>
        <meta charset="UTF-8">
        <meta name="description" content="Site da companhia de dança Sense Company">
        <meta name="author" content="Yago Juan">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/stylePadrao.css">
        <link rel="stylesheet" href="css/styleConfirmarPedido.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'>
        <title>Confirmar pedido</title>
    </head>
    <body>
        <div id="divCabecalho">
            <header>
                <a href="index.php"><img src="img/logo.PNG" alt="Imagem Logo" title="Página principal"/></a>
                <i id="btnMenu" class="fas fa-bars"></i>
                <nav id="menu">
                    <ul>
                        <li><a href="loja.php">Loja</a></li>
                        <li><a href="quemSomos.php">Quem somos</a></li>
                        <li><a href="inscricao.php">Inscrição</a></li>
                        <li><a href="faleConosco.php">Fale conosco</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div id="divCorpo">

            <div id="divModal">

                <a href="infoProd.php?codigo=<?php echo $codigo; ?>"><button id="btnFechar"><i class="fas fa-times"></i></button></a>
                <h1>Confirmar pedido</h1>

                <div id="divConteudo">
                    <p>
                        <?php
                        echo "Nome completo: $nome<br>"
                        . "Quantidade: $qtd<br>"
                        . "Tamanho: $tamanho<br>"
                        . "Valor total: R$ $preco";
                        ?>
                    </p>

                    <div id="divBotoes">
                        <form action="database/confirmarPedidoBD.php" method="post">
                            <input type="hidden" name="codigo" value="<?php echo $codigo ?>"/>
                            <input type="hidden" name="nome" value="<?php echo $nome ?>"/>
                            <input type="hidden" name="quantidade" value="<?php echo $qtd ?>"/>
                            <input type="hidden" name="tamanho" value="<?php echo $tamanho ?>"/>
                            <input type="hidden" name="preco" value="<?php echo $preco ?>"/>
                            <button class="btn confirmar" type="submit"><i class="fas fa-check"></i>  Confirmar</button>
                            <a href="infoProd.php?codigo=<?php echo $codigo; ?>"><button class="btn cancelar"><i class="fas fa-times"></i>  Cancelar</button></a>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </body>
</html>