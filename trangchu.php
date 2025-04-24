<?php
// index.php
require 'config.php';


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AOD SHOP</title>
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
    
        .tieude{
            
        }
        .tieude ul{
            
        }
        .tieude ul li{
            list-style-type: none;
  display: inline;
  margin-left: 50px;
          
            margin-left: 15%;
          
            color: #000000;
        
        }
        .col-12 h6{
           border: 1px solid #F95C5E;
            border-radius: 5px;
            width: 85px;
           
        }
        
        .category-icon{
            width: 100px;
            height: 100px;
        }
        .category-icon img{
          vertical-align:sub;
            
        }
        .footterconten{
            vertical-align: inherit;
        }
        .pagination{
           vertical-align: inherit;
            margin-left: 35%;
            margin-right: 40%
        }
        .pagination ul{
            color: #000000;
        }
          .pagination li{
            color: #000000;
        }
        .page-link{
            color: #000000;
        }
    </style>
</head>

<body>
      <?php
	           if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])){
                  
			
	           $name = $_POST["name"];
               $price = $_POST["price"];
                        $img = $_POST["img"];
               $soluong = $_POST["soluong"];
                 
	           $nganhhang = $_POST["nganhhang"];
	           $mota = $_POST["mota"];
			   $sql = "INSERT INTO products (id,name , price,img ,  soluong , nganhhang , mota) VALUES('$id','$name', '$price' ,'$img',  '$soluong','$nganhhang','$mota')";
			   if (mysqli_query($conn, $sql)) {
			header("location: chitietsanpham.php");
        }  else 
                   {
            echo "Lỗi: " . $conn->error;
        }  
               }
                  
			?>
    <section class="myheader">
              <div class="row py-3">
               
    <div class="container py-3">
        <div class="row">
        <div class="col-md-3">
            <img src="logo-files/logo.png" width="70%" class="img-fluid">
            </div>
            <div class="col-md-4 ">
             <div class="input-group mb-1">
  <input type="text" class="form-control" placeholder="Nhập sản phẩm cần tìm" aria-label="Nhap san pham can tim" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i>
</span>
</div>
            </div>
            <div class="col-md-3 ">
            <div class="row">
                <div class="col">
                <div class="row">
                    <div class="col-3">
                        <div class="fs-3 text-danger">
                            <i class="fa-solid fa-phone"></i>
                        </div>
</div>
                    <div class="col-9">
                        Tư vấn hỗ trợ<br>
                        <strong class="fs-6 text-danger ">0823458246</strong>
                    </div>
                    </div>
                </div>
                <div class="col">
                <div class="row">
                    <div class="col-3">
                        <div class="fs-3 text-danger">
                      <i class="fa-regular fa-circle-user"></i>
                        </div>
                    </div>
                    <div class="col-9">
                        Xin chào!!!<br>
                      <a class="login" name="login" aria-current="page"  href="trangdangnhap.php"><strong class="fs-6 text-danger" >Đăng nhập </strong></a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-2">
            <div class="row">
                <div class="col-4">
                <a href="#" class="position-relative">
  <span class="fs-4"><i class="fa-regular fa-heart"></i></span>
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    0
    
  </span>
</a>
                </div>
                <div class="col-4">
                             <a href="tranggiohang.php" class="position-relative">
  <span class="fs-4"><i class="fa-brands fa-shopify"></i></span>
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    0
    
  </span>
</a>
                </div>
                <div class="col-4">
                             <a href="#" class="position-relative">
  <span class="fs-4"><i class="fa-solid fa-share-nodes"></i></span>
 
   
 
</a>
                </div>
                </div>
            </div>
        </div>
        </div>

        <!--myheard-->
    </section>
    <section class="mymenu bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-10">
      <nav class="nnavbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand d-none" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="home.php" name="Trangchuu">Trang chủ</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true"  aria-expanded="true">
          Sản Phẩm
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
               <li><hr class="dropdown-divider"><b>Thời trang</b></li>
           
            <li><a class="dropdown-item" href="quan.html">Quần</a></li>
            <li><a class="dropdown-item" href="trangsanpham.html">Áo</a></li>
                          <li><a class="dropdown-item" href="#">Mũ</a></li>
                          <li><a class="dropdown-item" href="#">Váy</a></li>
            <li><hr class="dropdown-divider"><b>Trang sức</b></li>
              
                          <li><a class="dropdown-item" href="#">Nhẫn</a></li>
                          <li><a class="dropdown-item" href="#">Vòng cổ</a></li>
                          <li><a class="dropdown-item" href="#">Vòng tay</a></li>
                          <li><a class="dropdown-item" href="#">Khuyên tai</a></li>
              <li><hr class="dropdown-divider"><b>Nước giặt</b></li>
               
                <li><a class="dropdown-item" href="#">Nước giặt Hygiene</a></li>
                <li><a class="dropdown-item" href="#">Nước xả vải D-nee</a></li>
              <li><hr class="dropdown-divider"><b>Đồ điện tử</b></li>
              
            <li><a class="dropdown-item" href="dienthoai.html">Điện thoại</a></li>
              <li><a class="dropdown-item" href="#">Laptop</a></li>
              <li><a class="dropdown-item" href="#">Ipad</a></li>
              <li><a class="dropdown-item" href="#">Airdrop</a></li>
              <li><hr class="dropdown-divider"><b>Đồ chơi trẻ em</b></li>
              
              <li><a class="dropdown-item" href="#">Ô tô điều khiển từ xa</a></li>
              <li><a class="dropdown-item" href="#">Lego</a></li>
              <li><a class="dropdown-item" href="#">Súng nước </a></li>
              <li><a class="dropdown-item" href="#">Con quay</a></li>
          </ul>
        </li>
             <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Bài Viết</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Xu hướng </a></li>
                  <li><a class="dropdown-item" href="#">Ưu đãi cuối tháng</a></li>
                  <li><a class="dropdown-item" href="#">Hàng mới được nhập về</a></li>
              
              </ul>
          </li>
             <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Chăm Sóc Khách Hàng!!!</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown" type="disc">
                  <li><a class="dropdown-item" href="#">Đăng kí tài khoản (tích thưởng)</a></li>
                   <li><a class="dropdown-item" href="#">Tích t hưởng như thế nào?</a></li>
                   <li><a class="dropdown-item" href="#">Chương trình ưu đãi sinh nhật khách hàng</a></li>
                   <li><a class="dropdown-item" href="#">Chính sách thành viên</a></li>
                   <li><a class="dropdown-item" href="#">Chính sách bảo hành</a></li>
                   <li><a class="dropdown-item" href="#">Hướng dẫn mua trả góp tại AOD</a></li> 
                   <li><a class="dropdown-item" href="#">Hướng dẫn quay video đóng/mở gói hàng</a></li>
    
              </ul>
          </li> 
        <li class="nav-item">
          <a class="nav-link disabled text-white" href="#" tabindex="-1" aria-disabled="true">Tuyển dụng</a>
        </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Liên Hệ</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="chamsockh.php">Hỏi&amp;đáp</a></li>
              
              </ul>
          </li> 
      </ul>
    </div>
  </div>
</nav>
          </div>
            </div>
        </div>
    </section>
    <section class="mycontent">
          <?php require_once 'C:\xampp\htdocs\bootstrap-5.0.2-dist\router.php';?>   
          <div class="container">
       <div class="row py-3">
        <div class="slider">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
     <video controls autoplay muted>
        <source src="video.mp4" type="video/mp4">
        </video>
    </div>
    <div class="carousel-item">
      <img src="do-tien-ich-gia-dung-99k-hang-nhat.jpg" class="d-block w-100" alt="99k">
    </div>
    <div class="carousel-item">
      <img src="flash-deal-dinh-cuoi-nam-2019-tai-sanhangre.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
           </div>
            
        <!---------------------------------------------slider-------------------------------------------->
            
          
               <!---------------------------------------------cate-list---------------------------->
               <div class="tieude">
			<ul class="hm-tabs__list">
				<li class="hm-tabs__item">
					<a href="javascript:void(0)" data-tab="home-col__tab1" class="active" data-reg="true" data-handle="hot-products">Sản Phẩm Nổi Bật</a>
				</li>
				
				<li class="hm-tabs__item">
					<a href="javascript:void(0)" data-tab="home-col__tab2" data-reg="true" data-handle="san-pham-39k" class="">Sản Phẩm Bán Chạy</a>
				</li>
				
				
				<li class="hm-tabs__item">
					<a href="javascript:void(0)" data-tab="home-col__tab3" data-reg="true" data-handle="ao" class="">Gợi ý cho bạn</a>
				</li>
				
			</ul>
		</div>
                   
               <div class="contenheard">
               <div class="row">
                   <div class="col-12">
                   <i class="fa-solid fa-shirt"></i>  Thời trang áo
                   </div>
                   </div>
               </div>
               
               
               <div class="contenct">
                      <div class="row py-3">
                <?php
			   
                  
			
			  $sql = "SELECT * FROM products WHERE nganhhang='Thời trang áo'";
			  $qr = mysqli_query($conn,$sql);
                      
			  while($rows = mysqli_fetch_assoc($qr)){
                
                      
                       
			?>  
                       
                   <div class="col-md-3">
                       <div class="row">
                              <input type="hidden" name="id" value="<?php echo $id;?>" id="">   
                           <div class="col-12">
                       <img src="<?php echo $rows['img']; ?>"class="img-fluid">
                               </div>
                       </div>
                       <div class="row">
                       <div class="col-12">
                       <?php echo $rows['name']; ?>   <br>
                           <strong><?php echo $rows['price']; ?>đ</strong>
                           </div>
                       </div>
                      
                                             <div class="col-12" align="right">
                           <h6 align="right" ><input class="update" type="submit" name="them" id="them" value="Mua Ngay"></h6><br>
                                                 <a href="chitietsanpham.php?id=<?php echo $rows["id"];?>">xem chi tiet </a>
                           </div>
                       </div>
                    <?php } ?>
               </div>
               </div>
               
               <!---------------------------------------contect------------------------------------>
                <div class="contenheard">
               <div class="row">
                   <div class="col-12">
                   <i class="fa-solid fa-shirt"></i>  Thời trang Quần
                   </div>
                   </div>
               </div>
      
               <div class="contenct">
                    
                   <div class="row py-3">
                <?php
			   
                  
			
			  $sql = "SELECT * FROM products WHERE nganhhang='Thời trang quần áo'";
			  $qr = mysqli_query($conn,$sql);
                      
			  while($rows = mysqli_fetch_assoc($qr)){
                
                      
                       
			?>  
                       
                   <div class="col-md-3">
                       <div class="row">
                              <input type="hidden" name="id" value="<?php echo $id;?>" id="">   
                           <div class="col-12">
                       <img src="<?php echo $rows['img']; ?>"class="img-fluid">
                               </div>
                       </div>
                       <div class="row">
                       <div class="col-12">
                       <?php echo $rows['name']; ?>   <br>
                           <strong><?php echo $rows['price']; ?>đ</strong>
                           </div>
                       </div>
                      
                                             <div class="col-12" align="right">
                           <h6 align="right" ><input class="update" type="submit" name="them" id="them" value="Mua Ngay"></h6><br>
                                                 <a href="chitietsanpham.php?id=<?php echo $rows["id"];?>">xem chi tiet </a>
                           </div>
                       </div>
                    <?php } ?>
               </div>
                <div class="contenheard">
               <div class="row">
                   <div class="col-12">
                  <i class="fa-solid fa-droplet"></i>Nước xả vải
                   </div>
                   </div>
               </div>
               <div class="contenct">
                   <div class="row py-3">
                <?php
			   
                  
			
			  $sql = "SELECT * FROM products WHERE nganhhang='Nước xả vải'";
			  $qr = mysqli_query($conn,$sql);
                      
			  while($rows = mysqli_fetch_assoc($qr)){
                
                      
                       
			?>  
                       
                   <div class="col-md-3">
                       <div class="row">
                              <input type="hidden" name="id" value="<?php echo $id;?>" id="">   
                           <div class="col-12">
                       <img src="<?php echo $rows['img']; ?>"class="img-fluid">
                               </div>
                       </div>
                       <div class="row">
                       <div class="col-12">
                       <?php echo $rows['name']; ?>   <br>
                           <strong><?php echo $rows['price']; ?>đ</strong>
                           </div>
                       </div>
                      
                                             <div class="col-12" align="right">
                           <h6 align="right" ><input class="update" type="submit" name="them" id="them" value="Mua Ngay"></h6><br>
                                                 <a href="chitietsanpham.php?id=<?php echo $rows["id"];?>">xem chi tiet </a>
                           </div>
                       </div>
                    <?php } ?>
               </div>
               </div>
              <!--------------------------------footerconten--------------------->
                <div class="footterconten">
            <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#">6</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>  
              </div>
        </div>
        
        
        
        
        
            <!--------------------------------------------myfooter---------------------------------->
        
        
        
    </section> 
    <section class="myfooter bg-secondary text-white py-4">
    <div class="container">
        <div class="row">
        <div class="col-md-3">
            <h5>Về chúng tôi</h5><br>
            <a><font face="Bradley Hand ITC">Don’t bother me i'm in AOD SHOP<br>
© Bản quyền thuộc về AOD</font></a>
           
            </div>
        <div class="col-md-3">
            <h5>Liên hệ</h5>
            <div class="row">
            <div class="col-12">
                    Điện thoại<br>
            <strong>0823458246</strong>
                </div></div>
            <br>
            <div class="row">
            <div class="col-12">
                    Email CSKH<br>
            <strong>Buihuy111004@gmail.com</strong>
                </div></div>
            <br>
            <div class="row">
            <div class="col-12">
                    Email liên hệ công việc<br>
            <strong>aodshop204@yahoo.com</strong>
                </div></div>
            <br>
             <div class="row">
                <div class="col-12">
                    Thứ hai - Chủ Nhật<br>
            <strong>9h20-22h00</strong>
                </div>
            
            </div>
            </div>
        <div class="col-md-3">
            <h5>Hỗ trợ</h5>
            <div class="row">
            <div class="col-12">Tài khoản</div>
            </div><br>
             <div class="row"><div class="col-12">Chính sách đối trả</div></div><br>
             <div class="row"><div class="col-12">Chính sách bảo mật</div></div><br>
             <div class="row"><div class="col-12">Hướng dẫn quay video đóng/mở gói hàng</div></div><br>
             <div class="row"><div class="col-12">Tích lũy điểm thưởng tại AOD thế nào ?</div></div><br>
            
            </div>
        <div class="col-md-3">
            <h5>Hệ thống cửa hàng</h5>
            <div class="row">
            <div class="col-12">
               <font> Hiện tại AOD® chỉ hoạt động kinh doanh qua các kênh trực tuyến: Website, Facebook, Instagram, Shopee, Lazada & Tiktok shop</font>
                </div>
            </div><br>
            <div class="row"></div>
            <h4>Mở rộng</h4><br>
            <div class="row">
            <div class="col-12">
                <font>Bài viết</font><br>
                <br>
                <font>Tuyển dụng</font>
                </div>
            </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
            <h4>Đăng kí nhận tin</h4>
            <div class="row">
                <div class="col-md-10">
                 <div class="input-group mb-1">
  <input type="text" class="form-control" placeholder="Nhập email" aria-label="Nhap san pham can tim" aria-describedby="basic-addon2">
  <span class="input-group-text bg-danger text-white" id="basic-addon">Đăng kí
</span>
</div>
                </div>
                <div class="col-md-2">
                <div class="row">
                    <div class="col-4"><i class="fa-brands fa-facebook-f"></i></div>
                     <div class="col-4"><i class="fa-brands fa-tiktok"></i></div>
                     <div class="col-4"><i class="fa-brands fa-instagram"></i></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--------------------------------------------myfooter---------------------------------->
    <script src="js/bootstrap.bundle.min.js"></script>
     
       <script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                  dots:false,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                 
                  },
                  600: {
                    items: 3,

                 
                  },
                  1000: {
                    items: 5,
                   
                    loop: false,
                    margin: 20
                  }
                }
              })
            })
          </script>
</body>
</html>
