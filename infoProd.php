<?php
include_once './database/conexaoBD.php';

$cod = filter_input(INPUT_GET, "cod", FILTER_SANITIZE_STRING);
$sql = "select * from produtos where codigo='$cod'";
$select = mysqli_query($connect, $sql);

$lista = mysqli_fetch_array($select);
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <link rel="stylesheet" href="css/padrao.css">
        <link rel="stylesheet" href="css/infoProd.css">
        <title>Informações do produto</title>
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
            <div id="divFoto">
                <?php echo "<h1>" . $lista['nome'] . "</h1>"; ?>
                <img src="img/<?php echo $cod . '.jpg' ?>" alt="Foto do produto"/>
            </div>
            <div id="divForm">
                <form method="post" action="confirmarPedido.php?cod=<?php echo $cod; ?>" oninput="calc_total();">
                    <h2>Faça seu pedido!</h2>
                    
                    <input type="text" class="input" id="inputNome" placeholder=" Nome*" required/>
                    <input type="text" class="input" id="inputSobrenome" placeholder=" Sobrenome"/><br>
                    <input type="number" class="input" id="inputQuantidade" placeholder=" Quantidade*" min="1" required/><br>
                    
                    <p>Endereço:</p>
                    <input type="text" class="input" id="inputRua" placeholder=" Rua*" required/><br>
                    <input type="text" class="input" id="inputBairro" placeholder=" Bairro*" required/>
                    <input type="number" class="input" id="inputNumero" placeholder=" Número*" required/>
                    <input type="text" class="input" id="inputComplemento" placeholder=" Complemento"/><br>
                    
                    <p>Contato:</p>
                    <input type="email" class="input" id="inputEmail" placeholder=" E-mail principal"/><br>
                    <input class="input" type="tel" placeholder="Telefone (DDD 9XXXX-XXXX)*" id="inputTelefone" maxlength="11" pattern="[0-9]{11}" required >
                    
                    <p>Valor do pagamento:</p>
                    <span>R$ </span><input type="number" class="input" id="inputPagamento" placeholder="Qual quantia você vai dar?*" required/>
                    
                    <p>Valor total:</p>
                    <span>R$ </span><input type="text" class="input" id="inputPreco" value="5" readonly><br>
                    <input type="submit" id="btnPedir" value="Fazer pedido"/>
                </form>
            </div>
        </div>

        <div id="divRodape">
            <footer>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <p>&copy; Todos os direitos reservados - Super Brownie</p>
            </footer>
        </div>

        <script>
            function calc_total() {
                var qtd = parseInt(document.getElementById("inputQuantidade").value);
                var tot = qtd * 5;
                document.getElementById("inputPreco").value = tot;
            }
        </script>

    </body>

</html>