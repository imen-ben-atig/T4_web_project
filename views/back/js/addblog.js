function Verif() {
    var objet = f.objet.value;
    var description = f.description.value;
    var date = f.date.value;
    var today = new Date();
    var current = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
    if (objet.length === 0) {
        document.getElementById("message_nompren").innerHTML = "**Objet manquant!";

    } else if (objet.length > 0) {
        document.getElementById("message_nompren").innerHTML = "";
    }
    if (description.length === 0) {
        document.getElementById("message_email").innerHTML = "**Description manquante";
    } else if (description.length > 0) {
        document.getElementById("message_email").innerHTML = "";
    }
    if (date.length === 0) {
        document.getElementById("message_confirm").innerHTML = "**Ajoutez une date!";
    } else if (date.length > 0) {
        document.getElementById("message_confirm").innerHTML = "";

    } else if (date > current) {
        document.getElementById("message_date").innerHTML = "**la date doit etre anterieure a la date currente";
    } else return false;


}