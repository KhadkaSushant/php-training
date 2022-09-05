<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="post.php" method="POST">
        <input placeholder="Principal" type="number" name="principal"/>
        <input placeholder="Time" type="number" name="time"/>
        <input placeholder="Rate" type="number" name="rate"/>

        <button>Calculate </button>
    </form>
    <pre>
        <?php 
        $messages = [];
    
        if(!empty($_POST)){
            if(!isset($_POST['principal'])|| empty($_POST['principal'])){
                $messages[] = "Principal is not set";
             }
             if(!isset($_POST['rate'])|| empty($_POST['rate'])){
                $messages[] = "Rate is not set";
             }
            if(!isset($_POST['time'])|| empty($_POST['time'])){
                $messages[] = "Time is not set";
            }
        
        $principal=$_POST['principal'];
        $time=$_POST['time'];
        $rate=$_POST['rate'];
        
        if(!empty($principal) && !empty($rate) && !empty($time)) {
        $si=($principal * $time * $rate)/100;
        
        echo sprintf("Your simple interest is:%s",$si);
        }
    }
         ?>
    </pre>

    <?php
        foreach($messages as $message) {
            echo $message . "<br/>";
        }
    ?>
        
</body>
</html>