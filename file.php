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
    @$regulations = $_POST["regulations"];
    @$data_processing = $_POST["data_processing"];
    @$invoice_email = $_POST["invoice_email"];
    @$offers = $_POST["offers"];
    if(isset($_POST['email'])){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        function_alert("Nieprawidłowy format adresu email.");
        exit;
    }
}

    
    echo "Rejestracja zakończona sukcesem!";
    
?>