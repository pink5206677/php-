<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    $chinese = 70; 
    $english = 60; 
    $math = 50; 
    echo "國文或英文是否有一個及格?" ; 
    echo( ($chinese >= 60) || (  $english >= 60 ) ) . "<br>" ;
        
    echo "數學或英文是否都及格?" ; 
     echo( ($math >= 60) && (  $english >= 60 ) ). "<br>" ;
    
    echo "數學是否不及格?" ;
     echo( !($math >= 60));
    
    
    
    
        ?>
</body>

</html>
