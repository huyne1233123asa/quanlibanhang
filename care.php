<?php
require('config.php');
require('admin.php');
ob_start();
?>

        <div class="col-md-9">
          
          <div class="p-4 border bg-light">
              <div class="row py-3">
              <div class="col-md-4"><b>Tất cả phản hồi</b></div>
                <div class="col-md-8">
          
                  
                  </div>
              
              
              </div>
                
              <div class="row py-3 border-1 bg-secondary">
                 <div class="col-1 border-1"><b>STT</b></div>
            <div class="col-2 border-1"><b>Tên</b></div>
                <div class="col-3 border-1"><b>email </b></div>
                     <div class="col-2 border-1 "><b>số điện thoại </b></div>
                    <div class="col-4 border-1"><b>Nội dung phản hồi </b> </div>
                   
              </div>
              
                    <div class="row py-3 border">
                       <?php 
			   $sql = "SELECT * FROM checkcare";
			   $qr = mysqli_query($conn,$sql);
			   while($rows = mysqli_fetch_assoc($qr)){
			?>  
       <div class="col-1 border-1" name="id"><?php echo $rows["id"];?></div> 
                 
                    
                         <div class="col-2 border-1" name="img"><?php echo $rows["name"];?></div>
                         <div class="col-3 border-1" name="price"><?php echo $rows["email"];?></div>
                   
                        
                        
                 <div class="col-2 border-1" name="soluong"><?php echo $rows["sdt"];?></div>  
                 <div class="col-4 border-1" name="price"><?php echo $rows["mota"];?></div>  
               
                   
                   
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
