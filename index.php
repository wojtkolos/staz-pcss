<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz Rejestracyjny - FutureLabs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><img src="logo.png"></header>
    <div class="container">
        <h2>Formularz Rejestracyjny do FutureLabs</h2>
        <form  method="POST">
            <label for="first_name">Imię*</label>
            <input type="text" id="first_name" name="first_name" required>
            
            <label for="last_name">Nazwisko*</label>
            <input type="text" id="last_name" name="last_name" required>
            
            <label for="email">Email*</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Telefon*</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="start_date">Planowany dzień rozpoczęcia korzystania z przestrzeni*</label>
            <input type="date" id="start_date" name="start_date" required min="<?php echo date('Y-m-d'); ?>">
            
            <label>Pakiet*</label>
            <div>
                <input type="checkbox" id="coworker" name="package[]" value="coworker">
                <label for="coworker">coworker - 50 PLN</label>
            </div>
            <div>
                <input type="checkbox" id="owner" name="package[]" value="owner">
                <label for="owner">owner - 400 PLN</label>
            </div>
            
            <label for="city">Adres korespondencyjny - miejscowość*</label>
            <input type="text" id="city" name="city" required>
            
            <label for="street">Adres korespondencyjny - ulica*</label>
            <input type="text" id="street" name="street" required>
            
            <label for="building_number">Adres korespondencyjny - numer budynku*</label>
            <input type="text" id="building_number" name="building_number" required>
            
            <label for="apartment_number">Adres korespondencyjny - numer mieszkania</label>
            <input type="text" id="apartment_number" name="apartment_number">
            
            <label for="postal_code">Adres korespondencyjny - kod pocztowy*</label>
            <input type="text" id="postal_code" name="postal_code" required>
            
            <label for="interests">Moje zainteresowania/kompetencje*</label>
            <textarea id="interests" name="interests" required placeholder="Słowa kluczowe dotyczące wiedzy/umiejętności w obszarze IT lub innych obszarach, zorganizowane wydarzenia, inne"></textarea>
            
            <label>
                <input type="checkbox" name="regulations" required>
                Zapoznałem się z Regulaminem*
            </label>
            
            <label>
                <input type="checkbox" name="data_processing" required>
                Zgoda na przetwarzanie i przechowywanie danych osobowych*
            </label>
            
            <label>
                <input type="checkbox" name="invoice_email" required>
                Zgoda na przesyłanie faktur/rachunków drogą elektroniczną*
            </label>
            
            <label>
                <input type="checkbox" name="offers">
                Jestem zainteresowany otrzymywaniem ofert współpracy adekwatnie do wskazanych zainteresowan/kompetencji nie częściej niż raz w tygodniu
            </label>
            
            <button type="submit" >Zarejestruj się</button>
        </form>
    </div>
    <div id="info">
    <?php 
    function function_alert($message) { 
        echo "<script>alert('$message');</script>"; 
    } 
      
    function clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    @$first_name = clean_input($_POST["first_name"]);
    @$last_name = clean_input($_POST["last_name"]);
    @$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    @$phone = clean_input($_POST["phone"]);
    @$start_date = clean_input($_POST["start_date"]);
    @$packages = isset($_POST["package"]) ? $_POST["package"] : [];
    @$city = clean_input($_POST["city"]);
    @$street = clean_input($_POST["street"]);
    @$building_number = clean_input($_POST["building_number"]);
    @$apartment_number = clean_input($_POST["apartment_number"]);
    @$postal_code = clean_input($_POST["postal_code"]);
    @$interests = clean_input($_POST["interests"]);
    @$regulations = isset($_POST["regulations"]) ? true : false;
    @$data_processing = isset($_POST["data_processing"]) ? true : false;
    @$invoice_email = isset($_POST["invoice_email"]) ? true : false;
    @$offers = isset($_POST["offers"]) ? true : false;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        function_alert("Nieprawidłowy format adresu email.");
        exit;
    }

    
    echo "Rejestracja zakończona sukcesem!";
    
?>
    </div>
</body>
</html>
