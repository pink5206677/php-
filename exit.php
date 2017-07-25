<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    
        $count = 0 ; // 紀錄找到第幾個 3的倍數

        for ($num=1 ; $num <= 50  ; $num++ ) { 
            if (($num % 3) == 0){
                $count++; // 找到三的倍數 

                if ($count == 9){
                    echo "找到第9個三的倍數";
                    echo " 此數為 :" . $num ."<br>" ;
                    exit;
                } else {
                    echo "找到第" . $count . "個 三的倍數 為: ".$num . "<br>";
                }
            }
        }


        echo "程式繼續執行";


    ?>
</body>
</body>

</html>
