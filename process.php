<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $tipe_kamar = $_POST["tipe_kamar"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];
    $nomor_kartu = $_POST["nomor_kartu"];
    $tanggal_kadaluarsa = $_POST["tanggal_kadaluarsa"];
    $nama_pemilik_kartu = $_POST["nama_pemilik_kartu"];
    $jumlah_kamar = isset($_POST["jumlah_kamar"]) ? (int)$_POST["jumlah_kamar"] : 1;

    // Menentukan harga kamar berdasarkan tipe
    $harga_kamar = 0;
    switch ($tipe_kamar) {
        case "standar":
            $harga_kamar = 100; // Ganti dengan harga standar
            break;
        case "deluxe":
            $harga_kamar = 150; // Ganti dengan harga deluxe
            break;
        case "suite":
            $harga_kamar = 200; // Ganti dengan harga suite
            break;
        default:
            // Handle default atau tipe kamar tidak valid
            break;
    }

    // Menghitung total pembayaran
    $total_pembayaran = $jumlah_kamar * $harga_kamar;

    // Proses data atau simpan ke database
    // ...

    // Proses pembayaran (simulasi sederhana, sebaiknya diimplementasikan secara aman)
    $status_pembayaran = "Berhasil";

    // Redirect atau tampilkan konfirmasi
    header("Location: confirmation.php?nama=$nama&tipe_kamar=$tipe_kamar&check_in=$check_in&check_out=$check_out&status_pembayaran=$status_pembayaran&jumlah_kamar=$jumlah_kamar&total_pembayaran=$total_pembayaran");
    exit();
    }
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $tipe_kamar = $_POST["tipe_kamar"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];
    $nomor_kartu = $_POST["nomor_kartu"];
    $tanggal_kadaluarsa = $_POST["tanggal_kadaluarsa"];
    $nama_pemilik_kartu = $_POST["nama_pemilik_kartu"];
    $jumlah_kamar = isset($_POST["jumlah_kamar"]) ? (int)$_POST["jumlah_kamar"] : 1;

    // Menentukan harga kamar berdasarkan tipe
    $harga_kamar = 0;
    switch ($tipe_kamar) {
        case "standar":
            $harga_kamar = 100; // Ganti dengan harga standar
            break;
        case "deluxe":
            $harga_kamar = 150; // Ganti dengan harga deluxe
            break;
        case "suite":
            $harga_kamar = 200; // Ganti dengan harga suite
            break;
        default:
            // Handle default atau tipe kamar tidak valid
            break;
    }

    // Menghitung total pembayaran
    $total_pembayaran = $jumlah_kamar * $harga_kamar;

    // Proses data atau simpan ke database
    // ...

    // Proses pembayaran (simulasi sederhana, sebaiknya diimplementasikan secara aman)
    $status_pembayaran = "Berhasil";

    // Redirect atau tampilkan konfirmasi
    header("Location: confirmation.php?nama=$nama&tipe_kamar=$tipe_kamar&check_in=$check_in&check_out=$check_out&status_pembayaran=$status_pembayaran&jumlah_kamar=$jumlah_kamar&total_pembayaran=$total_pembayaran");
    exit();
}
?>
