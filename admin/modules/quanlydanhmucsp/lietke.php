<?php 
	$sql_lietke_danhmucsp = "SELECT * FROM danh_muc ORDER BY thutu_dm DESC ";
	$query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
 ?>
<p>Liệt Kê Danh Mục Phòng</p>
<table border="1" style="width:100%" width="100%" style="border-collapse: collapse;" >
  <tr>
  	<th>Id</th>
    <th>Tên Danh Mục</th>   
    <th>Quản Lý</th>
  </tr>
  <?php 
  	$i = 0;
  	while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
  		$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['ten_dm'] ?></td>
    <td>
    	<a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_dm'] ?>">Xóa</a> | <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_dm'] ?>">Sửa</a>
    </td>
  </tr>
 <?php 
	}
  ?>
</table>