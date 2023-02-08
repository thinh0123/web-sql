<?php
$mysqli = new mysqli("localhost","root","","shopengine");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Kết Nối Lỗi" . $mysqli -> connect_error;
  exit();
}
?>