
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
        <label>email:  </label>
        <input type="text" name="email">
        <label>NO. Telp:  </label>
        <input type="text" name="no">
        <button>Ok</button>
    </form>
    <?php 
    
     if(!$_GET){
        echo "<i>Tidak Ada Data</i>";
     }else {
        echo "<h1>" . $_GET['nama'] . "</h1><p>" . $_GET['email'] . " | " . $_GET['no'] . "</p>";
     }
    
    ?>
</body>
</html>