function myFunction() {
    var checkBox = document.getElementById("juridica");
    var texto = document.getElementById("texto");
    var texto1 = document.getElementById("texto1");
    var rg = document.getElementById("rg");
    var dataNascimento = document.getElementById("dataNascimento");

    if (checkBox.checked == true) {
        texto.style.display  = "none";
        rg.style.display = "none";
        texto1.style.display = "none";
        dataNascimento.style.display = "none";
    } 
}
function myFunction4() {
    var checkBox = document.getElementById("fisica");
    var texto = document.getElementById("texto");
    var rg = document.getElementById("rg");
    var dataNascimento = document.getElementById("dataNascimento");

    if (checkBox.checked == true) {
        texto.style.display  = "inline-block";
        rg.style.display = "inline-block";
        texto1.style.display = "inline-block";
        dataNascimento.style.display = "inline-block";
    }
    else{
        texto.style.display  = "none";
        rg.style.display = "none";
        texto1.style.display = "none";
        dataNascimento.style.display = "none";
    }
}