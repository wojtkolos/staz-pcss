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

  <form action="" method="post">
  <label for="name">Imię *</label>
  <input type="text" id="name" name="name" required aria-required="true"><br><br>

  <label for="surname">Nazwisko *</label>
  <input type="text" id="surname" name="surname" required aria-required="true"><br><br>

  <label for="email">Adres E-mail *</label>
  <input type="email" id="email" name="email" required aria-required="true"><br><br>

  <label for="phone">Numer telefonu *</label>
  <input type="tel" id="phone" name="phone" required aria-required="true"><br><br>

  <label for="start_date">Planowany dzień rozpoczęcia korzystania z przestrzeni *</label>
  <input type="date" id="start_date" name="start_date" required aria-required="true" min="<?php echo date('Y-m-d');?>"><br><br>

  <label for="package">Wybierz pakiet: *</label>
  <input type="checkbox" id="coworker" name="package[]" value="coworker" required aria-required="true">
  <label for="coworker">Coworker (50 PLN)</label>
  <input type="checkbox" id="owner" name="package[]" value="owner" required aria-required="true">
  <label for="owner">Owner (400 PLN)</label><br><br>

  <label for="city">Adres korespondecyjny - Miejsowość *</label>
  <input type="text" id="city" name="city" required aria-required="true"><br><br>

  <label for="street">Adres korespondencyjny - Ulica *</label>
  <input type="text" id="street" name="street" required aria-required="true"><br><br>

  <label for="building_number">Adres korespondencyjny - Numer budynku *</label>
  <input type="text" id="building_number" name="building_number" required aria-required="true"><br><br>

  <label for="apartment_number">Adres korespondencyjny - Numer mieszkania</label>
  <input type="text" id="apartment_number" name="apartment_number"><br><br>

  <label for="postal_code">Adres korespondencyjny - Kod pocztowy *</label>
  <input type="text" id="postal_code" name="postal_code" required aria-required="true"><br><br>

  <label for="interests">Moje zainteresowania/kompetencje *</label>
  <textarea id="interests" name="interests" required aria-required="true"></textarea><br><br>

  <label for="regulations">Zapoznanie z Regulaminem *</label>
  <input type="checkbox" id="regulations" name="regulations" required aria-required="true"><br><br>

  <label for="data_processing">Zgoda na przetwarzanie i przechowywanie danych osobowych *</label>
  <input type="checkbox" id="data_processing" name="data_processing" required aria-required="true"><br><br>

  <label for="electronic_invoices">Zgoda na przesyłanie faktur/rachunków drogą elektroniczną *</label>
  <input type="checkbox" id="electronic_invoices" name="electronic_invoices" required aria-required="true"><br><br>

  <input type="submit" value="Register" id="sub">

</form>
<?php

$errors = array();

// Validate and process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = filter_var($_POST["name"], FILTER_SANITIZE_STRIPPED);
  $surname = filter_var($_POST["surname"], FILTER_SANITIZE_STRIPPED);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $phone = filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);
  $start_date = filter_var($_POST["start_date"], FILTER_SANITIZE_STRING);
  $package = $_POST["package"];
  $city = filter_var($_POST["city"], FILTER_SANITIZE_STRIPPED);
  $street = filter_var($_POST["street"], FILTER_SANITIZE_STRIPPED);
  $building_number = filter_var($_POST["building_number"], FILTER_SANITIZE_NUMBER_INT);
  $apartment_number = filter_var($_POST["apartment_number"], FILTER_SANITIZE_NUMBER_INT);
  $postal_code = filter_var($_POST["postal_code"], FILTER_SANITIZE_STRING);
  $interests = filter_var($_POST["interests"], FILTER_SANITIZE_STRING);
  $regulations = $_POST["regulations"];
  $data_processing = $_POST["data_processing"];
  $electronic_invoices = $_POST["electronic_invoices"];

 /*
  if (empty($name)) {
    $errors[] = "Imię jest wymagane";
  }
  if (empty($surname)) {
    $errors[] = "Nazwisko jest wymagane";
  }
  if (empty($email)) {
    $errors[] = "Adres E-mail jest wymagany";
  }
  if (empty($phone)) {
    $errors[] = "Numer telefonu jest wymagany";
  }
  if (empty($start_date)) {
    $errors[] = "Planowany dzień rozpoczęcia korzystania z przestrzeni jest wymagany";
  }
  if (empty($package)) {
    $errors[] = "Wybierz pakiet";
  }
  if (empty($city)) {
    $errors[] = "Miejsowość jest wymagana";
  }
  if (empty($street)) {
    $errors[] = "Ulica jest wymagana";
  }
  if (empty($building_number)) {
    $errors[] = "Numer budynku jest wymagany";
  }
  if (empty($postal_code)) {
    $errors[] = "Kod pocztowy jest wymagany";
  }
  if (empty($interests)) {
    $errors[] = "Moje zainteresowania/kompetencje są wymagane";
  }
  if (empty($regulations)) {
    $errors[] = "Zapoznanie z Regulaminem jest wymagane";
  }
  if (empty($data_processing)) {
    $errors[] = "Zgoda na przetwarzanie i przechowywanie danych osobowych jest wymagana";
  }
  if (empty($electronic_invoices)) {
    $errors[] = "Zgoda na przesyłanie faktur/rachunków drogą elektroniczną jest wymagana";
  }
*/
  //email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Nieprawidłowy adres E-mail";
  }

  //phone number
  if (!preg_match("/^[0-9]{9}$/", $phone)) {
    $errors[] = "Nieprawidłowy numer telefonu";
  }

  //postal code
  if (!preg_match("/^[0-9]{2}-[0-9]{3}$/", $postal_code)) {
    $errors[] = "Nieprawidłowy kod pocztowy";
  }

  //errors
  if (!empty($errors)) {
    echo "<div class='error'>";
    foreach ($errors as $error) {
      echo "<p>$error</p>";
    }
    echo "</div>";
  } else {
    $registration_successful = true;
    ?>
    <script>
      alert('Dziękuję za przesłanie formularza!');
    </script>
    <?php
  }
}
?>
</main>
</div>
</body>
</html>
