function verifierAllNum(N) {
    const Exp = /^\d{8}$/;
    return Exp.test(N);
}
var a=false;
var b=false;
var c=false;

const nbrTel = document.getElementById("tel");
nbrTel.addEventListener("blur", f1);

function f1() {
    const longueur = nbrTel.value.length;

    if (longueur !== 8 || !verifierAllNum(nbrTel.value)) {
        alert("Le numéro de téléphone doit contenir exactement 8 chiffres.");
        nbrTel.value = "";
    }
    else{
        a=true;
    }
}

function verifierLettre(ch) {
    const lettre = /^[a-zA-Z\s]+$/;
    return lettre.test(ch);
}

const ch = document.getElementById("name");
ch.addEventListener("blur", f3);

function f3() {
    if (verifierLettre(ch.value)) {
        ch.value = ch.value.toUpperCase();
        b=tr4;
    } else {
        alert("Le nom doit contenir des lettres uniquement.");
        ch.value = "";
    }
}

const mail = document.getElementById("email");
mail.addEventListener("blur", f4);

function f4() {
    if (!mail.value.includes("@")) {
        alert("L'adresse e-mail doit contenir le symbole @.");
    }
    else{
        c=true;
    }
}

const submit = document.getElementById("submit");
submit.addEventListener("click", f5);

function f5() {
    const confirmation = confirm("Souhaitez-vous confirmer la commande?");

    if (confirmation)   {
        if ((a==true) && (b==true)&&(c==true )){
        alert("Commande confirmée.");
        }else{
            alert("Commande annulée,completer touts les champs ! ");
        }

    }
     else {
        alert("Commande annulée.");
    }
}

function showLoginForm() {
    document.getElementById("connectionForm").style.display = "block";
    document.getElementById("inscriptionForm").style.display = "none";
    document.getElementById("connectBtn").style.display = "none";
}

function showInscriptionForm() {
    document.getElementById("connectionForm").style.display = "none";
    document.getElementById("inscriptionForm").style.display = "block";
    document.getElementById("connectBtn").style.display = "none";
}

