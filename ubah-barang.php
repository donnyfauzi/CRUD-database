<?php

include 'layout/header.php';

$id_barang = (int)$_GET['id_barang'];
$barang = select("SELECT * From barang WHERE id_barang = $id_barang")[0];

if (isset($_POST['ubah'])) {
    if (update_barang($_POST) > 0) {
        echo "<script>
                alert('Data Barang Barhasl Diubah');
                document.location.href = 'index.php';
                 </script>";
    } else{
        echo "<script>
                alert('Data Barang Gagal Diubah');
                document.location.href = 'index.php';
                </script>";
    }
}
?>


<div class ="container mt-5">
    <h1>Ubah Barang</h1> 
    <hr>

    <form action="" method="post">
        <input type="hidden" name="id_barang" value="<?=$barang['id_barang']; ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $barang ['nama'];?>" placeholder="Nama..." >
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $barang ['jumlah'];?>" placeholder="Jumlah..." >
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga Barang</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?= $barang ['harga'];?>" placeholder="Harga..." >
        </div>
        <button type ="submit" name="ubah" class="btn btn-primary" style="float: right;">Ubah</button>
    </form>

</div> 


<?php

include 'layout/footer.php';


?>
    

    

