<?php
require('config.php');
require('admin.php');
ob_start();
?>

        <div class="col-md-9">
          
          <div class="p-4 border bg-light">
              <div class="row py-3">
              <div class="col-md-4"><b>Tất cả sản phẩm</b></div>
                  <div class="col-md-8">
                       <div class="input-group mb-1">
                  <input type="text" class="form-control" placeholder="Nhập sản phẩm cần tìm" aria-label="Nhap san pham can tim" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i>
</span></div>
                  
                  </div>
              
              
              </div>
                 <div><a href = "themsanpham_xuly.php" class = "btn btn-success">Thêm sản phẩm</a></br></div>
              <div class="row py-3 border-1 bg-secondary">
                 <div class="col-1 border-1"><b>STT</b></div>
            <div class="col-2 border-1"><b>Sản Phẩm</b></div>
                <div class="col-2 border-1"><b>Doanh số </b></div>
                     <div class="col-1 border-1 "><b>Giá  </b></div>
                    <div class="col-2 border-1"><b>Ngành hàng </b> </div>
                    <div class="col-2 border-1"><b>Chất lượng nội dung </b></div>
                    <div class="col-2 border-1"><b>Thao tác </b></div>
                  
              </div>
              
                    <div class="row py-3 border">
                       <?php 
			   $sql = "SELECT * FROM products";
			   $qr = mysqli_query($conn,$sql);
			   while($rows = mysqli_fetch_assoc($qr)){
			?>  
       <div class="col-1 border-1" name="id"><?php echo $rows["id"];?></div> 
                 <div class="col-2 border-1" name="">
                     <div class="row"> 
                         <div class="col-6" name="img"><?php echo $rows["img"];?></div>
                         <div class="col-6" name="price"><?php echo $rows["name"];?></div>
                     
                     </div>
                        
                        </div>  
                 <div class="col-2 border-1" name="soluong"><?php echo $rows["soluong"];?></div>  
                 <div class="col-1 border-1" name="price"><?php echo $rows["price"];?></div>  
                 <div class="col-2 border-1" name="nganhhang"><?php echo $rows["nganhhang"];?></div>  
                     <div class="col-2 border-1" name="mota"><?php echo $rows["mota"];?></div>  
                     <div class="col-2 border-1">
                        <div class="row">
                          <div class="col-6">
                              <div class="sua">
                              <a href="suasp.php?id=<?php echo $rows["id"];?>">Sửa</a></div></div>
                            <div class="col-6"><a href="xoasp.php?id=<?php echo $rows["id"];?>">Xóa</a></div>
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
