<?php
var_dump($_GET);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1><?= $_GET['nama']." ".$_GET['belakang']." ".$_GET['umur'] ?></h1>
</body>
</html>


<?php
var_dump($_GET);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
   <form method="get">
    <label>nama:  </label>
    <input type="text" name="nama">
    <button>ok</button>
   </form>
   <h1><?= $_GET['nama'] ?></h1>
</body>
</html>