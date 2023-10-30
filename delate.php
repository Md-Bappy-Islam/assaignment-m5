<?php

$fp=fopen("./data/userData.txt","a+");
if(isset($GET["username"])){
while($line = fgets($fp)){ 
    $line = trim($line);
    $_GET["username"]=$line[1];
    unset($line);
}
fclose($fp);
header("location:admin.php");
}
//...........brain a load nisse na .........