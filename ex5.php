<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    $user1 = "allan";
    $pwd1 = "1234";
    
    $user2 = "bill";
    $pwd2 = "5678";
    
    
    $loginUser = $_POST['userName'];
    $pwd = $_POST['passWord'];
    
    if( ($loginUser == $user1) && ($pwd == $pwd1)){
        $message = "歡迎光臨" . $user1 ;
    }elseif( ($loginUser == $user2) && ($pwd == $pwd2)){
        $message =  "歡迎光臨" . $user2 ;}
    else{
         $message = "密碼錯誤" ;
    }
    
    echo $message;
    
    ?>
</body>

</html>
