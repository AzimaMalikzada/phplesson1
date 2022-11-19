<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- <?php

    $a = 5;
    $b = 17;
    $cem = $a/$b;
    echo $cem;

   $a = "Azima";
   var_dump($a);
?> -->

<ul>
    <li>
        <a href="index.php">Index</a>
    </li>
    <li>
        <a href="about.php">About</a>
    </li>
</ul>
<h1>Index page</h1>

<?php
$pass = "123";
echo $pass;
echo md5($pass);
?>
</body>
</html>