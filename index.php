<?php 
require 'koneksi.php';

//cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {

    //cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";   
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
        "; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <form action="" method="post">
        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim" required>
        <br>

        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <br>

        <label for="prodi">Prodi</label>
            <input name="prodi" id="prodi" list="prodi" />
            <datalist id="prodi">
                <option value="Sistem Informasi"></option>
                <option value="Teknik Informatika"></option>
            </datalist>
        <br>

        <label for="agama">Agama</label>
            <input name="agama" id="agama" list="agama" />
            <datalist id="agama">
                <option value="Islam"></option>
                <option value="Non-Islam"></option>
            </datalist>
        <br>

        <label for="hobi">Hobi</label>
        <input type="text" name="hobi" id="hobi">
        <br>

        <label for="jns_klmn">Jenis Kelamin</label>
        <input type="radio" name="jns_klmn" id="jns_klmn" value="laki-laki">laki-laki
        <input type="radio" name="jns_klmn" id="jns_klmn" value="perempuan">perempuan 
        <br>
<!-- 
        <label for="foto">Gambar</label>
        <input type="file" name="foto" id="foto">
        <br> -->

        <input type="submit" name="submit" value="Kirim">

    </form>
</body>
</html>