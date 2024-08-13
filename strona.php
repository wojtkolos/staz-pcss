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
        <form method="POST">
            <label for="imie">Imię</label>
            <span id="komunikat_imie"></span>
            <input name="imie" id="imie" placeholder="Wprowadź imię" type="text"  required>
           
           
       
            <label for="nazwisko">Nazwisko</label>
            <span id="komunikat_Nazwisko"></span>
            <input name="nazwisko" id="nazwisko" placeholder="Wprowadź nazwisko" type="text" required>
           

            <label for="email">Adres e-mail</label>
            <span id="komunikat_mail"></span>
            <input type="text" id="email" name="email" placeholder="np. example@ex.com" required>
           


            <label for="numer_telefonu">Numer telefonu</label>
            <span id="komunikat_Tel"></span>
            <input type="text" name="numer_telefonu" id="numer_telefonu" placeholder="np. 964367387" pattern="[0-9]{9}" required>
           

            <label for="rok">Planowany dzień rozpoczęcia korzystania z przestrzeni</label>
            <span id="komunikat_data"></span>
            <script>
                function ustawmindata() {
                const today = new Date();
                const yyyy = today.getFullYear();
                const mm = String(today.getMonth() + 1).padStart(2, '0');
                const dd = String(today.getDate()).padStart(2, '0');
                const todayString = `${yyyy}-${mm}-${dd}`;

                document.getElementById("rok").setAttribute("min", todayString);
                }  
                window.onload = ustawmindata;
            </script>
            <input type="date" name="rok" id="rok" required>
           

            <label>Wybierz pakiet:</label>
            <span id="komunikat_pakiet"></span>
            <label for="coworker">COWORKER (50zł)</label>
            <input type="radio" name="pakiet" id="coworker" value="coworker">
           
            <label for="OWNER">OWNER (400zł)</label>
            <input type="radio" name="pakiet" id="OWNER" value="OWNER">
           
           
            <label for="miejscowosc">Adres korespondencyjny - Miejscowość</label>
            <span id="komunikat_Miejscowosc"></span>
            <input type="text" name="miejscowosc" placeholder="Wprowadź miejscowość korespondencyjną" id="miejscowosc" required>

            <label for="ulica">Adres korespondencyjny - Ulica</label>
            <span id="komunikat_ulica"></span>
            <input type="text" name="ulica" placeholder="Wprowadź ulicę" id="ulica" required>
           
            <label for="budynek">Adres korespondencyjny - Numer budynku</label>
            <span id="komunikat_budynek"></span>
            <input type="text" name="budynek" placeholder="Wprowadź numer budynku" id="budynek" required>


            <label for="mieszkanie">Adres korespondencyjny - Numer mieszkania</label>
            <input type="text" name="mieszkanie" placeholder="Wprowadź numer mieszkania" id="mieszkanie" name="mieszkanie">

            <label for="kod">Adres korespondencyjny - kod pocztowy</label>
            <span id="komunikat_kod"></span>
            <input type="text" name="kod" placeholder="Wprowadź kod pocztowy"  id="kod" required>

            <label for="zainteresowania">Moje zainteresowania/kompetencje</label>
            <span id="komunikat_zainteresowania"></span>
            <textarea name="zainteresowania" id="zainteresowania" required ></textarea>

            <h3>Zapoznanie z Regulaminem</h3>
            <span id="komunikat_regulamin"></span>
            <input type="checkbox" name="Regulamin" id="regulamin" required>
            <label for="regulamin">Oświadczam, że zapoznałem/am się z Regulaminem i zobowiązuję się do jego przestrzegania.</label>

            <h3>Zgoda na przetwarzanie i przechowywanie danych osobowych</h3>
            <span id="komunikat_dane_osobowe"></span>
            <input type="checkbox" name="zgoda" id="zgoda" required>
            <label for="zgoda">Wyrażam zgodę na przetwarzanie moich danych osobowych przez ICHB PAN PCSS.</label>

            <h3>Zgoda na przesyłanie faktur/rachunków drogą elektroniczną</h3>
            <span id="komunikat_faktury"></span>
            <input type="checkbox" name="Ezgoda" id="Ezgoda" required>
            <label for="EZgoda">Wyrażam zgodę na przesyłanie faktur drogą elektroniczną.</label>


            <h3>Jestem zainteresowany otrzymywaniem ofert współpracy adekwatnie do wskazanych zainteresowan/kompetencji nie częściej niż raz w tygodniu</h3>
            <span id="komunikat_faktury"></span>
            <input type="checkbox" name="Ezgoda" id="Ezgoda">
            <input type="submit" value="WYŚLIJ">
        </form>
        <?php
        if (isset($_POST["imie"],$_POST["nazwisko"],$_POST["email"],$_POST["numer_telefonu"],$_POST["rok"])) {
       
        $serwer = "localhost";
        $uzytkownik = "root";
        $haslo = "";
        $nazwa_bazy = "kamien";
       
        $polaczenie = new mysqli($serwer, $uzytkownik, $haslo);
    
       
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
       
        // Wybierz bazę danych
        $polaczenie->select_db($nazwa_bazy);
       
       
        $tabela = "CREATE TABLE IF NOT EXISTS dane (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            imie VARCHAR(50) NOT NULL,
            nazwisko VARCHAR(50) NOT NULL,
            email VARCHAR(150) NOT NULL,
            numer_telefon INT(9) NOT NUll,
            rok DATE NOT NUll,
            miejscowosc VARCHAR(100) NOT NULL,
            ulica VARCHAR(100) NOT NULL,
            budynek VARCHAR(100) NOT NULL,
            mieszkanie INT NOT NULL,
            kod VARCHAR(6) NOT NULL,
            zainteresowania VARCHAR(150) NOT NULL
        )";
       
        if ($polaczenie->query($tabela) === FALSE) {
            die("Błąd podczas tworzenia tabeli: " . $polaczenie->error);
        }
       
      
        function oczysc_alfabet($dane) {
            $dane = preg_replace('/[^a-zA-Z]/', '', $dane);
            $dane = trim($dane);
            return $dane;
        }
        function oczysc_numery($dane) {

            $dane = preg_replace('/[^0-9-.]/', '', $dane);
            $dane = trim($dane);
            return $dane;
        }
            function oczysc_mail($dane) {
                $dane = preg_replace('/[^a-zA-Z0-9@_-]/', '', $dane);
                $dane = trim($dane);
                return $dane;
            }
        }
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $imie = oczysc_alfabet($_POST['imie']);
            $nazwisko = oczysc_alfabet($_POST['nazwisko']);
            $email= oczysc_mail($_POST['email']);
            $numer_telefonu=oczysc_numery($_POST['numer_telefonu']);
            $rok = oczysc_numery($_POST['rok']);
            $miejscowosc=oczysc_alfabet($_POST['miejscowosc']);
            $ulica=oczysc_mail($_POST['ulica']);
            $budynek=oczysc_mail($_POST['budynek']);
            $mieszkanie=oczysc_mail($_POST['mieszkanie']);
            $kod=oczysc_numery($_POST['kod']);
            $zainteresowania=oczysc_alfabet($_POST['zainteresowania']);
       
           
           
           
            
            $ps = $polaczenie->prepare("INSERT INTO dane (imie, nazwisko, email, numer_telefon, rok, miejscowosc, ulica, budynek, mieszkanie, kod, zainteresowania) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $ps->bind_param("sssssssssss", $imie, $nazwisko, $email, $numer_telefonu, $rok, $miejscowosc, $ulica, $budynek, $mieszkanie, $kod, $zainteresowania);
       
            if ($ps->execute()) {
                echo "Nowy rekord został pomyślnie dodany<br>";
            } else {
                echo "Błąd: " . $ps->error;
            }
       
            $ps->close();
        }
       
        $polaczenie->close();
        
       
        ?>
       
    </div>
</body>
</html>
