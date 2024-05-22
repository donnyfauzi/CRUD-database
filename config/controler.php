<?php

function select($query)
{
  global $db; //panggil koneksi database

  $result = mysqli_query($db, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}

//function tambah data barang
function create_barang($post)
{
  global $db;
  
  $nama     = $post['nama'];
  $jumlah   = $post['jumlah'];
  $harga    = $post['harga'];
  //query tambah barang
  $query = "INSERT INTO barang VALUES(null, '$nama', '$jumlah', '$harga', CURRENT_TIMESTAMP())";
  
  mysqli_query($db, $query);
  
  return mysqli_affected_rows($db);
  }

  //fungsi ubah data barang
  function update_barang($post)
{
  global $db;
  
  $id_barang = $post['id_barang'];
  $nama      = $post['nama'];
  $jumlah    = $post['jumlah'];
  $harga     = $post['harga'];
  //query update barang
  $query = "UPDATE barang SET nama = '$nama', jumlah = '$jumlah', harga = '$harga' WHERE id_barang = $id_barang";
  
  mysqli_query($db, $query);
  
  return mysqli_affected_rows($db);
  }

  //fungsi hapus barang
  function delete_barang($id_barang)
  {
    global $db;
    
    //query delate barang
    $query = "DELETE FROM barang WHERE id_barang = $id_barang";

    mysqli_query($db, $query);
  
    return mysqli_affected_rows($db);
  }

  
?>