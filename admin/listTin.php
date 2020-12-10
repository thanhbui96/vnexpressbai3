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
    <td><table width="800" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="5">DANH SÁCH TIN</td>
        </tr>
      <tr>
        <td width="135">&nbsp;</td>
        <td width="376">&nbsp;</td>
        <td width="97">&nbsp;</td>
        <td width="97">&nbsp;</td>
        <td width="120"><a href="themTin.php">Thêm</a></td>
        </tr>
        <?php
		$tin = DanhSachTin();
		while($row_tin=mysqli_fetch_array($tin, MYSQLI_ASSOC)){
			ob_start();
		?>
      <tr>
        <td><p>idTin:{idTin}</p>
          <p>{Ngay}</p></td>
        <td><a href="suaTin.php?idTin={idTin}">{TieuDe}</a><br />
          <img style="float:left; margin-right:5px" src="../upload/tintuc/{urlHinh}" width="150" height="96" />{TomTat}</td>
        <td><p>{TenTL}</p>
          <p>-</p>
          <p>{Ten}</p></td>
        <td><p>Số lần xem:</p>
          <p>{SoLanXem}</p>
          <p>{TinNoiBat}</p>
          <p>-{AnHien}</p></td>
        <td><p><a href="suaTin.php?idTin={idTin}">Sửa</a> - </p>
          <p><a href="xoaTin.php?idTin={idTin}">Xóa</a></p></td>
        </tr>
        <?php
		$s=ob_get_clean();
	  $s=str_replace("{idTin}", $row_tin["idTin"],$s);
	  $s=str_replace("{Ngay}", $row_tin["Ngay"],$s);
	  $s=str_replace("{TieuDe}", $row_tin["TieuDe"],$s);
	  $s=str_replace("{TomTat}", $row_tin["TomTat"],$s);
	  $s=str_replace("{urlHinh}", $row_tin["urlHinh"],$s);
	  $s=str_replace("{TenTL}", $row_tin["TenTL"],$s);
	  $s=str_replace("{Ten}", $row_tin["Ten"],$s);
	  $s=str_replace("{SoLanXem}", $row_tin["SoLanXem"],$s);
	  $s=str_replace("{TinNoiBat}", $row_tin["TinNoiBat"],$s);
	  $s=str_replace("{AnHien}", $row_tin["AnHien"],$s);
	  echo $s;
		}
		?>
    </table></td>
  </tr>
</table>
</body>
</html>