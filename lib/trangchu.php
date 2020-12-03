<?php

function TinMoiNhat_MotTin(){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
	mysqli_query($con,"SET NAMES 'utf8'");
    $qr = "
    SELECT * FROM tin
    ORDER BY idTin DESC
    LIMIT 0,1
    ";
    return mysqli_query($con,$qr);

}


function TinMoiNhat_BonTin(){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
	mysqli_query($con,"SET NAMES 'utf8'");
    $qr = "
    SELECT * FROM tin
    ORDER BY idTin DESC
    LIMIT 1,4
    ";
    return mysqli_query($con,$qr);
}
function TinXemNhieuNhat(){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
	mysqli_query($con,"SET NAMES 'utf8'");
    $qr = "
    SELECT * FROM tin
    ORDER BY SoLanXem DESC
    LIMIT 0,6
    ";
    return mysqli_query($con,$qr);

}
function TinMoiNhat_TheoLoaiTin_MotTin($idLT){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
	mysqli_query($con,"SET NAMES 'utf8'");
    $qr = "
    SELECT * FROM tin
    WHERE idLT = $idLT
    ORDER BY idTin DESC
    LIMIT 0,1
    ";
    return mysqli_query($con,$qr);

}


function TinMoiNhat_TheoLoaiTin_BonTin($idLT){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
	mysqli_query($con,"SET NAMES 'utf8'");
	mysqli_query($con,"SET NAMES 'utf8'");
    $qr = "
    SELECT * FROM tin
    WHERE idLT = $idLT
    ORDER BY idTin DESC
    LIMIT 1,6
    ";
    return mysqli_query($con,$qr);
}
function TenLoaiTin($idLT){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
	mysqli_query($con,"SET NAMES 'utf8'");
    $qr = "
    SELECT Ten FROM loaitin
    WHERE idLT = $idLT
    ";
    $loaitin =mysqli_query($con,$qr);
    $row = mysqli_fetch_array($loaitin, MYSQLI_ASSOC);
    return $row['Ten'];
}
function QuangCao($vitri){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
	mysqli_query($con,"SET NAMES 'utf8'");
    $qr = "
    SELECT * FROM quangcao
    WHERE vitri = $vitri
    
    ";
    return mysqli_query($con,$qr);

}
function DanhSachTheLoai(){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
    $qr = "
    SELECT * FROM theloai
    
    
    ";
    return mysqli_query($con,$qr);

}
function DanhSachLoaiTin_Theo_TheLoai($idTL){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
    $qr = "
    SELECT * FROM loaitin
    where idTL= $idTL
    
    
    ";
    return mysqli_query($con,$qr);

}
function TinMoi_BenTrai($idTL){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
    $qr = "
    SELECT * FROM tin
    where idTL= $idTL
    order by idTin Desc
    limit 0,1 
    ";
    return mysqli_query($con,$qr);

}
function TinMoi_BenPhai($idTL){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
    $qr = "
    SELECT * FROM tin
    where idTL= $idTL
    order by idTin Desc
    limit 1,2
    ";
    return mysqli_query($con,$qr);

}
function TinTheoLoaiTin($idLT){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
    $qr = "
    SELECT * FROM tin
    where idLT= $idLT
    order by idTin Desc
    
    ";
    return mysqli_query($con,$qr);

}
function TinTheoLoaiTin_PhanTrang($idLT, $from, $sotin1trang){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
    $qr = "
    SELECT * FROM tin
    where idLT= $idLT
    order by idTin Desc
    Limit $from, $sotin1trang
    
    ";
    return mysqli_query($con,$qr);

}
function breadCrumb($idLT){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
    $qr = "
    SELECT TenTL, Ten 
    FROM theloai, loaitin
    where theloai.idTL= loaitin.idTL
    And idLT = $idLT
    
    ";
    return mysqli_query($con,$qr);

}
function ChiTietTin($idTin){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
    $qr = "
    SELECT * FROM tin
    where idTin = $idTin
    ";
    return mysqli_query($con,$qr);

}
function TinCungLoaiTin($idTin, $idLT){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
    $qr = "
    SELECT * FROM tin
    WHERE idTin <> $idTin
    AND idLT =$idLT
    ORDER BY RAND()
    LIMIT 0,3
    ";
    return mysqli_query($con,$qr);

}
function CapNhatSoLanXemTin($idTin){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
    $qr = "
    Update tin
    SET SoLanXem= SoLanXem +1
    where idTin = $idTin
    ";
    return mysqli_query($con,$qr);

}
function TimKiem($tukhoa){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
    $qr = "
    SELECT * FROM tin
    WHERE TieuDe  REGEXP '$tukhoa'
    ORDER BY idTin DESC
    ";
    return mysqli_query($con,$qr);

}
?>