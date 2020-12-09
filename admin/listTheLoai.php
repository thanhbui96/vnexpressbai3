<?php
ob_start();
session_start();
if(!isset($_SESSION["idUser"])&& $_SESSION["idGroup"]==1){
    header("location:../index.php");
}
require "../lib/dbCon.php";
require "../lib/quantri.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="layout.css"/>
</head>

<body>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td id="hangTieuDe">TRANG QUẢN TRỊ</td>
    <div style="width:200px; float:right">
         <div>chào anh <?php echo $_SESSION["HoTen"] ?></div>
    </div>

    </td>
  </tr>
  <tr>
    <td id="hang2"><?php require "menu.php"; ?></td>
  </tr>
  <tr>
    <td><table width="600" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="6">DANH SÁCH THỂ LOẠI</td>
        </tr>
      <tr>
        <td width="71"><strong>idTL</strong></td>
        <td width="91"><strong>TenTL</strong></td>
        <td width="199"><strong>TenTL_KhongDau</strong></td>
        <td width="88"><strong>ThuTu</strong></td>
        <td width="91"><strong>AnHien</strong></td>
        <td width="60"><strong><a href="themTheLoai.php">Thêm</a></strong></td>
      </tr>
      <?php
	  $theloai = DanhSachTheLoai();
	  while($row_theloai = mysqli_fetch_array($theloai, MYSQLI_ASSOC)){
		  ob_start();
	  ?>
      <tr>
        <td><strong>{idTL}</strong></td>
        <td><strong>{TenTL}</strong></td>
        <td><strong>{TenTL_KhongDau}</strong></td>
        <td><strong>{ThuTu}</strong></td>
        <td><strong>{AnHien}</strong></td>
        <td><strong><a href="suaTheLoai.php?idTL={idTL}">Sửa</a>-<a onclick ="return confirm ('Bạn có chắc là muốn xóa không? ')" href="xoaTheLoai.php?idTL={idTL}">Xóa</a></strong></td>
      </tr>
      <?php
	  $s=ob_get_clean();
	  $s=str_replace("{idTL}", $row_theloai["idTL"],$s);
	  $s=str_replace("{TenTL}", $row_theloai["TenTL"],$s);
	  $s=str_replace("{TenTL_KhongDau}", $row_theloai["TenTL_KhongDau"],$s);
	  $s=str_replace("{ThuTu}", $row_theloai["ThuTu"],$s);
	  $s=str_replace("{AnHien}", $row_theloai["AnHien"],$s);
	  echo $s;
		}
	  ?>
    </table></td>
  </tr>
</table>
</body>
</html>