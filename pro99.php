<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>


    <?php
    
    echo "<table border=1>";
    
    
    for($j=1;$j<=9;$j++){
   echo " <tr> ";
    
   for($i=1;$i<=9;$i++){
    echo " <td> ";
    echo $j . " x " . $i . " = " . ($i*$j);
    echo " </td> ";
    }
    echo " </tr> ";
    
    }
    echo "</table>";
    
    
    
    
    ?>
</body>

</html>
