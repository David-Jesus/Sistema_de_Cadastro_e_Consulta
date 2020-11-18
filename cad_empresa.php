<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_cad/style.css?version=12">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

    <script src="jsCpforCnpj/script.js"></script>
    <title>Teste 01 Mysql</title>
</head>

<body>
    <div class="container1">
        <nav>
            <ul class="menu">
                <a href="cad_fornecedores.php">
                    <li>Cadastro Fonecedores</li>
                </a>

                <a href="consulta.php">
                    <li>Consulta</li>
                </a>
            </ul>
        </nav>
        <section>
            <h1>Cadastro de Empresa</h1>
            <hr><br><br>

            <form method="post" action="processa_empresa.php">
                <label for="nome">Nome*</label><br>
                <input type="text" name="nome" class="campo" maxlenght="48" required autofocus placeholder="Digite aqui..."><br>

                <label for="nome">Selecione o Estado*</label><br>
                <select name="uf" class="campo">
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Piauí">Piauí</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Roraima">Roraima</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Tocantins">Tocantins</option>
                </select>
                <br>
                <label for="cnpj">Digite o CNPJ*</label><br>
                <input type="text" class="cpfOuCnpj" name="cnpj" id="campo" required placeholder="00.000.000/0000-00" minlength="18">
                <br><br>

                <input type="submit" value="Salvar" id="btn">
                <input type="reset" value="Limpar" id="btn">
            </form>
        </section>
    </div>
</body>

</html>