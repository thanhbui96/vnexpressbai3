<?php

function DanhSachTheLoai(){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
	mysqli_query($con,"SET NAMES 'utf8'");
    $qr = "
    SELECT * FROM theloai
    ORDER BY idTL DESC
    ";
    return mysqli_query($con,$qr);
}
function ChiTietTheLoai($idTL){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
	mysqli_query($con,"SET NAMES 'utf8'");
    $qr = "
    SELECT * FROM theloai
    WHERE idTL ='$idTL' ";
    $row = mysqli_query($con,$qr);
    return mysqli_fetch_array($row, MYSQLI_ASSOC);
}
function DanhSachLoaiTin(){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
	mysqli_query($con,"SET NAMES 'utf8'");
    $qr = "
    SELECT * FROM loaitin,theloai
    where theloai.idTL =loaitin.idTL 
    order by idLT DESC";
    
    
    return mysqli_query($con,$qr);
}
function ChiTietLoaiTin($idLT){
    $con = mysqli_connect('localhost', "root","","khoaphamtraining");
	mysqli_query($con,"SET NAMES 'utf8'");
    $qr = "
    SELECT * FROM loaitin
    where idLT ='$idLT' ";
    $loaitin = mysqli_query($con,$qr);
    
    
    return mysqli_fetch_array($loaitin, MYSQLI_ASSOC);
}
function stripUnicode($str){ 
if(!$str) return false;

        $unicode = array( 

            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ', 

            'd'=>'đ', 

            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ', 

            'i'=>'í|ì|ỉ|ĩ|ị', 

            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ', 

            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự', 

            'y'=>'ý|ỳ|ỷ|ỹ|ỵ', 

'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ằ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ', 

            'D'=>'Đ', 

            'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ', 

            'I'=>'Í|Ì|Ỉ|Ĩ|Ị', 

            'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ', 

            'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự', 

            'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ', 

        ); 

       foreach($unicode as $khongdau=>$codau){ 

            $arr = explode("|", $codau); 
			$str = str_replace($arr, $khongdau, $str);

       } 
	   return $str;



    }
function changeTitle($str){
	$str=trim($str);
	if ($str=="") return "";
	$str=str_replace('"','',$str);
	$str=str_replace("'",'',$str);
	$str=stripUnicode($str);
	$str=mb_convert_case($str, MB_CASE_TITLE, 'utf-8');
	$str=str_replace(' ', '-',$str);
	return $str;
}



?>