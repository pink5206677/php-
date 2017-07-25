<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    $salary = 5000;
    $tax = 0.9;
    $age = 5;
    
    if($age >= 18){
        $salary *= $tax;
    }else {
      echo  "你未成年!!";
    }
    
    echo "薪水實拿" . $salary;
    
    
    ?>
</body>

</html>
