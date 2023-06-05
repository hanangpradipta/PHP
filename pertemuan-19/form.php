<?php

$conn = mysqli_connect("localhost", "root", "", "latihan_2");
$judul = $_GET['judul'];

if(isset($_GET['id'])){
  $id = $_GET['id'];
}

if($judul == 'Edit'){
  $link = "index.php?judul=$judul&id=$id";
  $data = mysqli_query($conn, "SELECT * FROM karyawan WHERE id=$id");
  while($row = mysqli_fetch_assoc($data)){
    $nama = $row['nama'];
    $jabatan = $row['jabatan'];
    $email = $row['email'];
  }
}else {
  $link = "index.php?judul=$judul";
  $nama = "";
  $jabatan = "";
  $email = "";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">  
   
    <!-- FA -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="navbar bg-dark">
<div class="container" style="display: inline-block">
    <a class="navbar-brand" href="#" style="color: gray">
    <i class="fa-solid fa-robot"></i>
    Pradipta
    </a>
        
    <i class="fa-solid fa-grip-lines-vertical" style="color: gray"></i>

    <a class="navbar-brand" href="index.php" style="color: gray; margin-left: 20px">
    <i class="fa-solid fa-address-book"></i>
    List
    </a>
 
  </div>
 
  </div>
</nav>
<div class="container pt-4" style="padding-right: 30%">
<h3 style="margin-top: 40px"><?= $judul; ?> Pejabat</h3>
<br>

<form method="post" action="<?= $link ?>">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama; ?>"/>
    </div>

    <div class="mb-3">
        <label for="jabatan" class="form-label">Jabatan</label>
        <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $jabatan; ?>">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= $email; ?>">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
  <button type="submit" class="btn btn-dark">
  <i class="fa-solid fa-plus"></i>  
  <?= $judul; ?></button>
</form>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>