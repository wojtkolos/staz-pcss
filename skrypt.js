
function sprawdz1() {

    var imie = document.getElementById("imie").value;
    imie = imie.replace(/\s/g, '');
    var regex = /^[A-Za-zÀ-ÖØ-öø-ÿ]+$/;
    var specjalneznaki = !regex.test(imie);
    
    var imie=document.getElementById("imie").value
    if (imie=="") document.getElementById("komunikat1").innerHTML="Podaj imię" 
    else if (specjalneznaki) {
        document.getElementById("komunikat1").innerHTML = "Imię nie może zawierać znaków specjalnych";
    }
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
    if (data=="") document.getElementById("komunikat5").innerHTML="Podaj date" 
    else document.getElementById("komunikat5").innerHTML="";
}
function sprawdz7() {
    var miejscowosc=document.getElementById("miejscowosc").value
    if (miejscowosc=="") document.getElementById("komunikat7").innerHTML="Podaj miejscowość" 
    else document.getElementById("komunikat7").innerHTML="";
}
function sprawdz8() {
    var ulica=document.getElementById("ulica").value
    if (ulica=="") document.getElementById("komunikat8").innerHTML="Podaj ulice" 
    else document.getElementById("komunikat8").innerHTML="";
    
}
function sprawdz9() {
    var budynek=document.getElementById("budynek").value
    if (budynek=="") document.getElementById("komunikat9").innerHTML="Podaj numer budynku " 
    else document.getElementById("komunikat9").innerHTML="";
}
function sprawdz10() {
    var kod=document.getElementById("kod").value
    if (kod=="") document.getElementById("komunikat10").innerHTML="Podaj kod pocztowy" 
    else document.getElementById("komunikat10").innerHTML="";
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
    /////
    var pakiet=document.getElementsByName("pakiet")
    let czyWybrano = false;
    for (let i = 0; i < pakiet.length; i++) {
        if (pakiet[i].checked) {
          czyWybrano = true;
          break; 
        }
      }
      if (!czyWybrano) document.getElementById("komunikat6").innerHTML="Wybierz pakiet" 
      else document.getElementById("komunikat6").innerHTML="";
    /////
    var miejscowosc=document.getElementById("miejscowosc").value
    if (miejscowosc=="") document.getElementById("komunikat7").innerHTML="Podaj miejscowosc" 
    else document.getElementById("komunikat7").innerHTML="";

    var ulica=document.getElementById("ulica").value
    if (ulica=="") document.getElementById("komunikat8").innerHTML="Podaj ulice" 
    else document.getElementById("komunikat8").innerHTML="";
    
    var budynek=document.getElementById("budynek").value
    if (budynek=="") document.getElementById("komunikat9").innerHTML="Podaj numer budynku" 
    else document.getElementById("komunikat9").innerHTML="";

    var kod=document.getElementById("kod").value
    if (kod=="") document.getElementById("komunikat10").innerHTML="Podaj kod pocztowy" 
    else document.getElementById("komunikat10").innerHTML="";
      
}