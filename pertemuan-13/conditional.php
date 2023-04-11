<?php

$con = 2;
$nama = "HanangP";

if ($con > 3){
    echo "Hallo Semua";
}elseif ($con == 2){
    echo "yoooo!";
}
else{
    echo "Keluar semua";
}

echo "<br>";

switch($con){
    case 1:
        echo "ini satu";
        break;
    case 2:
        echo "ini dua";
        break;
    case 3:
        echo "ini tiga";
        break;
        default:
        echo "errror";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Latihan PHP</title>
    </head>
    <body>
        <h1 style="color: brown;font-size: 72px;"><?php echo $nama ?></h1>
    </body>
</html>