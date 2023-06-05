<?php

class User{
    //properties variable didalam class
    // public : bisa diakses dimana saja
    //protected : hanya bisa diakses di class
    // private : hanya bisa diakses di class itu sendiri

    // protected $nama = "Hanang";
    // private $nama = "Hanang";
    public $nama;
    public $hobi;
    static $enemy = "apalah";

    public function __construct($nama){
        echo "ini bang";
        $this->nama = $nama;
    }

    //getter
    public function get_nama(){
        return $this->nama;
    }

    public function greet(){
        return "hallo" . $this->nama;
    }
        public function coba(){
            return "coba user";
        }
        // 
        // public static function coba(){
    //     echo "coba coba";
    // }
}

?>