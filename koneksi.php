<?php


    $user="root";
    $password="bulsjatl3aa8b1a2";
    $host="66.42.60.252";
    $db_name = "sispon";

    $koneksi = mysqli_connect($host, $user, $password,$db_name);

    if (!$koneksi) {
        error_log("Connection failed: " . mysqli_connect_error());
        die();
    }
    // Don't output success messages directly
    // Instead, you can set a variable to use later if needed
    $connection_status = "success";


// $result = mysqli_query($koneksi, "SHOW DATABASES LIKE '$db_name'");
// if (mysqli_num_rows($result) > 0) {
//     echo "Database '$db_name' ditemukan<br>";
//     // Pilih database jika perlu
//     if (mysqli_select_db($koneksi, $db_name)) {
//         echo "Berhasil memilih database '$db_name'";
//     } else {
//         echo "Gagal memilih database: " . mysqli_error($koneksi);
//     }
// } else {
//     echo "Database '$db_name' tidak ditemukan";
// }

// echo "db connect";
?>