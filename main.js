function month_set() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const package = urlParams.get('pac');
    let price = null;
    switch (package) {
        case 'b':
            price = "$150";
            break;
        case 'p':
            price = "$350";
            break;
        case 'u':
            price = "$500";
            break;
        default:
            price = "unkown"
            break;
    }
    document.getElementById("monthButton").style.backgroundImage = "linear-gradient(to left, white, #868686)";
    document.getElementById("halfyButton").style.backgroundImage = "";
    document.getElementById("yearButton").style.backgroundImage = "";
    document.getElementById("mainPrice").innerHTML = price;
}

function halfy_set() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const package = urlParams.get('pac');
    let price = null;
    switch (package) {
        case 'b':
            price = "$300";
            break;
        case 'p':
            price = "$500";
            break;
        case 'u':
            price = "$600";
            break;
        default:
            price = "unkown"
            break;
    }
    document.getElementById("monthButton").style.backgroundImage = "";
    document.getElementById("halfyButton").style.backgroundImage = "linear-gradient(to left, white, #868686)";
    document.getElementById("yearButton").style.backgroundImage = "";
    document.getElementById("mainPrice").innerHTML = price;
}

function year_set() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const package = urlParams.get('pac');
    let price = null;
    switch (package) {
        case 'b':
            price = "$543";
            break;
        case 'p':
            price = "$4325";
            break;
        case 'u':
            price = "$15234";
            break;
        default:
            price = "unkown"
            break;
    }
    document.getElementById("monthButton").style.backgroundImage = "";
    document.getElementById("halfyButton").style.backgroundImage = "";
    document.getElementById("yearButton").style.backgroundImage = "linear-gradient(to left, white, #868686)";
    document.getElementById("mainPrice").innerHTML = price;
}

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