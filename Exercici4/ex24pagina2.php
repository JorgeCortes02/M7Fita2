<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex24.1</title>
</head>
<body>
    
<?php

if(isset($_POST["userPassword"]) && isset($_POST["repeatUserPassword"]) ){

    $pass1 = $_POST["userPassword"];
    $pass2 = $_POST["repeatUserPassword"];

    if($pass1 != $pass2){

        echo "ERROR: les contrasenyes han de coincidir";

    }

   elseif (!preg_match('/\d/', $pass1)){
    echo "ERROR: la contrasenya ha de tenir al menys un número";

   }
}


?>



</body>
</html>