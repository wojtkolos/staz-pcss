function sprawdz1() {
    var imie=document.getElementById("imie").value
    if (imie=="") document.getElementById("komunikat1").innerHTML="Podaj imię"
    else document.getElementById("komunikat1").innerHTML="";
}
function sprawdz2() {
    var nazwisko=document.getElementById("nazwisko").value
    if (nazwisko=="") document.getElementById("komunikat2").innerHTML="Podaj nazwisko"
    else document.getElementById("komunikat2").innerHTML="";
}
function sprawdz3() {
    var email=document.getElementById("email").value
    if (email=="") document.getElementById("komunikat3").innerHTML="Podaj email"
    else document.getElementById("komunikat3").innerHTML="";
}
function sprawdz4() {
    var telefonu=document.getElementById("telefonu").value
    if (telefonu=="") document.getElementById("komunikat4").innerHTML="Podaj telefonu"
    else document.getElementById("komunikat4").innerHTML="";
}
function sprawdz5() {
    var data=document.getElementById("data").value
    if (data=="dd.mm.rrrr") document.getElementById("komunikat5").innerHTML="Podaj date"
    else document.getElementById("komunikat5").innerHTML="";
}





function sprawdzALL() {
    var imie=document.getElementById("imie").value
    if (imie=="") document.getElementById("komunikat1").innerHTML="Podaj imię"
    else document.getElementById("komunikat1").innerHTML="";
   
    var nazwisko=document.getElementById("nazwisko").value
    if (nazwisko=="") document.getElementById("komunikat2").innerHTML="Podaj nazwisko"
    else document.getElementById("komunikat2").innerHTML="";
   
    var email=document.getElementById("email").value
    if (email=="") document.getElementById("komunikat3").innerHTML="Podaj email"
    else document.getElementById("komunikat3").innerHTML="";

    var telefonu=document.getElementById("telefonu").value
    if (telefonu=="") document.getElementById("komunikat4").innerHTML="Podaj telefonu"
    else document.getElementById("komunikat4").innerHTML="";
    var data=document.getElementById("data").value
    if (data=="") document.getElementById("komunikat5").innerHTML="Podaj date"
    else document.getElementById("komunikat5").innerHTML="";

}
