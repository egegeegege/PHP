<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Array of objects representing the countries and their population
    $sınav1 = 80;
    $sınav2 = 34;
    $so = $sınav1+$sınav2/2;
    $bso = $so/0.40;
    $final = 74;
    $fs = $final/0.60;
    $total = $bso+$final/2;
        if($total>=50 && $final>=50){
            echo"Tebrikler Başarıyla Geçtiniz";
        }
        else{
            echo"Kaldınız";
        }
    ?>
</body>
</html>