<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    $price =[7000,12000,38000];
    $product = ["小米機" , "HTC" , "IPHONE8" ];
    
    for ($i=0; $i < count($price); $i++){
        echo "手機 :" . $product[$i] . "價格為 : " . $price[$i] ."<br>";
    }
    
    
    
    
    
    
    ?>
</body>

</html>
