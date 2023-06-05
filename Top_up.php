<?php 

    // MYSQL Connection
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'jual_pulsa';

    $koneksi = mysqli_connect($host, $user, $password, $database);

    if(!$koneksi){
        echo "Error connecting : " . mysqli_error($koneksi);
    }

    // Untuk Mengambil DB table Users (konter)
    function get_db(){
        global $koneksi, $nama, $saldo;
        $query = "SELECT * FROM users";
        $hasil = mysqli_query($koneksi, $query);
    
        if (mysqli_num_rows($hasil) > 0){
            while ($row = mysqli_fetch_assoc($hasil)){
                $nama = $row['nama'];
                $saldo = $row['saldo'];
            }
        }    
        
    }

    get_db();

    // cek gpost ada gak isinya
    if($_POST){
        // cek top up harus ada
        if($_POST['saldo'] > 0){
            // update saldo
            $saldo_post = $saldo + $_POST['saldo'];
            $query = "UPDATE users SET saldo='$saldo_post' WHERE id=1";
            $hasil = mysqli_query($koneksi, $query);
            
            if ($hasil){
                get_db();
            }else {
                echo "gagal : " . mysqli_error($koneksi);
            }
        }
    }

    // Ini untuk konvert mata uang rupiah
    function rupiah($angka)
    {
        return 'Rp. '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="Top_up.css">
</head>
<body>
   <div class="container">
        <div class="kontanerkiri">
           <h1 class="admin"><i>ADMIN</i></h1>
            <ul>
                <li><a href="top_up.php">Top Up</a></li>
                <li><a href="page2.php">Kirim Pulsa</a></li>
                <li><a href="Riwayat.php">Riwayat</a></li>
            </ul>
        </div>
        <div class="kontainerkanan">
            <div class="navbar">
                <img class="gam" src="./images/gam.png" alt="">
                <h2 class="saldo"><?= rupiah($saldo) ?></h2>
                <h4 ><i><a class="namauser" href="#"><?= $nama ?></a></i></h4>
                <a href="#"><img class="logouser" src="./images/logouser.png" alt="user"></a> 
            </div>

            <div class="tabel">
                <h1 class="riwayat">Top up</h1>
                <div class="kotak">
                    <form method="POST" >
                        <input class="blok" type="number" id="nama" name="saldo" placeholder="Masukan Jumlah Uang" >
                        <button class="tombol btn">Klik saya!</button>
                    </form>
                </div>
            </div>
        </div>
   </div>
    

</html>

