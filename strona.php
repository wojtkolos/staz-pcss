<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zgłoszenie</title>
    <link rel="stylesheet" href="formularz.css">
</head>
<body>
    <div id="container">
        <form method="POST">
            <label for="imie">Imię</label>
            <span id="komunikat_imie"></span>
            <input name="imie" id="imie" placeholder="Wprowadź imię" type="text" required>
           
            <label for="nazwisko">Nazwisko</label>
            <span id="komunikat_nazwisko"></span>
            <input name="nazwisko" id="nazwisko" placeholder="Wprowadź nazwisko" type="text" required>
           
            <label for="email">Adres e-mail</label>
            <span id="komunikat_mail"></span>
            <input type="email" id="email" name="email" placeholder="np. example@ex.com" required>
           
            <label for="numer_telefonu">Numer telefonu</label>
            <span id="komunikat_tel"></span>
            <input type="text" name="numer_telefonu" id="numer_telefonu" placeholder="np. 964367387" pattern="[0-9]{9}" required>
           
            <label for="rok">Planowany dzień rozpoczęcia korzystania z przestrzeni</label>
            <span id="komunikat_data"></span>
            <script>
                function setMinDate() {
                    const today = new Date();
                    const yyyy = today.getFullYear();
                    const mm = String(today.getMonth() + 1).padStart(2, '0');
                    const dd = String(today.getDate()).padStart(2, '0');
                    const todayString = `${yyyy}-${mm}-${dd}`;
                    document.getElementById("rok").setAttribute("min", todayString);
                }  
                window.onload = setMinDate;
            </script>
            <input type="date" name="rok" id="rok" required>
           
            <label>Wybierz pakiet:</label>
            <span id="komunikat_pakiet"></span>
            <div class="radio-group">
            <label for="coworker">
                <input type="radio" name="pakiet" id="coworker" value="COWORKER" required>COWORKER (50zł)
            </label>
            <label for="owner">
                <input type="radio" name="pakiet" id="owner" value="OWNER">OWNER (400zł)
            </label>
            </div>
           
            <label for="miejscowosc">Adres korespondencyjny - Miejscowość</label>
            <span id="komunikat_miejscowosc"></span>
            <input type="text" name="miejscowosc" placeholder="Wprowadź miejscowość korespondencyjną" id="miejscowosc" required>
           
            <label for="ulica">Adres korespondencyjny - Ulica</label>
            <span id="komunikat_ulica"></span>
            <input type="text" name="ulica" placeholder="Wprowadź ulicę" id="ulica" required>
           
            <label for="budynek">Adres korespondencyjny - Numer budynku</label>
            <span id="komunikat_budynek"></span>
            <input type="text" name="budynek" placeholder="Wprowadź numer budynku" id="budynek" required>
           
            <label for="mieszkanie">Adres korespondencyjny - Numer mieszkania</label>
            <input type="text" name="mieszkanie" placeholder="Wprowadź numer mieszkania" id="mieszkanie">
           
            <label for="kod">Adres korespondencyjny - kod pocztowy</label>
            <span id="komunikat_kod"></span>
            <input type="text" name="kod" placeholder="Wprowadź kod pocztowy" id="kod" required>
           
            <label for="zainteresowania">Moje zainteresowania/kompetencje</label>
            <span id="komunikat_zainteresowania"></span>
            <textarea name="zainteresowania" id="zainteresowania" required></textarea>
           
            <h3>Zapoznanie z Regulaminem</h3>
            <span id="komunikat_regulamin"></span>
            <label for="regulamin">Oświadczam, że zapoznałem/am się z Regulaminem i zobowiązuję się do jego przestrzegania.</label>
            <input type="checkbox" name="regulamin" id="regulamin" required>

            <span id="komunikat_dane_osobowe"></span>
            <label for="zgoda">Wyrażam zgodę na przetwarzanie moich danych osobowych przez ICHB PAN PCSS.</label>
            <input type="checkbox" name="zgoda" id="zgoda" required>

            <span id="komunikat_faktury"></span>
            <label for="zgoda_faktury">Wyrażam zgodę na przesyłanie faktur drogą elektroniczną.</label>
            <input type="checkbox" name="zgoda_faktury" id="zgoda_faktury">

            <span id="komunikat_oferty"></span>
            <label for="zgoda_oferty">Jestem zainteresowany otrzymywaniem ofert współpracy adekwatnie do wskazanych zainteresowań/kompetencji nie częściej niż raz w tygodniu.</label>
            <input type="checkbox" name="zgoda_oferty" id="zgoda_oferty">
           
            <input type="submit" value="WYŚLIJ">
        </form>
    </div>
</body>
</html>
<?php
function oczysc_dane($dane, $patern) {
    return trim(preg_replace($patern, '', $dane));
}

function oczysc_alfabet($dane) {
    return oczysc_dane($dane, '/[^a-zA-ZąęśćżźĄĘŚĆŻŹ]/');
}

function oczysc_numery($dane) {
    return oczysc_dane($dane, '/[^0-9-.]/');
}

function oczysc_mail($dane) {
    return oczysc_dane($dane, '/[^a-zA-Z0-9@_-]/');
}

function oczysc_adresy($dane) {
    return oczysc_dane($dane, '/[^a-zA-Z0-9_-]/');
}
if (isset($_POST["imie"], $_POST["nazwisko"], $_POST["email"], $_POST["numer_telefonu"], $_POST["rok"])) {
    
    
    $serwer = "localhost";
    $uzytkownik = "root";
    $haslo = "";
    $nazwa_bazy = "kamien";
    
    $polaczenie = new mysqli($serwer, $uzytkownik, $haslo);
    
    if ($polaczenie->connect_error) {
        die("Błąd połączenia: " . $polaczenie->connect_error);
    }
    
    $baza_istnieje = $polaczenie->query("SHOW DATABASES LIKE '$nazwa_bazy'");
    
    if ($baza_istnieje->num_rows == 0) {
        $sql = "CREATE DATABASE $nazwa_bazy";
        if ($polaczenie->query($sql) === TRUE) {
            echo "Baza danych została pomyślnie utworzona<br>";
        } else {
            die("Błąd podczas tworzenia bazy danych: " . $polaczenie->error);
        }
    } else {
        echo "Baza danych już istnieje<br>";
    }
    
    $polaczenie->select_db($nazwa_bazy);
    
    $tabela = "CREATE TABLE IF NOT EXISTS dane (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        imie VARCHAR(50) NOT NULL,
        nazwisko VARCHAR(50) NOT NULL,
        email VARCHAR(150) NOT NULL,
        numer_telefonu VARCHAR(9) NOT NULL,
        rok DATE NOT NULL,
        miejscowosc VARCHAR(100) NOT NULL,
        ulica VARCHAR(100) NOT NULL,
        budynek VARCHAR(100) NOT NULL,
        mieszkanie VARCHAR(100),
        kod VARCHAR(6) NOT NULL,
        zainteresowania TEXT NOT NULL,
        
        zgoda_faktury VARCHAR(3) NOT NULL,
        zgoda_oferty VARCHAR(3) NOT NULL,
        pakiet VARCHAR(20) NOT NULL
    )";
    
    if ($polaczenie->query($tabela) === FALSE) {
        die("Błąd podczas tworzenia tabeli: " . $polaczenie->error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $imie = oczysc_alfabet($_POST['imie']);
        $nazwisko = oczysc_alfabet($_POST['nazwisko']);
        $email = oczysc_mail($_POST['email']);
        $numer_telefonu = oczysc_numery($_POST['numer_telefonu']);
        $rok = oczysc_numery($_POST['rok']);
        $miejscowosc = oczysc_alfabet($_POST['miejscowosc']);
        $ulica = oczysc_adresy($_POST['ulica']);
        $budynek = oczysc_adresy($_POST['budynek']);
        $mieszkanie = oczysc_adresy($_POST['mieszkanie']);
        $kod = oczysc_adresy($_POST['kod']);
        $zainteresowania = oczysc_alfabet($_POST['zainteresowania']);
        $pakiet = oczysc_dane($_POST['pakiet'], '/[^a-zA-Z0-9]/');
        $zgoda_faktury = isset($_POST['zgoda_faktury']) ? "TAK" : "NIE";
        $zgoda_oferty = isset($_POST['zgoda_oferty']) ? "TAK" : "NIE";
        
        $stmt = $polaczenie->prepare("INSERT INTO dane (imie, nazwisko, email, numer_telefonu, rok, miejscowosc, ulica, budynek, mieszkanie, kod, zainteresowania, zgoda_faktury, zgoda_oferty, pakiet) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssssssss", $imie, $nazwisko, $email, $numer_telefonu, $rok, $miejscowosc, $ulica, $budynek, $mieszkanie, $kod, $zainteresowania, $zgoda_faktury, $zgoda_oferty, $pakiet);
        
        if ($stmt->execute()) {
            echo "Nowy rekord został pomyślnie dodany<br>";
        } else {
            echo "Błąd: " . $stmt->error;
        }
        
        $stmt->close();
        $polaczenie->close();
    }
}
?>