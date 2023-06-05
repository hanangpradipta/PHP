<?php
require_once "user.php";
class Orang extends User{
    //getter
    public function get_nama(){
        return $this->nama;
    }
    public function tes(){
        return "ini adlah ".$this->nama;
    }
    public function coba(){
        return "coba orang";
    }
    // public function tes(){
    //     return "ini adalah " . $this->nama;
    // }
    //overriding
    public function greet(){
       return "hai " . parent::coba();
    }
}


$hanang = new User("Hanang");
$pr = new Orang("Pradipta");
// Orang::greet();
// echo Orang::cb();

echo $hanang->greet();
echo "<br>";
echo $pr->greet();
echo "<br>";
// echo User::$enemy;
// User::coba();

// echo $pr->tes();
// echo "<br>";

// $hanang->nama = "Kristoforus";
// $hanang->hobi = "hack NASA";

// echo "nama saya : ".$hanang->nama;
// echo "<br>";
// echo "hobi saya : ".$hanang->hobi;
?>