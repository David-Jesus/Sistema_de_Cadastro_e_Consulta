<?php

// Incorporar um código PHP de outro arquivo, caso não encontre o programa continua a ser executado
include_once("conexao.php");


//Recebe os dados do formulário através método POST e adiciona nas variáveis determinadas
$nomeFantasia = $_POST['nomeFantasia'];
$nomeCompleto = $_POST['nomeCompleto'];
$cnpjOucpf = $_POST['cpfOuCnpj'];
$tipo = $_POST['tipo'];
$rg = $_POST['Rg'];
$dataNascimento = $_POST['dataNascimento'];
$telefone1 = $_POST['telefone1'];
$telefone2 = $_POST['telefone2'];
$telefone3 = $_POST['telefone3'];
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
                    <li>Cadastro Fornecedores</li>
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
            //Define o fuso horário com o horário de Brasilia
            date_default_timezone_set('America/Sao_Paulo');

            //Nesta variável será adicionada a data atual de acordo com o FUSO-HORÁRIO de Brasília
            $dataLocal =  date('d-m-Y');

            //Salva a hora atual do cadastro
            $horaLocal = date('H:i:s', time());

            //Calculo de idade a partir da data de nascimento
            $date = new DateTime($dataNascimento);
            $interval =  $date->diff(new DateTime(date('Y-m-d')));
            $idade = $interval->format('%Y anos');
            $idade = (int) $idade;

            //Recupera o estado da empresa cadastrada para verificar se é do Paraná
            //Para teste mude o código para "20" que é de uma empresa do Distrito Federal
            //Caso cadastre uma empresa basta apenas substituir o CODIGO pelo o codigo da empresa cadastrada

            $sql = "SELECT UF FROM cadempresa WHERE CODIGO = '31'";
            $consulta  = mysqli_query($conexao, $sql);
            $exibirRegistros = mysqli_fetch_array($consulta);
            $estado = $exibirRegistros[0];

            //Verificaçao se o usuario já está cadastrado
            $search = "SELECT * FROM cadfornecedores WHERE (NOMEFANTASIA, NOME, CPF) = ('$nomeFantasia', '$nomeCompleto', '$cnpjOucpf')";
            $retorno = mysqli_query($conexao, $search);

            //Se o retorno for igual a '0' significa que o fornecedor não está cadastrado e poderá continuar com as verificações
            if (mysqli_num_rows($retorno) == 0) {

                //Se o estado for diferente de 'Paraná' irá salvar todos dados diretamente
                if ($estado != "PA") {

                    $sql = "insert into cadfornecedores(NOMEFANTASIA, NOME, CPF, TIPO, RG, DATACAD, HORACAD, TELEFONE1, 
                TELEFONE2, TELEFONE3, DATANASCIMENTO) values ('$nomeFantasia', '$nomeCompleto', '$cnpjOucpf', '$tipo', '$rg', '$dataLocal', '$horaLocal', '$telefone1'
                , '$telefone2', '$telefone3', '$dataNascimento')";
                    print("Empresa '$nomeFantasia' cadastrada com sucesso! <br>");
                    $salvar = mysqli_query($conexao, $sql);
                } else {

                    //Se a empresa for do PA e for Jurídica insere os dados na tabela
                    if ($tipo == "Jurídica") {

                        $sql = "insert into cadfornecedores(NOMEFANTASIA, NOME, CPF, TIPO, RG, DATACAD, HORACAD, TELEFONE1, 
                TELEFONE2, TELEFONE3, DATANASCIMENTO) values ('$nomeFantasia', '$nomeCompleto', '$cnpjOucpf', '$tipo', '$rg', '$dataLocal', '$horaLocal', '$telefone1'
                , '$telefone2', '$telefone3', '$dataNascimento')";
                        print("Empresa '$nomeFantasia' cadastrada com sucesso! <br>");
                        $salvar = mysqli_query($conexao, $sql);
                    } else {
                        //Se for do 'Paraná' irá passar pela verificação de idade caso for maior de idade irá salvar os dados
                        if ($idade >= 18) {
                            
                            $sql = "insert into cadfornecedores(NOMEFANTASIA, NOME, CPF, TIPO, RG, DATACAD, HORACAD, TELEFONE1, 
                        TELEFONE2, TELEFONE3, DATANASCIMENTO) values ('$nomeFantasia', '$nomeCompleto', '$cnpjOucpf', '$tipo', '$rg', '$dataLocal', '$horaLocal', '$telefone1'
                        , '$telefone2', '$telefone3', '$dataNascimento')";
                            print("Empresa '$nomeFantasia' cadastrada com sucesso! <br>");
                            $salvar = mysqli_query($conexao, $sql);
                        } else {
                            //Se for menor de 18 anos irá retonar a seguinte mensagem
                            print("Usuário menor de idade!");
                        }
                    }
                }
            } else {
                //Caso retorne alguma linha do banco de dados significa que já consta no banco e irá retornar a mensagem a seguir
                print("[ERROR!] Fornecedor já Cadastrado!");
            }
            ?> <br><br>
            <button id="btn"><a href="cad_fornecedores.php">Continuar</a></button>

    </div>
</body>

</html>