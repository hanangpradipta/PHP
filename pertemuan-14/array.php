<?php
//array
// $data = array();
// $data = [ 1, 2, "hanang", 3.14, 22]

// echo $data[4];
// var_dump($data);

//multi dimension array

// $data =[
//     ["Hanang", 22, true, "nonton"],
//     ["Pradipta", 29, true, "main"],
//     ["Kris", 23, false, "makan"]
// ];

// for($i =0; $i < sizeof($data); $i++){
//     echo "<b>".$data[$i][0]."</b>  | ";
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
//     echo "<br>";
// }

//array asosiatif

// $data =[
//     "nama" => "Hanang",
//     "umur" => 23,
//     "manusia" => true
// ];

// var_dump($data);
// echo $data["nama"];


$data =[
    [
        "nama" => "Hanang",
        "umur" => 23,
        "manusia" => true
    ],
    [
        "nama" => "Pradipta",
        "umur" => 29,
        "manusia" => true
    ],
    [
        "nama" => "Kris",
        "umur" => 32,
        "manusia" => false
    ]
    ];

    var_dump($data);
    echo $data[1]["manusia"];
    ?>