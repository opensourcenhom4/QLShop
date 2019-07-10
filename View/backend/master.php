<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
  <script type="text/javascript" src="public/backend/ckeditor/ckeditor.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <script src="public/backend/js/jquery.min.js"></script>
  <script src="public/backend/js/popper.min.js"></script>
  <script src="public/backend/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Fooshoes</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=user">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=category">Hãng sản phẩm</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=product_type">Loại sản phẩm</a>
          </li>
		<li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=product">Sản phẩm</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=news">Tin tức</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=user">Khách hàng</a>
          </li>
        </ul>  
        <div class="dropdown">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            <?php 
              if (isset($_SESSION["c_fullname"])) {
                echo  $_SESSION["c_fullname"];
                 # code...
               }else{
                echo "Tên user";
               }
            ?>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="admin.php?controller=changepass&act=change">Change password</a>
            <a class="dropdown-item" href="admin.php?controller=logout">Logout</a>
          </div>
        </div>
      </div>
      
      </div>
    </nav>
    <div class="container" style="margin-top: 70px;">
    <?php 
        //kiem tra, neu duong dan ton tai thi load mvc do ra
        if(file_exists($controller))
          include $controller;
     ?>
    </div>
</body>
</html>