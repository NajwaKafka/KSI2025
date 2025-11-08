<?php
include 'koneksi.php';

if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim  = $_POST['nim'];

    $query = "INSERT INTO mahasiswa (nama, nim) VALUES ('$nama', '$nim')";
    $insert = mysqli_query($conn, $query);

    if($insert) {
        header("Location: index.html?success=1");
        exit;
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($conn);
    }
}
?>
