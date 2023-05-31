<?php
$index = 1;
$conn = mysqli_connect("localhost", "root", "", "latihan_2");
if(!$conn){
    echo "Error connecting : " . mysqli_error($conn);
}

$admin = mysqli_query($conn, "SELECT * FROM admin WHERE id=1");
while($res = mysqli_fetch_assoc($admin)){
    $id = $res['id'];
    $name = $res['nama'];
}

$data = mysqli_query($conn, "SELECT * FROM karyawan WHERE id_admin=$id");

if($_POST){
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $email = $_POST['email'];
    $add = mysqli_query($conn, "INSERT INTO karyawan (nama, jabatan, email, id_admin) VALUES ('$nama', '$jabatan', '$email', '$id')");

    if ($add) {
        $data = mysqli_query($conn, "SELECT * FROM karyawan WHERE id_admin=$id");
    }else {
        echo "Error connecting : " . mysqli_error($conn);
    }
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
</nav>
<div class="container pt-4" style="padding-right: 30%">
<h3 style="margin-top: 40px">Berikut data para pejabat :</h3>
<h3 style="margin-top: 40px">Welcome <?= $name ?></h3>
<br>

<a href="form.php" class="btn btn-dark">
<i class="fa-solid fa-user-plus"></i>
Tambah Pejabat
</a>
<br><br>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row = mysqli_fetch_assoc($data)) { ?>
    <tr>
      <th scope="row"><?= $index++ ?></th>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['jabatan']; ?></td>
      <td>
        <button type="button" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></button>
        <button type="button" class="btn btn-danger"><i class="fa-solid fa-user-slash"></i></button>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>