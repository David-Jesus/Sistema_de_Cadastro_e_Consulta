function myFunction1() {
    var checkBox = document.getElementById("myCheck1");
    var tell = document.getElementById("tell");
    var text1 = document.getElementById("text1");
    var text2 = document.getElementById("text2");
    var text3 = document.getElementById("text3");
    if (checkBox.checked == true) {
        tell.style.display = "block";
        text1.style.display = "block";
        text2.style.display = "none";
        text3.style.display = "none";
        tell3.style.display = "none";
        tell2.style.display = "none";
    }
}

function myFunction2() {
    var checkBox = document.getElementById("myCheck2");
    var tell2 = document.getElementById("tell2");
    var text1 = document.getElementById("text1");
    var text2 = document.getElementById("text2");
    var text3 = document.getElementById("text3");
    if (checkBox.checked == true) {
        tell2.style.display = "block";
        text1.style.display = "block";
        text2.style.display = "block";
        text3.style.display = "none";
        tell3.style.display = "none";
    } else {
        text.style.display = "none";
    }
}

function myFunction3() {
    var checkBox = document.getElementById("myCheck3");
    var tell3 = document.getElementById("tell3");
    var text1 = document.getElementById("text1");
    var text2 = document.getElementById("text2");
    var text3 = document.getElementById("text3");
    if (checkBox.checked == true) {
        tell.style.display = "block"
        tell3.style.display = "block";
        tell2.style.display = "block"
        text1.style.display = "block";
        text2.style.display = "block";
        text3.style.display = "block";
    } else {
        text.style.display = "none";
    }
}
function mascara(telefone) {
    if (telefone.value.length == 0)
        telefone.value = '(' + telefone.value;
    if (telefone.value.length == 3)
        telefone.value = telefone.value + ') ';

    if (telefone.value.length == 10)
        telefone.value = telefone.value + '-';

}