
<?php
$hostname = "localhost"; 
$username = "root";      
$password = "";          
$db = "tugas1"; 

$conn = new mysqli($hostname, $username, $password, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}


if (isset($_POST['simpan'])) {
    
    $nama = $_POST['nama'];
    $hobi = $_POST['hobi'];
    $prestasi = $_POST['prestasi'];

    
    $sql = "INSERT INTO audition (nama, hobi, prestasi) 
            VALUES ('$nama', '$hobi', '$prestasi')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data berhasil disimpan!'); window.location.href='index.html';</script>";
} else {
    echo "<script>alert('Gagal menyimpan data!'); window.location.href='index.html';</script>";
}
}

// Tutup koneksi
$conn->close();
?>
}
?>