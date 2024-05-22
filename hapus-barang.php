<?php

include 'config/app.php';

// fungsi menerima hapus barang 
$id_barang = (int)$_GET['id_barang'];

if (delete_barang($id_barang)> 0) {
        echo "<script>
                alert('Data Barang Barhasil Dihapus');
                document.location.href = 'index.php';
              </script>";
} else{
        echo "<script>
                alert('Data Barang Gagal Dihapus');
                document.location.href = 'index.php';
              </script>";
}

