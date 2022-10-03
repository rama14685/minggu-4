<?php 
$conn = mysqli_connect("localhost","root","","mahasiswa");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    //ambil data dari tiap elemen dalam form
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $agama = htmlspecialchars($data["agama"]);
    $hobi = htmlspecialchars($data["hobi"]);
    $jns_klmn = htmlspecialchars($data["jns_klmn"]);

    // //upload gambar
    // $foto = upload();
    // if( !$foto ){
    //     return false;
    // }

    //query insert data
    $query = "INSERT INTO datamhs VALUES 
            ('$nim', '$nama', '$prodi', '$agama', '$hobi', '$jns_klmn')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//upload foto
// function upload() {
//         $namaFile = $_FILES['foto']['name'];
//         $ukuranFile = $_FILES['foto']['size'];
//         $error = $_FILES['foto']['error'];
//         $tmpName = $_FILES['foto']['tmp_name'];

//         //cek apakah tidak ada foto yang diupload
//         if( $error === 4){
//             echo "<script>
//                 alert('pilih foto dahulu!')
//             </script>";
//             return false;
//         }

//         //cek apakah file yang dikirim = foto
//         $ekstensifotoValid = ['jpg', 'jpeg', 'png'];
//         $ekstensifoto = explode('.', $namaFile);
//         $ekstensifoto = strtolower(end($ekstensifoto));
//         if( !in_array($ekstensifoto, $ekstensifotoValid)) {
//             echo "<script>
//                 alert('File yang diupload bukan foto!')
//             </script>";
//             return false;
//         }
//     }
?>