<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    
    $sum = 0;
    $a = 0;
  
    while ($a < 10){
      //  $a++;
      //  $sum = $sum + $a ;
      $sum += (++$a);  
    }
   
    
   echo $sum; 
    
    
    
    ?>
</body>

</html>
