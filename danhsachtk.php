<?php
require('config.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ADMIN</title>
       <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
    <style type="text/css">
     body{
            background:#F4EFEF;
            margin: auto;
        }
        .heard div img{
            width: 45%;
            height: 15%;
        }
        .tab-content {
            background: #FCFCFC;
            border: 1px solid #000000;
            border-radius: 10px;
            
        }
        .tab-content a {
            color: #000000; 
        }
        .tab-content li {
            color: #000000; 
        }
        .p-3{
            width : 370px;
            height: 500px;
            border-radius: 10px;
            overflow-y: scroll;
        }
        .col-md-3{
     
        }

        }
        .fs-6{
            margin-top: 2px;
            margin-bottom:  1px;
            vertical-align: inherit;
        }
        .dropdown-menu{
          width: 20px;
            height: 30px;
            margin-top: 5px;
        }
        .p-4{
            width: 1100px;
            height: 500px;
            overflow-y: scroll;
        }
        .select{
            width: 200px;
        }
        .mota{
        width: 500px;
            height: 100px
                
        }
        .reset{
            width: 90px;
            background: #FFFAFA;
            box-shadow:0 0 128px 0 rgba(0,0,0,0.1), 0 32px 64px -48px rgba(0,0,0,0.5);
            border:  1px solid #CAC5C6;
            
        }
        .update{
           width: 180px;
            
            background:#FC7274 ;
            box-shadow:0 0 128px 0 rgba(0,0,0,0.1), 0 32px 64px -48px rgba(0,0,0,0.5);
            border:  1px solid #CAC5C6;
              
        }
    </style>
</head>

<body>
      
  
  <section class="heard">
    <div class="col-md-12" align="center">
        <img src="logo.png" width="70%" class="img-fluid">
        </div>
     
    
    </section>
    <section class="tab-content">
      <div class="row py-3">
      <div class="col-md-3">
          <div class="p-3 border bg-light">
              <div class="row py-3">
                  <div class="col-2">
              <div class="fs-6"><i class="fa-solid fa-house"></i></div>
                  </div>
                  <div class="col-10">
                  <a href="trangadmin.php">Home</a>
                  </div>
              
              </div>
                 <div class="row py-3">
              <div class="col-2">
                     <div class="fs-6"><i class="fa-solid fa-layer-group"></i></div>
                     </div>
                     <div class="col-10">
                        <a>Quản lý danh mục</a>
            
          <ul  aria-labelledby="navbarDropdown">
            <li><a href="quan.html">Tất cả</a></li>
            <li><a href="trangsanpham.html">Đơn Hủy</a></li>    
              <li><a href="trangsanpham.html">Đơn Trả Hàng</a></li>   
          </ul>

                     
                     </div>
              </div>
                 <div class="row py-3">
              
                 <div class="col-2">
                     <div class="fs-6"><i class="fa-solid fa-cart-arrow-down"></i></div>
                     </div>
                     <div class="col-10">
                        <a>Quản lý sản phẩm</a>
            
          <ul  aria-labelledby="navbarDropdown">
            <li><a href="themsanpham.php">Tất cả sản phầm</a></li>
            <li><a href="themsanpham_xuly.php">Thêm sản phẩm</a></li>        
          </ul>

                     
                     </div>
              </div>
                 <div class="row py-3">
                 <div class="col-2">
                     <div class="fs-6"><i class="fa-regular fa-address-book"></i></div>
                     </div>
                     <div class="col-10">
                        <a>Quản lý tài khoản</a>
            
          <ul  aria-labelledby="navbarDropdown">
            <li><a href="danhsachtk.php">Danh sách tài khoản</a></li>
                  
          </ul>

                     
                     </div>
              
              </div>
              <div class="row py-3">
                 <div class="col-2">
                     <div class="fs-6"><i class="fa-solid fa-chart-line"></i></div>
                     </div>
                     <div class="col-10">
                        <a>Quản lý chăm sóc khách hàng</a>
            
          <ul  aria-labelledby="navbarDropdown">
            <li><a href="care.php">Danh sách phản hồi</a></li>
            
          </ul>

                       </div>
                     </div>
                  <div class="row py-3">
                     <div class="col-2">
                     <div class="fs-6"><i class="fa-solid fa-database"></i></div>
                     </div>
                     <div class="col-10">
                        <a>Quản lý dữ liệu</a>
            
          <ul  aria-labelledby="navbarDropdown">
            <li><a href="quan.html">Phân tích bán hàng</a></li>
            <li><a href="trangsanpham.html">Hiệu quả bán hàng</a></li>        
          </ul>

                     
                     </div>
                  </div>

            

        </div> 
        </div>
           
        <div class="col-md-9">
          
          <div class="p-4 border bg-light">
              <div class="row py-3">
              <div class="col-md-4"><b>Tất cả tài khoản</b></div>
                  <div class="col-md-8">
                       <div class="input-group mb-1">
                  <input type="text" class="form-control" placeholder="Nhập tài khoản cần tìm" aria-label="Nhap san pham can tim" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i>
</span></div>
                  
                  </div>
              
              
              </div>
   
              <div class="row py-3 border-1 bg-secondary">
                 <div class="col-1 border-1"><b>STT</b></div>
                    
            <div class="col-2 border-1"><b>Username</b></div>
                <div class="col-2 border-1"><b>Password </b></div>
                     <div class="col-3 border-1 "><b>Email </b></div>
            
                    <div class="col-4 border-1"><b>Thao tác </b></div>
                  
              </div>
              
                    <div class="row py-3 border">
                       <?php 
			   $sql = "SELECT * FROM dangki";
			   $qr = mysqli_query($conn,$sql);
			   while($rows = mysqli_fetch_assoc($qr)){
			?>  
       <div class="col-1 border-1" name="id"><?php echo $rows["id"];?></div> 
           
                 <div class="col-2 " name="username"><?php echo $rows["ten"];?><?php echo $rows["ho"];?></div>  
                 <div class="col-2 " name="password"><?php echo $rows["password"];?></div>  
                 <div class="col-3 " name="email"><?php echo $rows["email"];?></div>  
                
                     <div class="col-4">
                        <div class="row">
                          <div class="col-6">
                              <div class="sua">
                              <a href="suasp.php">Sửa</a></div></div>
                            <div class="col-6"><a href="xoasp.php">Xóa</a></div>
                          </div>
                        </div>
                         <?php
               }?> 
             
                                 
              </div>
             
                   
                    </div>
                   
                
            
       
          
          
          </div>
        
        </div>
       
    </section>
    
    <!-------------------------------------footer------------------------------->
       
        <!-------------------------------------footer------------------------------->
    
    
     <script src="js/bootstrap.bundle.min.js"></script>
      
</body>
    
</html>
