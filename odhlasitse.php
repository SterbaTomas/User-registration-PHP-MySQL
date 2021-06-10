<?php 
    include "menu.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=S, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Odlhlasit se</h1>

    <?php 
    menu();

    $_SESSION["uzivatele"] = "";
    ?>
    <p>Jste odhlasen, pro opetovne prihlaseni se vratte na stranku <a href="prihlaseni.php">pro prihlaseni.</a></p>

</body>
</html>