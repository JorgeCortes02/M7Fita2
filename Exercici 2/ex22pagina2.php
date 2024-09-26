<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex22pagina2</title>
</head>
<body>



<?php

if($_POST["quantitat"]){

    for($i = 1; $i <= $_POST["quantitat"]; $i++){

        echo "<a href = 'ex22pagina3.php?comanda=$i'> Comanda" . $i . "</a> <br>"; 

    }



}



?>
    
</body>
</html>