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
    <td><form id="form1" name="form1" method="post" action="">
      <table width="500" border="1" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="2">THÊM THỂ LOẠI</td>
        </tr>
        <tr>
          <td>TenTL</td>
          <td><label for="TenTL"></label>
            <input type="text" name="TenTL" id="TenTL" /></td>
        </tr>
        <tr>
          <td>ThuTu</td>
          <td><label for="ThuTu"></label>
            <input type="text" name="ThuTu" id="ThuTu" /></td>
        </tr>
        <tr>
          <td>AnHien</td>
          <td><p>
            <label>
              <input type="radio" name="AnHien" value="1" id="AnHien_0" />
              Hiện</label>
            <br />
            <label>
              <input type="radio" name="AnHien" value="0" id="AnHien_1" />
              Ẩn</label>
            <br />
          </p></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="btnThem" id="btnThem" value="Thêm" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>