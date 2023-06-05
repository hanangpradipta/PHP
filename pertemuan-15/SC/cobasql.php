<?php
CREATE TABLE konsumen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50),
    email VARCHAR(50),
    alamat VARCHAR(100),
    telp VARCHAR(20)
);
INSERT INTO konsumen (nama, email, alamat, telp) VALUES 
    ('John Doe', 'johndoe@example.com', 'Jl. Sudirman No. 123', '081234567890'),
    ('Jane Doe', 'janedoe@example.com', 'Jl. Gatot Subroto No. 456', '085678901234'),
    ('Bob Smith', 'bobsmith@example.com', 'Jl. Thamrin No. 789', '082345678901');
SELECT * FROM konsumen;
SELECT * FROM konsumen WHERE alamat LIKE '%Sudirman%';


?>