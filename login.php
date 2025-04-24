
   <?php
 //include("login.php");
// index.php

require("config.php");

//Kiểm tra xem phiên đã được bắt đầu hay chưa trước khi gọi session_start()
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if (isset($_POST["dangnhap"]) && isset($_POST["email"]) && isset($_POST["password"]) && $_POST["email"] != '' && $_POST["password"] != '') {
    $conn = mysqli_connect('localhost', 'root', '', 'webshop');

    // Kiểm tra kết nối
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
   }

    // Thực hiện xử lý khi người dùng ấn nút submit và điền đầy đủ thông tin.
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
// Mã hóa password 
  //$password = md5($_POST["password"]);

  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
   $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_array($result);
      
        // Tạo ra 1 phiên lưu trữ tạm thời dữ liệu lên hệ thống    
       $_SESSION['id'] = $row['id'];
       
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
     $_SESSION['password'] = $row['password'];
        $_SESSION["thong_bao"] = "Đăng nhập thành công";
       header("location: admin.php");
        exit();
  } else {
      $_SESSION["thong_bao"] = "Email hoặc mật khẩu nhập không đúng";
       header("location: login.php");
       ob_clean();
      exit();
    
  }
        
    // Đóng kết nối
    mysqli_close($conn);
} //else {
  //  $_SESSION["thong_bao"] = "Vui lòng điền đầy đủ thông tin.";
  // header("location: trangdangnhap.php");
  //  exit();
//}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Đăng kí tài khoản</title>
	<link rel="stylesheet" href="">
  <style type="text/css">
	<!------------css trong này------------>

@import url('https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap');

	  *{
		  margin: 0;
		  padding: 0;
		  box-sizing: border-box;
		  text-decoration: none;
		  font-family: "Source Sans 3", sans-serif;
		   }
	  
	  body{
		  display: flex;
		  align-items: center;
		  justify-content: center;
		  min-height: 100vh;
		  background:#f7f7f7;
		  padding: 0 10px;
	  }
	  
	  .wrapper{
		  background: #fff;
		  max-width: 450px;
		  width: 100%;
		  border-radius: 16px;
		  box-shadow: 0 0 128px 0 rgba(0,0,0,0.1), 0 32px 64px -48px rgba(0,0,0,0.5);
	  }
	  
	  /*form*/
	  .form{
		  padding: 25px 30px;
	  }
	  .form header{
		  font-size: 25px;
		  font-weight: 600;
		  padding-bottom: 10px;
		  border-bottom: 1px solid #E6E6E6;
	  }
	  
	  .form form{
		  margin: 20px 0;
	  }
	  
	  .form form .error-txt{
		  color: #721c24;
		  padding: 8px 10px;
		  text-align: center;
		  border-radius: 5px;
		  background: f8d7da;
		  border: 1px solid #F5C6CB;
		  margin-bottom: 10px;
		  display: none
	  }
	  
	  .form form .name-details{
		  display: flex
	  }
	  
	  .form .name-details .field:first-child{
		  margin-right: 10px;
	  }
	   .form .name-details .field:first-child{
		  margin-left: 10px;
	  }
	  
	  .form form .field{
		  display: flex;
		  margin-bottom: 10px;
		  flex-direction: column;
		  position: relative;
	  }
	  
	  .form form .field label{
		  margin-bottom: 2px;
	  }
	  
	  .form form .input input{
		  height: 40px;
		  width: 100%;
		  font-size: 16px;
		  padding: 0 10px;
		  border-radius: 5px;
		  border: 1px solid #CCCCCC;	  
	  }
	  .form form .field input{
		  outline: none;
	  }
	  
	  .form form .image input{
		  font-size: 17px;
	  }
	  
	  .form form .button input{
		  height: 45px;
		  border: none;
		  color: #fff;
		  font-size: 17px;
		  background: #333;
		  border-radius: 5px;
		  cursor: pointer;
		  margin-top: 13px;
	  }
	  
	  .form .link{
		  text-align: center;
		  margin: 10px 0;
		  font-size: 17px;
	  }
	  
	  .form .link a{
		  color: #333;
	  }
	  
	  .form .link a:hover{
		  text-decoration: underline;
	  }
	  
	 
	  
	  }
	  
	
	
	
	</style>
</head>

<body>

	<div class="wrapper">
	<section class="form signup">
           <?php
                                if (isset($_SESSION['thong_bao'])) {
                                ?>
                                    <div class="error" id="error">
                                        <p><?php echo $_SESSION['thong_bao'] ?></p>
                                    </div>

                                    <?php unset($_SESSION['thong_bao']) ?>
                                <?php
                                }
                                ?>

        <form action="" method="post" id="login">
		<header>Đăng nhập tài khoản</header>
            
		<form action="#">
		<div class="error-text"></div>
			
			
			
			<div class="field input">
			<label for="">Email</label>
				<input type="text" name="email" placeholder="Nhập email" required>
			</div>
			
			<div class="field input">
			<label for="">Mật khẩu</label>
				<input type="password" name="password" placeholder="Nhập Password" required >
				<i class="fas fa-eye"></i>
			</div>
			
			
				
				<div class="field button">
				<input type="submit" value="Đăng nhập" name="dangnhap">
				</div>
		
		</section>
	</div>
       
</body>
</html>


