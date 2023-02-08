<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="./Font-Awesomecss/css/font-awesome.min.css">

  <title>THINH PHAT HOTEL</title>
</head>
<body>
  <div class="wrapper">
      <?php 
      session_start();
      include("admin/config/config.php");
      
 //     include("pages/header.php");
      include("pages/menu.php");
      include("pages/sidebar/sidebar.php");
      include("pages/main.php");

      include("pages/footer.php");
    ?>

      
      
  </div>

</body>
</html>
