<?php
include "koneksi.php";

// Ambil data dari POST dan GET
$masuk = isset($_POST['masuk']) ? $_POST['masuk'] : '';
$user = isset($_POST['user']) ? $_POST['user'] : '';
$pasusr = isset($_POST['pasusr']) ? $_POST['pasusr'] : '';
$logout = isset($_GET['logout']) ? $_GET['logout'] : '';
$thna = isset($_POST['thna']) ? $_POST['thna'] : '';
$smester = isset($_POST['smester']) ? $_POST['smester'] : '';

// Proses logout
if ($logout == 1) {
    setcookie("idkusr", "", time() - 3600, "/"); // Tambah path "/"
    setcookie("idgurp", "", time() - 3600, "/");
    setcookie("idkelas", "", time() - 3600, "/");
    setcookie("thaj", "", time() - 3600, "/");
    setcookie("sem", "", time() - 3600, "/");
    setcookie("qbln", "", time() - 3600, "/");
    setcookie("blns", "", time() - 3600, "/");
    header("Location: index.php");
    exit;
}

// Proses login
if ($masuk == "login" && !empty($thna) && !empty($smester)) {
    // Konversi bulan
    $bln = date("m");
    $bulan = [
        "01" => ["nb" => 1, "nama" => "Januari"],
        "02" => ["nb" => 2, "nama" => "Februari"],
        "03" => ["nb" => 3, "nama" => "Maret"],
        "04" => ["nb" => 4, "nama" => "April"],
        "05" => ["nb" => 5, "nama" => "Mei"],
        "06" => ["nb" => 6, "nama" => "Juni"],
        "07" => ["nb" => 7, "nama" => "Juli"],
        "08" => ["nb" => 8, "nama" => "Agustus"],
        "09" => ["nb" => 9, "nama" => "September"],
        "10" => ["nb" => 10, "nama" => "Oktober"],
        "11" => ["nb" => 11, "nama" => "Nopember"],
        "12" => ["nb" => 12, "nama" => "Desember"]
    ];
    $nb = $bulan[$bln]["nb"];
    $pbbln = $bulan[$bln]["nama"];

    // Gunakan prepared statement untuk keamanan
    $stmt = mysqli_prepare($koneksi, "SELECT * FROM tb_user WHERE kd_gp = ? AND pas2 = ?");
    mysqli_stmt_bind_param($stmt, "ss", $user, $pasusr);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($res) == 1) {
        $dt = mysqli_fetch_assoc($res);

        // Ambil data wali kelas
        $stmt2 = mysqli_prepare($koneksi, "SELECT * FROM wali_kelas WHERE kd_gp = ?");
        mysqli_stmt_bind_param($stmt2, "s", $dt['kd_gp']);
        mysqli_stmt_execute($stmt2);
        $res2 = mysqli_stmt_get_result($stmt2);
        $cqk2 = mysqli_fetch_assoc($res2);

        // Set cookie dengan parameter ketiga sebagai integer (waktu kadaluarsa)
        setcookie("idkusr", $dt['ket'], time() + 86400, "/", "", false, true); // httponly true
        setcookie("idgurp", $dt['kd_gp'], time() + 86400, "/", "", false, true);
        setcookie("idkelas", $cqk2['kd_kls'], time() + 86400, "/", "", false, true);
        setcookie("thaj", $thna, time() + 86400, "/", "", false, true);
        setcookie("sem", $smester, time() + 86400, "/", "", false, true);
        setcookie("qbln", $nb, time() + 86400, "/", "", false, true);
        setcookie("blns", $pbbln, time() + 86400, "/", "", false, true);

        header("Location: home.php");
        exit;
    } else {
        header("Location: index.php?psnu=1");
        exit;
    }
}

header("Location: index.php");
exit;
?>