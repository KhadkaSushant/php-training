<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="request.php" method="GET">
        <input placeholder="Principal" type="number" name="principal"/>
        <input placeholder="Time" type="number" name="time"/>
        <input placeholder="Rate" type="number" name="rate"/>

        <button>Calculate </button>
    </form>
    <pre>
        <?php 
        $messages = [];
    
        if(!empty($_GET)){
            if(!isset($_GET['principal'])|| empty($_GET['principal'])){
                $messages[] = "Principal is not set";
             }
             if(!isset($_GET['rate'])|| empty($_GET['rate'])){
                $messages[] = "Rate is not set";
             }
            if(!isset($_GET['time'])|| empty($_GET['time'])){
                $messages[] = "Time is not set";
            }
        
        $principal=$_GET['principal'];
        $time=$_GET['time'];
        $rate=$_GET['rate'];
        
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