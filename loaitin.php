<?php
require "lib/dbCon.php";
require "lib/trangchu.php";

?>
<?php
$idTL= $_GET["idTL"];
settype($idTL,"int");
$loaitin=DanhSachLoaiTin_Theo_TheLoai($idTL);
while($row_loaitin=mysqli_fetch_array($loaitin, MYSQLI_ASSOC)){
?>
<option value="1">abc</option>
<?php
}
?>