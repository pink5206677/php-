<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    
    $score = 99 ;
    $rank = "";
    
    
    if ($score >= 90 && $score < 100)
    {
        $rank = "A";
    }
    elseif($score >= 80 && $score < 90)
    {
        $rank = "B";
    }
    elseif($score >= 70 && $score < 80)
    {
        $rank = "C";
    }
    elseif($score >= 60 && $score < 70)
    {
        $rank = "D";
    }
    else($score <= 60);
    {
        $rank = "E";
        
    }
    
    echo $rank;
    
    
    ?>
</body>

</html>
