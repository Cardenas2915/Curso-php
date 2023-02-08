<?php
    session_name("LOGIN");//MODIFICA EL NOMBRE DE LA SESSION EN LA COOKIES 
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>

<form action="login.php" method="POST">

    <label for="">usuario</label>
    <!-- el pattern limita y define que caracteres se puede usar y que cantidad se debe usar -->
    <input type="text" name="usuario" pattern="[a-zA-Z]{3,10}" maxlength="10" > 
    <br>
    <label for="">clave</label>
    <input type="text" name="clave" pattern="[a-zA-Z0-9@.-]{3,30}" maxlength="30">
    <br><br>
    <button type="submit">login</button>

</form>
</body>
</html>