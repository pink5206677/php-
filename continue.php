<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php

        $a = 0;
        $sum = 0;
        while ($a < 100) {
            $a++;
            if (($a % 4) != 0)
            {
                continue;
            }

            $sum += $a;
        }

        echo $sum ;
    ?>

</body>

</html>
