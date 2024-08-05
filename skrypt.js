function sprawdzPole(idPola, idKomunikatu) {
    const pole = document.getElementById(idPola);
    const wartosc = pole.value.trim();

    if (wartosc === '') {
      document.getElementById(idKomunikatu).innerHTML = `Pole jest wymagane.`;
    } else {
      document.getElementById(idKomunikatu).innerHTML = '';
    }
  }
  
  function sprawdzPakiet() {
    const pakiety = document.getElementsByName("pakiet");
    const czyWybrano = Array.from(pakiety).some(pakiet => pakiet.checked);
    document.getElementById("komunikat_pakiet").innerHTML = czyWybrano ? '' : 'Wybierz pakiet';
  }
  function sprawdzBoxa(idBoxa,idKomunikatu) {
    const checkbox =document.getElementById(idBoxa)
    if (checkbox.checked) {
        document.getElementById(idKomunikatu).innerHTML = '';
    }else{
        document.getElementById(idKomunikatu).innerHTML = `Pole jest wymagane.`;
    }
    
  }
  function sprawdzWszystko() {
    sprawdzPole('imie', 'komunikat_imie');
    sprawdzPole('nazwisko', 'komunikat_Nazwisko');
    sprawdzPole('email','komunikat_mail')
    sprawdzPole('telefonu','komunikat_Tel')
    sprawdzPole('telefonu','komunikat_Miejscowosc')
    sprawdzPole('ulica','komunikat_ulica')
    sprawdzPole('budynek','komunikat_budynek')
    sprawdzPole('kod','komunikat_kod')
    sprawdzPole('zainteresowania','komunikat_zainteresowania')
    sprawdzBoxa('regulamin','komunikat_regulamin')
    sprawdzBoxa('zgoda','komunikat_dane_osobowe')
    sprawdzBoxa('Ezgoda','komunikat_faktury')
    sprawdzPakiet();
  }


