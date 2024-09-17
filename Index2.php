<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

            echo" <b> Merhaba Dünya </b> <br/>";

        $_Name="Ege";
        $_Surname="Aydın";
        $Not1 = 81;
        $Not2 = 92;
        $Ortalama = ($Not1+$Not2)/2;

            echo "Adınız ve Soyadınız: $_Name $_Surname <br/>";
            echo " iki sınav notunuzun ortalaması: $Ortalama <br/>";
            echo "1.Sınav: $Not1 <br/>";
            echo "2.Sınav: $Not2";

    ?>
</body>
</html>