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
    document.getElementById("mainPrice").innerHTML = price;
}