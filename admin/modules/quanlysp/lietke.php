<?php
  $sql_lietke_phong = "SELECT * FROM san_pham,danh_muc WHERE san_pham.id_dm=danh_muc.id_dm ORDER BY id_sanpham DESC";
  $query_lietke_phong = mysqli_query($mysqli,$sql_lietke_phong);
?>
<p>Liệt kê danh mục phòng</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
    <th>Id</th>
    <th>Tên phòng</th>
    <th>Hình ảnh</th>
    <th>Giá phòng</th>
    <th>Số lượng</th>
    <th>Danh mục</th>
    <th>Mã phòng</th>
    <th>Trạng thái</th>
    <th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_phong)){
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></td>
    <td style="text-align: right;"><?php echo $row['soluong'] ?></td>
    <td><?php echo  $row['ten_dm'] ?></td>
    <td style="text-align: right;"><?php echo $row['masp'] ?></td>
    
   
    <td><?php if($row['tinhtrang']==1){
        echo 'Hiện';
      }else{
        echo 'Ẩn';
      } 
      ?>
      
    </td>
    <td>
      <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xoá</a> | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a> 
    </td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>