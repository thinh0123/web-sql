
<?php
  if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
    unset($_SESSION['dangky']);
  } 
?>
<div class="menu">
      <ul class="list_menu">
        <li><a href="index.php">Trang chủ</a></li>
        
        <li><a href="index.php?quanly=giohang">Danh sách đặt phòng</a></li>
        <?php
        if(isset($_SESSION['dangky'])){ 

        ?>
        <li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
        <li><a href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a></li>
        <?php
        }else{ 
        ?>
        <li><a href="index.php?quanly=dangky">Đăng ký</a></li>
        <?php
        } 
        ?>
        <li><a href="index.php?quanly=lienhe">Liên hệ</a></li>
       
        
          
        
      </ul>
      <p>
        <form action="index.php?quanly=timkiem" method="POST">
          <input type="text" placeholder="Tìm kiếm phòng..." name="tukhoa">
          <input type="submit" name="timkiem" value="Tìm kiếm">
        </form>
      </p>
    </div>