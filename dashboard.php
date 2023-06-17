<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php require_once("inc/header_part.php");?>  

</head>

<body>
  
  <div class="wrapper">

  <div class="content-wrapper">
    <section class="content">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 mt-3 mb-3">
              <h2 class="text-center bg-white">DASHBOARD</h2>
            </div>
          </div>

          <div class="row">

           <div class="col-12">
            <!--CARD -->
            <div class="card">

             <!-- CARD header -->
             <div class="card-header bg-danger">
              <h3 class="card-title text-white">NORMALIZATION</h3>
              
             </div>

           <!-- CARD BODY -->
           <div class="card-body">

            <div class="row">
              
             <div class="col-lg-4 col-sm-6 col-12"> 
              <div class="card bg-warning">
                <div class="card-content">
                  <div class="card-body">

                    <div class="media d-flex">
                      <div class="media-body text-right">
                        <h3>1 NORMAL FORM</h3>
                        <span></span>
                      </div>
                    </div>


                  <form method="POST" action="one_nf.php" enctype="multipart/form-data">

                   <div class="input-group mt-2">
                      <select id="seltabel" name="seltabel" class="form-control">
                        <option value="0">SELECT TABLE</option>
                        <?php
                          require_once("inc/connection.php");
                          $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema= 'crud'";
                          $result = mysqli_query($link,$sql) or die(mysqli_error($link));
                          
                          while($row = mysqli_fetch_assoc($result))
                          {
                        ?>
                        <option value=<?php echo $row['table_name'] ?>><?php echo $row['table_name'] ?> </option>

                         <?php

                         } // end of while 

                        ?>

                      </select>     

                      <span class="input-group-btn">
                        <button class="btn btn-danger" type="submit" tabindex="-1"><span class="glyphicon glyphicon-remove" aria-hidden="true">GO</span></button>
                      </span>

                    </div>

                  </form>

                  </div>
                </div>
              </div>
            </div>

             <div class="col-lg-4 col-sm-6 col-12"> 
              <div class="card bg-warning">
                <div class="card-content">
                  <div class="card-body">

                    <div class="media d-flex">
                      <div class="media-body text-right">
                        <h3>2 NORMAL FORM</h3>
                        <span></span>
                      </div>
                    </div>


                  <form method="POST" action="two_nf.php" enctype="multipart/form-data">

                   <div class="input-group mt-2">
                      <select id="seltabel" name="seltabel" class="form-control">
                        <option value="0">SELECT TABLE</option>
                        <?php
                          require_once("inc/connection.php");
                          $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema= 'crud'";
                          $result = mysqli_query($link,$sql) or die(mysqli_error($link));
                          
                          while($row = mysqli_fetch_assoc($result))
                          {
                        ?>
                        <option value=<?php echo $row['table_name'] ?>><?php echo $row['table_name'] ?> </option>

                         <?php

                         } // end of while 

                        ?>

                      </select>     

                      <span class="input-group-btn">
                        <button class="btn btn-danger" type="submit" tabindex="-1"><span class="glyphicon glyphicon-remove" aria-hidden="true">GO</span></button>
                      </span>

                    </div>

                  </form>

                  </div>
                </div>
              </div>
            </div>

            </div>
          
           </div>

         </div>
       </div>
     </div>
        </div>
        
            </div>




          

            <?php 
            require_once("inc/message.php");
            require_once("inc/script.php");

            ?>
</body>
</html>
