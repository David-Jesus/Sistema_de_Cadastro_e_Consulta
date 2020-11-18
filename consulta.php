<?php
include_once("conexao.php");

//seleciona tudo do banco de dados
$sql = "select * from cadfornecedores";
$consulta  = mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo_consulta/style.css?version=12">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">

    <title>Consulta de Fornecedores</title>
</head>

<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="cad_fornecedores.php">
                    <li>Cadastro</li>
                </a>
            </ul>
        </nav>
        <section>
            <h1>Consultas</h1>
            <hr><br><br>

            <div class="table-tamanho">
                <table>
                    <thead>
                        <tr>
                            <th>Nome Fantasia</th>
                            <th>Nome</th>
                            <th>CPF ou CNPJ</th>
                            <th>RG</th>
                            <th>Data de Cadastro</th>
                            <th>Hora de Cadastro</th>
                            <th>Telefone</th>
                            <th>Telefone</th>
                            <th>Telefone</th>
                            <th>Data de Nascimento</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        while ($exibirRegistros = mysqli_fetch_array($consulta)) {

                            $nomeFantasia       = $exibirRegistros[1];
                            $nomeCompleto     = $exibirRegistros[2];
                            $cpfOuCnpj  = $exibirRegistros[3];
                            $rg = $exibirRegistros[5];
                            $dataCad  = $exibirRegistros[6];
                            $horaCad  = $exibirRegistros[7];
                            $telefone1  = $exibirRegistros[8];
                            $telefone2  = $exibirRegistros[9];
                            $telefone3  = $exibirRegistros[10];
                            $dataNascimento  = $exibirRegistros[11];

                            print "<tr>";
                            print "<td>$nomeFantasia</td>";
                            print "<td>$nomeCompleto</td>";
                            print "<td>$cpfOuCnpj</td>";
                            print "<td>$rg</td>";
                            print "<td>$dataCad</td>";
                            print "<td>$horaCad</td>";
                            print "<td>$telefone1</td>";
                            print "<td>$telefone2</td>";
                            print "<td>$telefone3</td>";
                            print "<td>$dataNascimento</td>";
                            print "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
            mysqli_close($conexao);
            ?>
        </section>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="jsdatatables/script.js"></script>

</html>