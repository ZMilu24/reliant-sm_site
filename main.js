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

function copy(id) {
    // Get the text field
    var copyText = document.getElementById(id).innerText;

     // Copy the text inside the text field
    navigator.clipboard.writeText(copyText);

    // Alert the copied text
    alert("Szöveg vágólapra másolva!");
}