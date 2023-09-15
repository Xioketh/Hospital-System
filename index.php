<?php include 'header.php';?>


<div class="fulbg m-3">
         
</div>
           


      <div class="about">
         <div class="container_width">
            <div class="row d_flex">
                   <div class="col-md-5">
                  <div class="titlepage text_align_left">
                     <h2>Home</h2>
                     <form class="m-3" method="POST" action="saveData.php">
                     <h3>Enter Patient Data</h3>
                        <div class="mb-3 mt-3">
                           <input type="text" class="form-control" name="name" placeholder="P Name">
                        </div>
                        <div class="mb-3">
                           <input type="text" class="form-control" name="address" placeholder="Address">
                        </div>

                        <div class="mb-3">
                           <input type="text" class="form-control" name="tel" placeholder="Tel No">
                        </div>

                        <div class="mb-3">
                           <textarea class="form-control" name="description" placeholder="Description"></textarea>
                        </div>

                        <div class="ms-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        
                     </form>
                  </div>
               </div>
               <div class="col-2 mt-5 border-left border-5 border-gray">
               <form action="seeData.php" method="GET">
                     <button type="submit" class="btn btn-success">Patients Data</button>
               </form>
               </div>


               <div class="col-md-5">
                  <div class="about_img text_align_center">
                     <figure><img src="images/hospi.png" alt="#"/></figure>
                  </div>
               </div>
              
            </div>
         </div>
      </div>

    


   <?php include 'footer.php';?>
