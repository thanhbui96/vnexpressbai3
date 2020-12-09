<?php
ob_start();
session_start();
if(!isset($_SESSION["idUser"])&& $_SESSION["idGroup"]==1){
    header("location:../index.php");
}
require "../lib/dbCon.php";
require "../lib/quantri.php";
?>
<?php
$idTL = $_GET["idTL"]; 
settype($idTL, "int");
$con = mysqli_connect('localhost', "root","","khoaphamtraining");
	mysqli_query($con,"SET NAMES 'utf8'");
$qr = "DELETE FROM theloai
WHERE idTL='$idTL' ";
mysqli_query($con,$qr);
	header("location:listTheLoai.php");
?>