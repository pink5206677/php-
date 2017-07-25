<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    
    $sum = 0;
    $a = 1;
    
    
    
    do{
        
    //$sum = $sum + ($a++);
    
    $sum = $sum + $a;
    $a = $a +1;
        
    }while ($a <= 10);
    
    
    echo $sum;
    
    ?>
</body>

</html>
