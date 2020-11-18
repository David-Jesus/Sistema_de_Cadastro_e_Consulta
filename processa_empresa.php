<?php

// Incorporar um código PHP de outro arquivo, caso não encontre o programa continua a ser executado
include_once("conexao.php");

$nome = $_POST['nome'];
$uf = $_POST['uf'];
$cnpj = $_POST['cnpj'];
?>
<!DOCTYPE html:5>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_cad/style.css">
    <title>Teste PHP</title>
</head>

<body>
    <div class="container1">
        <nav>
            <ul class="menu">
                <a href="cad_fornecedores.php">
                    <li>Cadastro</li>
                </a>
                <a href="consulta.php">
                    <li>Consulta</li>
                </a>
            </ul>
        </nav>
        <section>
            <h1>Confirmação de cadastro</h1>
            <hr><br><br>

            <?php
            $uf = strtoupper($uf);

            //aqui é para fazer a verificaçao se o usuario ja esta cadastrado
          //  $search = "SELECT * FROM cadempresa WHERE (NOME, UF, CNPJ) = ('$nome', '$uf', '$cnpj')";
           // $retorno = mysqli_query($conexao, $search);

            //Verificaçao se o usuario já está cadastrado
            $search = "SELECT * FROM cadempresa WHERE (NOME, UF, CNPJ) = ('$nome', '$uf', '$cnpj')";
            $retorno = mysqli_query($conexao, $search);

            if (mysqli_num_rows($retorno) < 1) {
                if (strlen($cnpj) == 18) {
                    $sql = "insert into cadempresa (NOME, UF, CNPJ) values ('$nome', '$uf', '$cnpj')";
                    $salvar = mysqli_query($conexao, $sql);
                    print "Cadastro efetuado com sucesso!<br/>";
                    print "Clique em continuar para cadastrar os fornecedores!";
                }
            } 
            else {
                print "[ERROR!] Cadastro NÃO efetuado! <tr/>Já existe uma empresa '$nome ' cadastrada. <br/>";
                print "Clique em voltar para cadastrar a empresa!";
            }

            mysqli_close($conexao);
            ?> <br><br>
            <button id="btn"><a id="voltar" href="cad_fornecedores.php">Continuar</a></button>

    </div>
</body>

</html>