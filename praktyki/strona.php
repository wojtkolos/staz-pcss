<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="styl.css" rel="stylesheet">
  <title>Zgłoszenie</title>
</head>
<body>
<div class="cont">
  <header>
    
  </header>

  <main class="container">
  <img src="fl+psnc-poziom4.png" style="width:500px;height:80px;">
  <h1 style="color:aliceblue;text-align:center;">Zgłoszenie</h1>
<form action="strona2.php" method="post">
    <label for="name">Imię *</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="surname">Nazwisko *</label>
    <input type="text" id="surname" name="surname" required><br><br>
    
    <label for="email">Adres E-mail *</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="phone">Numer telefonu *</label>
    <input type="tel" id="phone" name="phone" required><br><br>
    
    <label for="start_date">Planowany dzień rozpoczęcia korzystania z przestrzeni *</label>
    <input type="date" id="start_date" name="start_date" required min="<?php echo date('Y-m-d'); ?>"><br><br>
    
    <label for="package">Wybierz pakiet: *</label>
    <input type="checkbox" id="coworker" name="package[]">
    <label for="coworker">Coworker (50 PLN)</label>
    <input type="checkbox" id="owner" name="package[]">
    <label for="owner">Owner (400 PLN)</label><br><br>
    
    <label for="city">Adres korespondecyjny - Miejsowośc *</label>
    <input type="text" id="city" name="city" required><br><br>
    
    <label for="street">Adres korespondencyjny - Ulica *</label>
    <input type="text" id="street" name="street" required><br><br>
    
    <label for="building_number">Adres korespondencyjny - Numer budynku *</label>
    <input type="text" id="building_number" name="building_number" required><br><br>
    
    <label for="apartment_number">Adres korespondencyjny - Numer mieszkania</label>
    <input type="text" id="apartment_number" name="apartment_number"><br><br>
    
    <label for="postal_code">Adres korespondencyjny - Kod pocztowy *</label>
    <input type="text" id="postal_code" name="postal_code" required><br><br>
    
    <label for="interests">Moje zainteresowania/kompetencje *</label>
    <textarea id="interests" name="interests" required></textarea><br><br>
    
    <label for="regulations">Zapoznanie z Regulaminem *</label>
    <input type="checkbox" id="regulations" name="regulations" required><br><br>
    
    <label for="data_processing">Zgoda na przetwarzanie i przechowywanie danych osobowych *</label>
    <input type="checkbox" id="data_processing" name="data_processing" required><br><br>
    
    <label for="electronic_invoices">Zgoda na przesyłanie faktur/rachunków drogą elektroniczną *</label>
    <input type="checkbox" id="electronic_invoices" name="electronic_invoices" required><br><br>
    
    
    <input type="submit" value="Register" id="sub">
    </main>
    </div>
  </form>
  <?php
  // Validate and process the form data
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var($_POST["name"]);
    $surname = filter_var($_POST["surname"]);
    $email = filter_var($_POST["email"]);
    $phone = filter_var($_POST["phone"]);
    $start_date = filter_var($_POST["start_date"]);
    $package = $_POST["package"];
    $city = filter_var($_POST["city"]);
    $street = filter_var($_POST["street"]);
    $building_number = filter_var($_POST["building_number"]);
    $apartment_number = filter_var($_POST["apartment_number"]);
    $postal_code = filter_var($_POST["postal_code"]);
    $interests = filter_var($_POST["interests"]);
    $regulations = $_POST["regulations"];
    $data_processing = $_POST["data_processing"];
    $electronic_invoices = $_POST["electronic_invoices"];
  }
?>
  
</body>
</html>

