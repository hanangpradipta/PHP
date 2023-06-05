
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
<form method="post" action="try.php">
  <label for="name">Nama:</label>
  <input type="text" id="name" name="name"><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br>

  <label for="message">Pesan:</label>
  <textarea id="message" name="message"></textarea><br>

  <button type="submit">Kirim</button>
</form>
<?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Proses data form
  // Misalnya, kirim email ke alamat tujuan
    // Simpan data form ke dalam file teks
    $file = fopen("data.txt", "a");
    fwrite($file, "Nama: $name\nEmail: $email\nPesan: $message\n\n");
    fclose($file);

  // Tampilkan pesan konfirmasi
  echo "Terima kasih atas pesan Anda, $name!";
?>
</body>
</html>