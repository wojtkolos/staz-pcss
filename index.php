<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formularz</title>
</head>
<body>
    <header><img src="logo.png" height="100px"></header>
    <main>
        <form method="post">
        Imię:<input type="text" name="name">
        Nazwisko:<input type="text" name="surname">
        Email:<input type="email" name="email">
        <br>
        <input type="submit" value="zatwierdź">
        </form>
    </main>
    <?php
    @$name = $_POST['name'];
    
    ?>
</body>
</html>