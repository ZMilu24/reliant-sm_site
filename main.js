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

function plans(plan) {
    element1=document.getElementById("plan");
    element2=document.getElementById("li1");
    element3=document.getElementById("li2");
    if (plan == 0) {
        element1.innerHTML = "Negyedéves";
        element2.innerHTML = "Az Ügyfél az első hónapra  kifizeti a csomag árát, utána három hónapig egy meghatározott dátumon a fenntartási költségeket vonjuk le (az árajánlat tartalmazza a negyedéves fenntartási költségeket is).";
        element3.innerHTML = "Az Ügyfél az árajánlatban megemlített összeget, egy utalás alatt fedezi, és Negyedévre biztosítva van az oldala.";
    } else if (plan == 1) {
        element1.innerHTML = "Féléves";
        element2.innerHTML = "Az Ügyfél az első hónapra  kifizeti a csomag árát, utána öt hónapig egy meghatározott dátumon a fenntartási költségeket vonjuk le (az árajánlat tartalmazza a fél éves fenntartási költségeket is);";
        element3.innerHTML = "Az Ügyfél az árajánlatban megemlített összeget, egy utalás alatt fedezi, és Fél évre biztosítva van az oldala.";
    } else if(plan == 2) {
        element1.innerHTML = "Egy éves";
        element2.innerHTML = "Az Ügyfél az első hónapra  kifizeti a csomag árát, utána tizenegy hónapig egy meghatározott dátumon a fenntartási költségeket vonjuk le (az árajánlat tartalmazza a egy éves fenntartási költségeket is);";
        element3.innerHTML = "Az Ügyfél az árajánlatban megemlített összeget, egy utalás alatt fedezi, és Egy évre biztosítva van az oldala.";
    } else if (plan == 3) {
        element1.innerHTML = "Két éves";
        element2.innerHTML = "Az Ügyfél az első hónapra  kifizeti a csomag árát, utána huszonhárom hónapig egy meghatározott dátumon a fenntartási költségeket vonjuk le (az árajánlat tartalmazza a két éves fenntartási költségeket is);";
        element3.innerHTML = "Az Ügyfél az árajánlatban megemlített összeget, egy utalás alatt fedezi, és Két évre biztosítva van az oldala.";
    }  else if (plan == 4) {
        element1.innerHTML = "Öt éves";
        element2.innerHTML = "Az Ügyfél az első hónapra  kifizeti a csomag árát, utána ötvenkilenc hónapig egy meghatározott dátumon a fenntartási költségeket vonjuk le (az árajánlat tartalmazza a öt éves fenntartási költségeket is);";
        element3.innerHTML = "Az Ügyfél az árajánlatban megemlített összeget, egy utalás alatt fedezi, és Öt évre biztosítva van az oldala.";
    }
}

document.getElementById("main-header").style.height = document.getElementById("nav-bg").clientHeight + "px";