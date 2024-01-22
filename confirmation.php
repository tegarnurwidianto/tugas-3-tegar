<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <?php
        // Jika parameter status_pembayaran tidak ada, atau belum dibayar, tampilkan formulir pemesanan
        if (!isset($_GET["status_pembayaran"]) || $_GET["status_pembayaran"] !== "Berhasil") {
        ?>
        <h2>Formulir Pemesanan Kamar Hotel</h2>
        <form action="process.php" method="post">
            <!-- ... (formulir pemesanan seperti sebelumnya) ... -->
            <button type="submit">Pesan Kamar & Bayar</button>
        </form>
        <?php
        } else {
            // Jika pembayaran berhasil, tampilkan konfirmasi
        ?>
        <h2>Konfirmasi Pemesanan</h2>
        <p>Nama: <?php echo isset($_GET["nama"]) ? $_GET["nama"] : ''; ?></p>
        <p>Tipe Kamar: <?php echo isset($_GET["tipe_kamar"]) ? $_GET["tipe_kamar"] : ''; ?></p>
        <p>Check-in Date: <?php echo isset($_GET["check_in"]) ? $_GET["check_in"] : ''; ?></p>
        <p>Check-out Date: <?php echo isset($_GET["check_out"]) ? $_GET["check_out"] : ''; ?></p>
        <p>Jumlah Kamar: <?php echo isset($_GET["jumlah_kamar"]) ? $_GET["jumlah_kamar"] : 1; ?></p>
        <p>Total Pembayaran: $<?php echo isset($_GET["total_pembayaran"]) ? $_GET["total_pembayaran"] : 0; ?></p>
        <p>Status Pembayaran: <?php echo isset($_GET["status_pembayaran"]) ? $_GET["status_pembayaran"] : 'Belum Dibayar'; ?></p>
        <?php
        }
        ?>
    </div>
</body>
</html>
