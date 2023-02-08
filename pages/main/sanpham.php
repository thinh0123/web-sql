<h3>Chi tiết phòng</h3>
<?php
	$sql_chitiet = "SELECT * FROM san_pham,danh_muc WHERE san_pham.id_dm=danh_muc.id_dm AND san_pham.id_sanpham='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
	<div class="hinhanh_sanpham">
		<img width="100%" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
	</div>
	<form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
		<div class="chitiet_sanpham">
			<h3 style="margin:0">Tên phòng : <?php echo $row_chitiet['tensanpham'] ?></h3>
			<p>Mã phòng: <?php echo $row_chitiet['masp'] ?></p>
			<p>Giá phòng: <?php echo number_format($row_chitiet['giasp'],0,',','.').'vnđ' ?></p>
			<p>Số lượng phòng: <?php echo $row_chitiet['soluong'] ?></p>
			<p>Danh mục phòng: <?php echo $row_chitiet['ten_dm'] ?></p>
			<p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm vào danh sách đặt phòng"></p>
			
		</div>
	</form>
</div>	
<div class="clear"></div>
<div class="tabs">
  <ul id="tabs-nav">
    <li><a href="#tab1">Thông tin phòng</a></li>
    <li><a href="#tab2">Đánh giá phòng</a></li>
    <li><a href="#tab3">Hình ảnh của phòng</a></li>
    
  </ul> <!-- END tabs-nav -->
  <div id="tabs-content">
    <div id="tab1" class="tab-content">
     	<?php echo $row_chitiet['tomtat'] ?>
    </div>
    <div id="tab2" class="tab-content">
     	<?php echo $row_chitiet['noidung'] ?>
    </div>
    <div id="tab3" class="tab-content">
     	<img width="100%" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
    </div>
    
  </div> <!-- END tabs-content -->
</div> <!-- END tabs -->
<?php
} 
?>

