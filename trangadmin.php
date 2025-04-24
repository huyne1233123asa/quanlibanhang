<?php
require('config.php');
require('admin.php');
?>
        <div class="col-md-9">
          
          <div class="p-4 border bg-light">
      
              <div class="row-5"><b>
            Danh sach viec can lam</b>
                <div class="row py-3">
                <div class="col-md-3" align="center">
                    <div class="row-cols-1" align="center">0</div>
                     <div class="row-cols-1">cho xac nhan</div>
                    </div>
                    <div class="col-md-3" align="center">
                    <div class="row-cols-1">0</div>
                     <div class="row-cols-1">cho lay hang</div>
                    </div>
                    <div class="col-md-3" align="center">
                    <div class="row-cols-1">0</div>
                     <div class="row-cols-1">da xu ly</div>
                    </div>
                    <div class="col-md-3" align="center">
                    <div class="row-cols-1">0</div>
                     <div class="row-cols-1">don huy</div>
                    </div>
                    
                </div>
                 <div class="row py-3">
                <div class="col-md-3" align="center">
                     <div class="row-cols-1" align="center">0</div>
                     <div class="row-cols-1" align="center">Tra hang/hoan tien</div>
                     </div>
                    <div class="col-md-3" align="center">
                     <div class="row-cols-1" alight="center">0</div>
                     <div class="row-cols-1" alight="center">San pham bi tam khoa</div>
                     </div>
                    <div class="col-md-3" align="center">
                     <div class="row-cols-1" alight="center">0</div>
                     <div class="row-cols-1" alight="center">san pham het hang</div>
                     </div>
                    <div class="col-md-3" align="center"> 
                     <div class="row-cols-1" alight="center">0</div>
                     <div class="row-cols-1" alight="center">Chuong trinh khuyen mai</div>
                     </div>
                    
                </div>
              </div>
              <div class="row-7"><b>
            Phana tich ban hang</b>
               <div class="row py-3">
                  <div class="col-md-6"></div>
                  <div class="col-md-6">
                   <div class="row">
                    <div class="col-md-6">
                       <div class="row-cols-1">123</div>
                        <div class="row-cols-1">123</div>
                       </div>
                         <div class="col-md-6">
                       <div class="row-cols-1">123</div>
                        <div class="row-cols-1">123</div>
                       </div>
                       </div>
                       <div class="row">
                    <div class="col-md-6">
                       <div class="row-cols-1">123</div>
                        <div class="row-cols-1">123</div>
                       </div>
                         <div class="col-md-6">
                       <div class="row-cols-1">123</div>
                        <div class="row-cols-1">123</div>
                       </div>
                       </div>
                   </div>
                  </div>
              
              </div>
            
            
            </div>
          
          
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
