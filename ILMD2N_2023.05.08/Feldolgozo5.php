<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feldolgozó</title>
</head>
<body>
    <font style="font-size:18pt">
    <h2>HTML5 űrlap_ILMD2N</h2>
    <?php
    echo("<strong>Név:</strong>". $_POST['nev']."<br><br>");
    echo("<strong>PIN kód:</strong>". $_POST['kod']."<br><br>");
    echo("<strong>Gyümölcs:</strong>". $_POST['gyumolcs']."<br><br>");
    ?>
    <a href="urlap.html"> Vissza az űrlapra </a>
</font>
</body>
</html>