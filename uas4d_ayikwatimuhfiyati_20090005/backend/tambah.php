<?php
require_once '../koneksi.php';

$raw = file_get_contents('php://input');
$data = json_decode($raw);

$sql = "insert into barang (id,kategori,nama,jumlah_stok) values('" .$data->id . "','" .$data->kategori . "','" . $data->nama . "','" . $data->jumlah_stok . "')";
$result = pg_query($sql);
$row = pg_affected_rows($result);
$obj = new stdClass();
if($row > 0) {
    $obj->result = "success";
} else {
    $obj->result = "failed";
}
echo json_encode($obj);
?>