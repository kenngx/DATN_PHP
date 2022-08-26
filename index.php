<?php

$conn = new mysqli('localhost', 'root', '', 'nguyentuananh_datn');

if(isset($_POST["submit"])){
	$str = $_POST["search"];
	$sth = $conn->prepare("select * from data_dn where mst = '$str'");
	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth -> fetch()) {
		
	}

}

?>



<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Flat Search Box Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
   
    <!--search start here-->
<div class="search">
<a href = "index.php">
		<image src = "./images/logo.png" alt="Image Load Error" width="150" height="80" style = "position: fixed; margin-left:39px;">
	</a>
    <a href="./login/login.php">
        <button type = "submit" class = "btn btn-primary" style = "position: fixed; top:10px; left:92vw; opacity:0.8">Đăng Nhâp</button>
     </a>
	<!-- <i> </i> -->
	<div class="s-bar">
	   <form method = "post">
		<input type="text" value="Nhập Mã Số Thuế" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Template';}">
		<input type="submit"  value="Tìm Kiếm"/>
</br>
</br>
		
	  </form>
	</div>
	<?php header('./result/result.php')?>
		<table class="table table-dark table-hover" >
            <thead>
              <tr>
                <th scope="col">Mã số thuế</th>
                <th scope="col">Tên doanh nghiệp</th>
                <th scope="col">Nhà cung cấp</th>
                <th scope="col">
                  <p class="text-dark">Thời gian</p>
                </th>
                <th scope="col">Trạng thái</th>
              </tr>
            </thead>
            <tbody id="tab_tap_upload">

            </tbody>
          </table>
</div>
<!--search end here-->	

	<div class="copyright" >
	 	<p style = "bottom: 5px">Tập đoàn công nghiệp - Viễn thông quân đội<a href="index.php" target="_blank" style = "bottom: 5px">  VIETTEL </a></p>
	</div>


<script >

function login() {
    window.location.href("login/login.php");
}
</script>
</body>
</html>