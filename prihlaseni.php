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

    <?php 
        menu();
    ?>

    <form action="prihlasenib.php" method="POST">
        <input name="prjmeno" type="text" placeholder="Prihlasovaci jmeno"><br>
        <input name="prheslo" type="text" placeholder="Heslo"><br>
        <input name="prheslo2" type="text" placeholder="Overeni hesla"><br>
        <input type="submit">
    </form>
</body>
</html>