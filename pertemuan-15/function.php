<!-- Function di PHP  -->

<?php

// function greet(){
//     echo "sitompul";
// }

// greet()

// function data($x, $y){
//     return "Hanang Pradipta ". $x. " ". $y;
// }

// echo data("mantap", "mania");

$nama = "Hanang";

function cetak(){
    global $nama;
    return $nama;
}
echo cetak();
echo $nama;

?>