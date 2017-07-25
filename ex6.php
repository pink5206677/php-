<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    
    $blood = "A";
    
    
    $message = "";
    
    switch ($blood) {
        case 'A':
          $message = "A型血的分析";
          break;
        case 'B':
          $message = "B型血的分析";
          break;
        case 'AB':
          $message = "AB型血的分析";
          break;
        case 'O':
          $message = "O型血的分析";
          break;
        
        defult:
          $message = "輸入錯誤";
          break;
        
    }
    
     echo $message;
    
    ?>
</body>

</html>
