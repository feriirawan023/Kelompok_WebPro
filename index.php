<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<h2>Masukkan Jumlah Data</h2>

<body>
    <form action="#" method="post">
        <input type="text" name="jumlah" placeholder="Masukkan Jumlah Data" />
        <input type="submit" name="tambah" value="Tambah" />
    </form>
    <br><br>
    <?php
    if (isset($_POST['jumlah'])) {
    ?>
        <form action="" method="post">
            <?php
            $jumlah = $_POST['jumlah'];
            for ($a = 1; $a <= $jumlah; $a++) {
            ?>
                <b>Data Ke – <?php echo $a; ?></b><br>
                Input Nama <br>
                <input type="text" name="nama<?php echo $jumlah; ?>"><br><br>
                Input Alamat <br>
                <textarea name="alamat<?php echo $jumlah; ?>"></textarea><br><br>
            <?php
            }
            ?>
            <input type="submit" name="" value="Simpan">
        </form>
    <?php
    }
    ?>
</body>

</html>