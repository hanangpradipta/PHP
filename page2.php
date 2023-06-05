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
    <link rel="stylesheet" href="page2.css">
</head>
<body>
    <h1>HANANG</h1>
    <div class="divintipage2">
        <div class="divkananpage2">
    <div class="divpusatnavbarpage2">
        <div class="bgnavpage2">
            <div class="divsaldopage2">
                <img src="./images/dompet.png" alt="dompet" class="imgdompetpage2">
          <b class="saldopage2"> <?= rupiah($saldo) ?></b>
          <p class="ussernamepage2">Hanang Pradipta</p>
          <img src="./images/pp.png" alt="pp" class="imgpp">
          <div class="buletkepala"></div>
        </div>
    </div> 
    </div>
    <div class="divisipage2">
        <h1 class="textpulsapage2">Pulsa</h1>
        <div class="divformpage2">
            <form action="submit" class="formpage2" id="myForm" method="POST">
                <input type="text" name="telepon" id="" placeholder="Masukkan Nomor HP" class="inputformpage2 nohppage2"> <br>
                <input type="text" name="nominal" placeholder="Masukkan Jumlah Pulsa" class="inputformpage2 jumlahpage2"> <br>
                <div class="divproviderpage2">
                    <input type="radio" name="provider" value="XL" class="radioprov" id="inputprovpage2xl"><label for="inputprovpage2xl" class="inputproviderpage2" onclick="toggleButton(event)">XL</label>
                    <input type="radio" name="provider" value="TELKOMSEL" class="radioprov" id="inputprovpage2telkom"><label for="inputprovpage2telkom" class="inputproviderpage2" onclick="toggleButton(event)">TELKOMSEL</label>
                    <input type="radio" name="provider" value="3" class="radioprov" id="inputprovpage23"><label for="inputprovpage23" class="inputproviderpage2" onclick="toggleButton(event)">3</label>
                    <input type="radio" name="provider" value="IM3" class="radioprov" id="inputprovpage2im3"><label for="inputprovpage2im3" class="inputproviderpage2" onclick="toggleButton(event)">IM3</label>
                </div>                 
                <button class="buttonformpage2" type="submit">Kirim</button>
            </form>
        </div>
        
    </div>
</div>
    <div class="divkiripage2">
      <div class="divdashboardpage2">
      <div class="dashboardpage2"></div>
      <h1 class="h1adminpage2"><i>ADMIN</i></h1>
    <ul class="ulmenupage2">
        <li class="limenupage2"><a href="Top_up.php" class="amenupage2">Top Up</a></li>
        <li class="limenupage2"><a href="page2.php" class="amenupage2">Kirim Pulsa</a></li>
        <li class="limenupage2"><a href="Riwayat.php" class="amenupage2">Riwayat</a></li>
    </ul>
</div>
</div>
    </div>

    <script>
        
        document.querySelectorAll(".inputproviderpage2").forEach((comp) => {
            comp.addEventListener("click", (e) => {
                document.querySelectorAll(".inputproviderpage2").forEach(e => {
                    e.classList.remove("active")
                })

                e.target.classList.add("active")
            })
        }),
        function submitForm() {
      var form = document.getElementById("myForm");
      form.submit();
    }
    </script>
</body>
</html>