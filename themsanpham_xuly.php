<?php
require('config.php');
require('admin.php');
ob_start(); 


?>


        <div class="col-md-9">
          
    
           <form action="" method="post">
                  <input type="hidden" name="id" value="<?php echo $id;?>" id="">   
          <div class="p-4 border bg-light">
            <div class="row py-3">
            <div class="row py-3">
                  <b>Thông tin cơ bản</b>
              </div>
               
                 <div class="row py-3">
                <div class="col-3">Hình ảnh sản phẩm</div>
                     <div class="col-3"><input type="radio" name="hinhanh" value="hinhanh11" checked> Hình ảnh tỉ lệ 1:1
                       
                     </div>
                     <div class="col-3"> <input type="radio" name="hinhanh" value="hinhanh34" checked> Hình ảnh tỉ lệ 3:4 </div>
                      <div class="col-3"></div>
                </div>
              <div class="row py-3">
                <div class="col-md-3"></div>
                  <div class="col-md-3">
                   <label for="">Hình ảnh:</label>
                    <input type="file" name="img" id="fileField">
                  </div>
                
              </div>
            
                <div class="row py-3">
                <div class="col-md-3">Tên sản phâm </div>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm + Thương hiệu +model +Thông số kĩ thuật" aria-label="" aria-describedby="basic-addon2">
                    </div>
                
                </div>
                <div class="row py-3">
                <div class="col-md-3">Gia </div>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="price" placeholder="Nhap gia" aria-label="" aria-describedby="basic-addon2">
                    </div>
                
                </div>
                <div class="row py-3">
                <div class="col-md-3">So luong </div>
                    <div class="col-md-9">
                     <input type="text" class="form-control" name="soluong" placeholder="Nhap so luong" aria-label="" aria-describedby="basic-addon2">
                    </div>
                
                </div>
                <div class="row py-3">
                
                 <div class="col-md-3">Ngành hàng</div>
                  <div class="col-md-9">
                   <select class="select" name="nganhhang" id="select">
                         <option label="Chọn ngành hàng"></option>
                         <option value="Thời trang quần ">Thời trang quần</option>
                       <option value="Thời trang áo">Thời trang áo</option>
                         <option value="Điện thoại phụ kiện">Điện thoại phục kiện</option>
                           <option value="Thiết bị gia dụng">Thiết bị gia  dụng</option>
                         <option value="Máy tính laptop">Máy tính laptop</option>
                           <option value="Nhà cửa , đời sống">Nhà cửa , Đời sống</option>
                         <option value="Sức khỏe">Sức khỏe</option>
                       <option value="Nước xả vải">Nước xả vải</option>
                     </select>
                    
                    </div>
                </div>
              <div class="row py-3">
                <div class="col-md-3">Mô tả</div>
                <div class="col-md-3">
                   <textarea rows="5" cols="60" placeholder="Nhập mô tả" name="mota"></textarea>
                   
                </div>
              </div>
              <div class="row py-3" align="right">
                <div class="col-6">
                    
                    
                </div>
                     <div class="col-3">
                       <input class="reset" type="reset" name="reset" id="reset" value="Hủy" >
                    
                    
                    </div>
                    <div class="col-3">
                      <input class="update" type="submit" name="them" id="them" value="Lưu Thông Tin">
                    
                  </div>
              </div>
                     </div>
             
                   
                   

          </div>         
                  </form>
            
   <!-------------------------------------------------------------------------->    
          
          </div>
        
          </div>
    </section>
  
    <!-------------------------------------footer------------------------------->
       
        <!-------------------------------------footer------------------------------->
    
    
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
