<?php
function  add_bill($id_tk, $diachi, $name, $phone, $thanhtoan,  $don_ma, $thoigian, $tong_tien)
{
  $sql = " INSERT INTO `chitiet_donhang`(`id_tk`,`ma_don`, `full_name`, `phone`, `dia_chi`, `thoi_gian`, `thanh_tien`, `trang_thai`, `thanh_toan`)
   VALUES ('$id_tk','$don_ma','$name','$phone','$diachi','$thoigian','$tong_tien','0','$thanhtoan')";
  $lastInsertedId = pdo_execute_return_lastInsertId($sql);
  return $lastInsertedId;
}
function add_bill_ct($id_sp,  $so_luong, $id_mau, $id_size,  $id_don)
{
  $sql = "INSERT INTO `don_hang`(`id_ctd`, `id_sp`, `so_luong`, `mau_sac`, `kich_co`) 
    VALUES ('$id_don','$id_sp','$so_luong','$id_mau','$id_size')";
  pdo_execute($sql);
}

function loadd_bill_ct($id_sp)
{
  $sql = "SELECT * FROM `chitiet_donhang` WHERE `id_ctdon` = '$id_sp'";
  $hi = pdo_query($sql);
  return $hi;
}


function load_all_bill($kyw='', $id)
{
  $sql = "SELECT * FROM `chitiet_donhang` WHERE id_tk = $id";
  if ($kyw != '') {
      $sql .= " AND `trang_thai` = '$kyw'";
  }
  $sql .= " GROUP BY id_ctdon DESC";
  
  $hi = pdo_query($sql);
  return $hi;
}
function loadd_bill_lq_ct($id_don)
{
  $sql = "SELECT dh.*, sp.gia, sp.giam_gia, sp.name_sp, sp.image_sp
  FROM don_hang dh INNER JOIN sanpham sp ON dh.id_sp = sp.id_sp
  WHERE dh.id_ctd = '$id_don'";

    $hi = pdo_query($sql);
    return $hi;
}