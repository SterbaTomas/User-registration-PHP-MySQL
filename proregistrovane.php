<?php 
    include "menu.php";
    session_start();
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
    <h1>Pro registrovane</h1>
    
    <?php 
    menu();

    if(isset($_SESSION["uzivatele"]) && $_SESSION["uzivatele"] == ""){
    ?>
        <p>Nejste prihlaseni. Prihlaste se znovu <a href="prihlaseni.php">zde.</a></p>
    <?php
    }else{
    ?>
        <p>Tento text vidi pouze prihlaseni uzivatele.</p>
    <?php } ?>

</body>
</html>