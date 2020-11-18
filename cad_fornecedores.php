<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_cad/style.css?version=12">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

    <script src="jscontatos/scriptcontato.js"></script>
    <script src="scriptRg/script.js"></script>
    <script src="jsCpforCnpj/script.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

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
            <h1>Cadastro de Fornecedores</h1>
            <hr>

            <form method="post" action="processa_fornecedores.php">
                <label for="nome">Nome da Empresa*</label><br>
                <input type="text" name="nomeFantasia" class="campo" maxlenght="48" required autofocus placeholder="Digite aqui..."><br>

                <label for="nome">Nome Completo*</label><br>
                <input type="text" name="nomeCompleto" class="campo" maxlenght="48" required autofocus placeholder="Digite aqui..."><br>

                <label for="cnpj">Digite o CNPJ ou CPF*</label><br>
                <input type="text" class="cpfOuCnpj" name="cpfOuCnpj" required placeholder="00.000.000-00" minlength="14" maxlength="18" id="campo">
                <br>


                <p>Pessoa Física ou Jurídica?</p>
                <div class="form-check form-check-inline">
                    <input type="radio" id="juridica" name="tipo" onclick="myFunction()" value="Jurídica">
                    <label class="form-check-label" for="male">Jurídica</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" id="fisica" name="tipo" onclick="myFunction4()" value="Física">
                    <label class="form-check-label" for="male">Físca</label>
                </div><br>

                <label for="other" id="texto" style="display:none">Digite o Rg</label>
                <input type="text" name="Rg" class="campo2" maxlength="15" placeholder="Digite aqui..." id="rg" style="display:none">
                <label for="other" id="texto1" style="display:none">Data de Nascimento</label>
                <input type="date" name="dataNascimento" class="campo2" id="dataNascimento" style="display:none">
                <br>

                <p>Por favor selecione quantos telefones deseja incluir:*</p>
                <div class="form-check form-check-inline">
                    <input type="radio" id="myCheck1" name="telefone1" onclick="myFunction1()">
                    <label class="form-check-label" for="male">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" id="myCheck2" name="telefone2" onclick="myFunction2()">
                    <label class="form-check-label" for="female">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" id="myCheck3" name="telefone3" onclick="myFunction3()">
                    <label class="form-check-label" for="other">3</label>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="other" id="tell" style="display: none;">Telefone 1</label>
                        <input type="text" name="telefone1" class="campo2" size="21" maxlength="15" onkeypress="mascara(this)" placeholder="(xx) xxxxx-xxxx" id="text1" style="display: none;">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="other" id="tell2" style="display: none;">Telefone 2</label>
                        <input type="text" name="telefone2" class="campo2" size="21" maxlength="15" onkeypress="mascara(this)" placeholder="(xx) xxxxx-xxxx" id="text2" style="display: none;">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="other" id="tell3" style="display: none;">Telefone 3</label>
                        <input type="text" name="telefone3" class="campo2" size="21" maxlength="15" onkeypress="mascara(this)" placeholder="(xx) xxxxx-xxxx" id="text3" style="display: none;">
                    </div>

                    <input type="submit" value="Salvar" id="btn">
                    <input type="reset" value="Limpar" id="btn">
            </form>
        </section>
    </div>

</body>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>