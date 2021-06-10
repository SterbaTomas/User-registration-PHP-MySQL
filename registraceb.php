<?php 
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
        if(!($con = mysqli_connect("localhost", "zkouska", "heslo", "zkouskadb"))){
            die("Nelze se pripojit k databazovemu serveru!");
            }

        $prezdivka = addslashes($_POST["jmeno"]);
        $dotaz = "SELECT prezdivka FROM tabulka WHERE prezdivka = '$prezdivka'";
        if(!($vysledek = mysqli_query($con, $dotaz))){
            die("Nelze prov0st dotaz.");
        }
        while($radek = mysqli_fetch_array($vysledek)){
        if($radek["prezdivka"] == $prezdivka){
            echo "Uzivatel jiz existuje, zadej jinou prezdivku.";
        }else{
        if(mysqli_query($con, "INSERT INTO tabulka(krestni, prijmeni, prezdivka, heslo) VALUES('".
        addslashes($_POST["jmeno"])."','".
        addslashes($_POST["prijmeni"])."','".
        addslashes($_POST["prezdivka"])."','".
        addslashes($_POST["heslo"])."')")){
            echo "Uspesne vlozeno.";
            $_SESSION["uzivatele"] = $_POST["prezdivka"];
        }
        else{
            echo "Nelze provest dotaz!";
        }
    }
}
    mysqli_free_result($vysledek);        
    mysqli_close($con);
        
    ?>

</body>
</html>