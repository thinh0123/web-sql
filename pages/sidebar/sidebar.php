<div class="sidebar">
          <ul class="list_sidebar">
            <h3> Danh Mục Phòng</h3>
            <?php 
              $sql_danhmuc = "SELECT * FROM danh_muc ORDER BY id_dm DESC";
              $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
              while($row = mysqli_fetch_array($query_danhmuc)){
           ?>
            <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_dm'] ?>"><?php echo $row['ten_dm'] ?></a> </li>
            <?php 
              }
             ?>
          </ul>
        </div>