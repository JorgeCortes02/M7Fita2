<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex23pagina1</title>

    <?php

    if (isset($_POST["seleccio"])) {

        $seleccio = $_POST["seleccio"];

        if ($seleccio == "foc") {

            echo "<style> body{ background-color : 	RGB(255, 69, 0); } </style>   ";

        } elseif ($seleccio == "aigua") {

            echo "<style> body{ background-color : RGB(0, 191, 255); } </style>   ";

        } elseif ($seleccio == "terra") {

            echo "<style> body{ background-color : RGB(139, 69, 19); } </style>   ";

        }

    }

    ?>

</head>

<body>


    <form method="post">

        <select name="seleccio">

            <option value="foc">foc</option>
            <option value="aigua">aigua</option>
            <option value="terra">terra</option>
        </select>

        <input type="submit">

    </form>



</body>

</html>