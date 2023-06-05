<?php
$nama = "Hanang";

$data = [
    [
        "project" => "e-commerce",
        "durasi" => 1,
        "perusahaan" => "PT. Mencari Cinta Sejati"
    ],
    [
        "project" => "blockchain",
        "durasi" => 1,
        "perusahaan" => "PT. Jalan Malan Sunmori"
    ],
    [
        "project" => "payment",
        "durasi" => 7,
        "perusahaan" => "PT. Pecinta Senja Besari"
    ],
    [
        "project" => "Accounting app",
        "durasi" => 12,
        "perusahaan" => "PT. Akuntansi bersama sama"
    ]
    ];

    for($i =0; $i < sizeof($data); $i++){
    echo " | ".$data[$i]["project"]." | ";
    echo "<br>";
    echo " | ".$data[$i]["durasi"]." | ";
    echo "<br>";
    echo " | ".$data[$i]["perusahaan"]." | ";
    echo "<br>";
    echo "<br>";
//     echo "<hr>";
    
//     if($data[$i][2] === true){
//         echo "manusia:   ya  |";
//     }
//     else{
//     echo "manusia:   bukan  |";
//     }
//     echo "<b>Hobi :  ".$data[$i][3]."</b>  | ";
//     echo "<br>";
//     echo "<br>";
// }
//     echo "<b>".$data[$i][1]."</b>  | ";
//     echo "<hr>";
    
//     if($data[$i][2] === true){
//         echo "manusia:   ya  |";
//     }
//     else{
//     echo "manusia:   bukan  |";
//     }
//     echo "<b>Hobi :  ".$data[$i][3]."</b>  | ";
//     echo "<br>";
    // echo "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> hallo <?= $nama?></h1>
    <p>welcome</p>
    <hr>

    <!-- looping dalam html -->
    <?php for($i = 0; $i < 5; $i++) { ?>
        <ul>
            <li>e-commerce</li>
            <li>1 tahun</li>
            <li>PT. abcd efgh</li>
        </ul>


    <?php } ?>
</body>
</html>