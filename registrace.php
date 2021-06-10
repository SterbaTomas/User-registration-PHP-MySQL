<?php 
    include "menu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrace</h1>
    
    <?php 
    menu();
    ?>

    <form action="registraceb.php" method="POST">
        <input name="jmeno" type="text" placeholder="Jmeno"><br>
        <input name="prijmeni" type="text" placeholder="Prijmeni"><br>
        <input name="prezdivka" type="text" placeholder="Prihlasovaci jmeno"><br>
        <input name="heslo" type="text" placeholder="Heslo"><br>
        <input type="submit" value="Odeslat">
    </form>
</body>
</html>