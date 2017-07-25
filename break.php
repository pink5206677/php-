<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php
    $i = 1;
    $j = 5;
    $a = 1;
    echo "開始執行前 i = $i , j = $j <br> ";
 
    
    while($a <= 100){
        echo "第 $a 次執行時 i = $i ,j = $j <br>" ;
      if ($i > $j)
      {
         echo "第 $a 次執行時 "; 
         echo "此時發生交錯 i = $i ,j = $j <br> "; 
          break; 
      }
          
        $i++;
        $j--;
        $a++;
      
        
    }
    
    
    
    
    
    ?>
</body>

</html>
