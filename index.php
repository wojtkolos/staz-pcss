<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formularz</title>
</head>
<body>
    <header><img src="logo.png" height="100px" id="logo"></header>
    <h1>Formularz</h1>
    <main>
        <form method="post">
        <div>
        <label class="wymagane" for="name">Imię:</label>
        <input type="text" name="name"><br>
        </div>
        <div>
        <label class="wymagane" for="surname">Nazwisko:</label>
        <input type="text" name="surname"><br>
        </div>
        <div>
        <label class="wymagane" for="email">Email:</label>
        <input type="email" name="email"><br>
        </div>
        <div>
        <label class="wymagane" for="phone">Telefon:</label>
        <input type="phone" name="phone"><br>
        </div>
        <label class="wymagane" for="email">Email:</label>
        <input type="email" name="email"><br>
        <input type="submit" value="zatwierdź" id="zatwierdz">
        </form>
    </main>
    <?php
    @$name = $_POST['name'];
    
    ?>
</body>
</html>