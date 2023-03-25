<?php
$name=$_GET["name"];
$email=$_GET["email"];
$number=$_GET["number"];
$location=$_GET["location"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    <div class="container">
        <div class="card">
            <div class="top-card"></div>
            <div class="bottm-card">
                <img src="./assets/img.jpeg" alt="">
                <form action="" method="GET">
                <div class="name font">
                    <p><?php echo $name??"" ?></p>
                </div>
               <div class="email font">
                <p><?php echo $email??"" ?></p>
               </div>
               <div class="number font">
                <p><?php echo $number??"" ?></p>
               </div>
               <div class="location font">
                <p><?php echo $location??"" ?></p>
               </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>