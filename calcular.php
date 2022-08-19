<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular</title>
</head>
<body>
    <!--Uso de HTML + PHP Famoso codigo macarrão-->
    O resultado da opreçãio <b>
    <?php
        echo $_POST ["operacao"]
    ?>
    <b>é
    <?php
        switch($_POST["operacao"]) {
                //conta de mais 
            case "soma":
                echo $_POST["primeiro"] + $_POST["segundo"];
                break;
                //conta de menos 
            case "subtrair":
                echo $_POST["primeiro"] - $_POST["segundo"];
                break;
                //conta de divisão
            case "dividir":
                echo $_POST["primeiro"] / $_POST["segundo"];
                break;
                //conta de multiplicar
            case "multiplicar":
                echo $_POST["primeiro"] * $_POST["segundo"];
                break;
        }
    ?>
</body>
</html>