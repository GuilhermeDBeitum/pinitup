//Verifica os dados inseridos no campo de login.

function Login() {
    var login = document.getElementById("iLogin").value;
    var password = document.getElementById("iPassword").value;

    var log = document.getElementById("errLog");
    var pass = document.getElementById("errPassword");

    var eLog = false,
        ePass = false;

    const padLog = /^\; +$/;

    if (login == "" || login.length < 5 || (padLog.test(login)) == true) {
        log.style.color = "red";
        log.innerHTML = "Insira login válido";
        log.style.display = "block";
        eLog = true;
    } else {
        log.style.display = "none";
        eLog = false;
    }

    if (password == "" || (padLog.test(password)) == true) {
        pass.style.color = "red";
        pass.innerHTML = "Insira senha válida";
        pass.style.display = "block";
        ePass = true;
    } else {
        pass.style.display = "none";
        ePass = false;
    }


    if ((eLo == false) && (eSe == false)) {
        $("#formlog").submit();

    } else {
        console.log("error");
    }
}

$(document).ready(function () {
    $(".dropdown-toggle").dropdown();
});