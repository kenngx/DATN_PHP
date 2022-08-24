<?php
$tb = "";
$conn = new mysqli("localhost", "root", "", "datn_data");
if (isset($_POST['username'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	if ($username == '' || $password == '') {
		$tb = "Hãy nhập đầy đủ thông tin";
	} else {
		$sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
		$sql_select_admin = mysqli_query($conn, $sql);

		if (mysqli_num_rows($sql_select_admin) > 0) {
			$res = mysqli_fetch_assoc($sql_select_admin);
			session_start();
			$_SESSION["id_nd"] =  $password;
			$_SESSION["ten_nd"] =  $username;
			header("Location: ../html/index.html");
		} else {
			//$tb = "Bạn đã nhập sai tên đăng nhập hoặc mật khẩu";
            echo '<script>alert("Bạn đã nhập sai tên đăng nhập hoặc mật khẩu")</script>';
		}
	}
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Gathering Log In form Responsive Widget Template :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" type="text/css" href="../css/background_login.css">
    <!--//Style-CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">

</head>

<body>
    <div class="w3l-signinform">
        <!-- container -->
        <div class="wrapper">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h1>Đăng Nhập</h1>
                    
                    
                    <form action="#" method="post"style = "opacity: 0.5">
                        <div class="input-group">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" placeholder=" Username" required="" name="username">
                        </div>
                        <div class="input-group two-groop">
                            <span><i class="fa fa-key" aria-hidden="true"></i></span>
                            <input type="Password" placeholder="Password" required="" name="password">
                        </div>
                        
                        <button class="btn btn-primary btn-block" type="submit">Log In</button>
                    </form>
                
                   
                </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
        <!-- footer -->
        <div class="footer">
	 <p>Tập đoàn công nghiệp - Viễn thông quân đội<a href="#" target="_blank">  VIETTEL </a></p>
</div>	
        <!-- footer -->
    </div>

</body>

</html>