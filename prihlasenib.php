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

    <?php
        menu();
        $prjmeno = addslashes($_POST["prjmeno"]);
        $prheslo = addslashes($_POST["prheslo"]);
        $prheslo2 = addslashes($_POST["prheslo2"]);
        $con = mysqli_connect("localhost", "zkouska", "heslo", "zkouskadb");
        if(!($con)){
            die("Nelze se pripojit do databaze!");
        }

        $dotaz = "SELECT prezdivka FROM tabulka WHERE prezdivka = '$prjmeno' AND heslo = '$prheslo'";
        if(!($vysledek = mysqli_query($con, $dotaz))) {
            die(" Zadal jsi spatne udaje. ");
        }

        while($overeni = mysqli_fetch_array($vysledek)){
            if($overeni["prezdivka"] == $prjmeno && $prheslo == $prheslo2){ 
                $_SESSION["uzivatele"] = $overeni["prezdivka"];     
            ?>
            <p>Jsi prihlasen, nyni muzes do sekce  <a href="proregistrovane.php">pro registrovane.</a></p>
        <?php
            }
        }
    ?>

</body>
</html>