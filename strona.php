<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zgłoszenie</title>
    <link rel="stylesheet" href="css.css">
    <script src="skrypt.js"></script>
</head>
<body>
    <div id="container">
        <form id="dane">
            <label for="imie">Imię</label>
            <span id="komunikat_imie"></span>
            <input name="imie" id="imie" placeholder="Wprowadź imię" type="text" oninput="sprawdzPole('imie','komunikat_imie')">
            
            
            <label for="nazwisko">Nazwisko</label>
            <span id="komunikat_Nazwisko"></span>
            <input name="nazwisko" id="nazwisko" placeholder="Wprowadź nazwisko" type="text" oninput="sprawdzPole('nazwisko','komunikat_Nazwisko')">
            

            <label for="e-mail">Adres e-mail</label>
            <span id="komunikat_mail"></span>
            <input type="email" id="email" name="e-mail" placeholder="np. example@ex.com" oninput="sprawdzPole('email','komunikat_mail')">
            


            <label for="telefonu">Numer telefonu</label>
            <span id="komunikat_Tel"></span>
            <input type="text" name="telefonu" id="telefonu" placeholder="np. 964367387" oninput="sprawdzPole('telefonu','komunikat_Tel')" pattern="[0-9]{9}">
            

            <label for="data">Planowany dzień rozpoczęcia korzystania z przestrzeni</label>
            <span id="komunikat_data"></span>
            <script>
                function setMinDate() {
                const today = new Date();
                const yyyy = today.getFullYear();
                const mm = String(today.getMonth() + 1).padStart(2, '0');
                const dd = String(today.getDate()).padStart(2, '0');
                const todayString = `${yyyy}-${mm}-${dd}`;

                document.getElementById("data").setAttribute("min", todayString); 
                }   
                window.onload = setMinDate;
            </script>
            <input type="date" name="data" id="data" oninput="sprawdzPole('data','komunikat_data')">
            

            <label>Wybierz pakiet:</label>
            <span id="komunikat_pakiet"></span>
            <label for="coworker">COWORKER (50zł)</label>
            <input type="radio" name="pakiet" id="coworker" value="coworker">
            
            <label for="OWNER">OWNER (400zł)</label>
            <input type="radio" name="pakiet" id="OWNER" value="OWNER">
            
            
            <label for="miejscowość">Adres korespondencyjny - Miejscowość</label>
            <span id="komunikat_Miejscowosc"></span>
            <input type="text" name="miejscowosc" placeholder="Wprowadź miejscowość korespondencyjną" id="miejscowosc" oninput="sprawdzPole('miejscowosc','komunikat_Miejscowosc')">

            <label for="ulica">Adres korespondencyjny - Ulica</label>
            <span id="komunikat_ulica"></span>
            <input type="text" name="ulica" placeholder="Wprowadź ulicę" id="ulica" oninput="sprawdzPole('ulica','komunikat_ulica')">
            
            <label for="numer">Adres korespondencyjny - Numer budynku</label>
            <span id="komunikat_budynek"></span>
            <input type="text" name="budynek" placeholder="Wprowadź numer budynku" id="budynek" oninput="sprawdzPole('budynek','komunikat_budynek')">


            <label for="numer">Adres korespondencyjny - Numer mieszkania</label>
            <input type="text" name="numer" placeholder="Wprowadź numer mieszkania" id="mieszkanie">

            <label for="kod">Adres korespondencyjny - kod pocztowy</label>
            <span id="komunikat_kod"></span>
            <input type="text" name="kod" placeholder="Wprowadź kod pocztowy" oninput="sprawdzPole('kod','komunikat_kod')" id="kod" >

            <label for="zainteresowania">Moje zainteresowania/kompetencje</label>
            <span id="komunikat_zainteresowania"></span>
            <textarea name="zainteresowania" id="zainteresowania" oninput="sprawdzPole('zainteresowania','komunikat_zainteresowania')"></textarea>

            <h3>Zapoznanie z Regulaminem</h3>
            <span id="komunikat_regulamin"></span>
            <input type="checkbox" name="Regulamin" id="regulamin">
            <label for="regulamin">Oświadczam, że zapoznałem/am się z Regulaminem i zobowiązuję się do jego przestrzegania.</label>

            <h3>Zgoda na przetwarzanie i przechowywanie danych osobowych</h3>
            <span id="komunikat_dane_osobowe"></span>
            <input type="checkbox" name="zgoda" id="zgoda">
            <label for="zgoda">Wyrażam zgodę na przetwarzanie moich danych osobowych przez ICHB PAN PCSS.</label>

            <h3>Zgoda na przesyłanie faktur/rachunków drogą elektroniczną</h3>
            <span id="komunikat_faktury"></span>
            <input type="checkbox" name="Ezgoda" id="Ezgoda">
            <label for="EZgoda">Wyrażam zgodę na przesyłanie faktur drogą elektroniczną.</label>


            <h3>Jestem zainteresowany otrzymywaniem ofert współpracy adekwatnie do wskazanych zainteresowan/kompetencji nie częściej niż raz w tygodniu</h3>
            <span id="komunikat_faktury"></span>
            <input type="checkbox" name="Ezgoda" id="Ezgoda">
            

            <input type="button" value="WYŚLIJ" onclick="sprawdzWszystko()">
        </form>
    </div>
</body>
</html>