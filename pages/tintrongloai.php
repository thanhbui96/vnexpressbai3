<?php
$idLT = $_GET["idLT"];
settype($idLT, "int");
?>
<?php
$bc=breadCrumb($idLT);
$row_bc = mysqli_fetch_array($bc, MYSQLI_ASSOC);
?>
<div>
    Trang chu >> <?php echo $row_bc['TenTL'] ?> >> <?php echo $row_bc['Ten'] ?>
</div>

<?php
$tin = TinTheoLoaiTin($idLT);
while($row_tin= mysqli_fetch_array($tin, MYSQLI_ASSOC)){
?>
<div class="box-cat">
	<div class="cat1">
    	
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            	<div class="news">
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_tin['idTin'] ?>">
                    <?php echo $row_tin['TieuDe'] ?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_tin['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row_tin['TomTat'] ?></div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            
        </div>
    </div>
</div>
<div class="clear"></div>

<?php
}
?>



