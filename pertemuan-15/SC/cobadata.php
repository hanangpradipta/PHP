<?php
//koneksi ke database
$host = "localhost";
$username = "root";
$password = "123";
$dbname = "e_commerce";

$conn = mysqli_connect($host, $username, $password, $dbname);

//periksa koneksi
if (!$conn) {
    // die("Koneksi gagal: " . mysqli_connect_error());
    echo "mySQL Error!";
}

echo "berhasil!";

// //query untuk mengambil data dari tabel customers
// $sql = "SELECT * FROM customers";
// $result = mysqli_query($conn, $sql);

//atau

// $sql = "SELECT * FROM customers";
// $result = $conn->query(query)

// //periksa apakah query berhasil dijalankan
// if (mysqli_num_rows($result) > 0) {
//     //output data setiap baris
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "ID: " . $row["customer_id"]. " - Name: " . $row["customer_name"]. " - Country: " . $row["country"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

//menutup koneksi
mysqli_close($conn);
?>