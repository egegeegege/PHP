<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="">1-</label>
        <input type="text" id="name" name="name" placeholder="Adınız">
    </form>
    <br>
    <?php

            echo" <font size=12> Merhaba Dünya </font> <br/>";

        $_Name="Ege";
        $_Surname="Aydın";
        $Not1 = 81;
        $Not2 = 92;
        $Ortalama = ($Not1+$Not2)/2;

            echo "Adınız ve Soyadınız: $_Name $_Surname <br/>";
            echo " iki sınav notunuzun ortalaması: $Ortalama <br/>";
            echo "1.Sınav: $Not1 <br/>";
            echo "2.Sınav: $Not2";

            if ($Ortalama < 50) {
                echo "<br/>Ortalamanız 50 den küçük";
            }
            else if ($Ortalama > 50) {
                echo "<br/>Ortalamanız 50 den büyük";
            }
            else {
                echo "<br/>Ortalamanız 50 ye  eşittir";
            }

            $_Yas = 57;
            $_Gunsayısı = 5500;
            $_SigortaTuru = "SGK";
            $Cinsiyet = "E";
            $_Maas = 17002;
            $_Ikramiye = $_Maas*5;
            $_Ikramiye2 = $_Maas*6;

            if($Cinsiyet == "E" && $_Gunsayısı >5000 && $_Yas >= 55){
                echo "</br> $_Name $_Surname emekli oldunuz $_Ikramiye TL kadar maaş aldınız";
            }
            elseif($Cinsiyet == "E" && $_Gunsayısı >5500 && $_Yas >= 50&& $_SigortaTuru = "SGK"){
                echo "</br> $_Name $_Surname emekli oldunuz $_Ikramiye2 TL kadar maaş aldınız";
            }
            else{
                echo "</br> $_Name $_Surname emekli değilsiniz";
            }
    ?>
</body>
</html>