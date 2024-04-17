function wp() {
    let DB = document.getElementById("DB");
    DB.setAttribute("checked", '');
    DB.setAttribute("disabled", '');
    document.getElementById("sign").innerHTML = "(Wordpress esetén kötelező az adatbázis)";
}

function handMade() {
    let DB = document.getElementById("DB");
    DB.removeAttribute("disabled", '');
    DB.removeAttribute("checked", '');
    document.getElementById("sign").innerHTML = "";
}