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
            <span id="komunikat1"></span>
            <input name="imie" id="imie" placeholder="Wprowadź imię" type="text" oninput="sprawdz1()">
            
            
            
            
            
            <label for="nazwisko">Nazwisko</label>
            <span id="komunikat2"></span>
            <input name="nazwisko" id="nazwisko" placeholder="Wprowadź nazwisko" type="text" oninput="sprawdz2()">
            

            <label for="e-mail">Adres e-mail</label>
            <span id="komunikat3"></span>
            <input type="email" id="email" name="e-mail" placeholder="np. example@ex.com" oninput="sprawdz3()">
            

            <label for="telefonu">Numer telefonu</label>
            <span id="komunikat4"></span>
            <input type="text" name="telefonu" id="telefonu" placeholder="np. 964367387" oninput="sprawdz4()">
            

            <label for="data">Planowany dzień rozpoczęcia korzystania z przestrzeni</label>
            <span id="komunikat5"></span>
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
            <input type="date" name="data" id="data" oninput="sprawdz5()">
            

            <label>Wybierz pakiet:</label>
            <span id="komunikat6"></span>
            <label for="coworker">COWORKER (50zł)</label>
            <input type="radio" name="pakiet" id="coworker" value="coworker">
            
            <label for="OWNER">OWNER (400zł)</label>
            <input type="radio" name="pakiet" id="OWNER" value="OWNER">
            
            
            <label for="miejscowość">Adres korespondencyjny - Miejscowość</label>
            <span id="komunikat7"></span>
            <input type="text" name="miejscowość" placeholder="Wprowadź miejscowość korespondencyjną" id="miejscowosc" oninput="sprawdz7()">

            <label for="ulica">Adres korespondencyjny - Ulica</label>
            <span id="komunikat8"></span>
            <input type="text" name="ulica" placeholder="Wprowadź ulicę" id="ulica" oninput="sprawdz8()">
            
            <label for="numer">Adres korespondencyjny - Numer budynku</label>
            <span id="komunikat9"></span>
            <input type="text" name="budynek" placeholder="Wprowadź numer budynku" id="budynek" oninput="sprawdz9()">


            <label for="numer">Adres korespondencyjny - Numer mieszkania</label>
            <input type="text" name="numer" placeholder="Wprowadź numer mieszkania" id="mieszkanie">

            <label for="kod">Adres korespondencyjny - kod pocztowy</label>
            <span id="komunikat10"></span>
            <input type="text" name="kod" placeholder="Wprowadź kod pocztowy" oninput="sprawdz10()" id="kod">

            <label for="zainteresowania">Moje zainteresowania/kompetencje</label>
            <span id="komunikat10"></span>
            <textarea name="zainteresowania" id="zainteresowania" oninput="sprawdz11()"></textarea>

            <h3>Zapoznanie z Regulaminem</h3>
            <input type="checkbox" name="Regulamin" id="regulamin">
            <label for="regulamin">Oświadczam, że zapoznałem/am się z Regulaminem i zobowiązuję się do jego przestrzegania.</label>

            <h3>Zgoda na przetwarzanie i przechowywanie danych osobowych</h3>
            <input type="checkbox" name="zgoda" id="zgoda">
            <label for="zgoda">Wyrażam zgodę na przetwarzanie moich danych osobowych przez ICHB PAN PCSS.</label>

            <h3>Zgoda na przesyłanie faktur/rachunków drogą elektroniczną</h3>
            <input type="checkbox" name="EZgoda" id="EZgoda">
            <label for="EZgoda">Wyrażam zgodę na przesyłanie faktur drogą elektroniczną.</label>

            <input type="button" value="WYŚLIJ" onclick="sprawdzALL()">
        </form>
    </div>
</body>
</html>