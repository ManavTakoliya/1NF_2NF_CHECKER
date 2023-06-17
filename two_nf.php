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

<body class="hold-transition sidebar-mini">
  
  <div class="wrapper">


  <div class="content-wrapper">
    <section class="content">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 mt-3 mb-3">
              <h2 class="text-left bg-white">2<sup>nd</sup> Normal Form</h2>
            </div>
          </div>

          <div class="row">
           <div class="col-12">
            <!--CARD -->
            <div class="card">

             <!-- CARD header -->
             <div class="card-header bg-danger">
              <h3 class="card-title text-white">TABLE DATA</h3>
               
             </div>

           <!-- CARD BODY -->
           <div class="card-body">

              <table id="myTable" class="table table-bordered">
                    <thead>

                      <?php

                        $column_name = array();

                        require_once("inc/connection.php");

                        extract($_POST);
                
                        $sql = "SHOW COLUMNS FROM $seltabel";
                        $result = mysqli_query($link,$sql);
                        while($row = mysqli_fetch_array($result)){
                          array_push($column_name,$row['Field']);
                           
                      ?>

                      <th id="<?php echo $row['Field']; ?>"><?php echo $row['Field']; ?></th>

                      <?php 
                         } // end of while
                      ?>

                    </thead>
                    <tbody>

                      <?php

                        $len = count($column_name);
                        $sql = "SELECT * FROM $seltabel";
                        $result = mysqli_query($link,$sql) or die(mysqli_error($link));

                        $unmatched_row = array();

                        while($row = mysqli_fetch_assoc($result)){

                      ?>

                      <tr>
                        <?php

                          for ($x = 0; $x < $len; $x++) {

                            $check = explode(" ",$row[$column_name[$x]]);
                            if(count($check)>1){
                              $unmatched_row[$row[$column_name[0]]] = $x;
                            }

                        ?>
                        <td><?php echo $row[$column_name[$x]]; ?></td>
                        <?php }//end of for ?>
                      </tr>
                      
                      <?php 
                        } // end of while

                        print_r($unmatched_row);
                        
                        if(!empty($unmatched_row)){
                          echo '<script>alert("First Remove 1NF")</script>';
                        }

                      ?>

                    </tbody>
                </table>


                <form action="submit/2nf.php" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                  <label for="txtkeys">KEYS</label>
                  <input type="text" class="form-control" id="txtkeys" name="txtkeys" placeholder="Enter Candidate keys">
                  <small id="txtkeyshelp" class="form-text text-muted">Please write candidate key here with correct
                  column name</small>
                </div>
                
                <div class="form-group">
                  <label for="txtfd">FD's</label>
                  <input type="text" class="form-control" id="txtfd" name="txtfd" placeholder="Enter fd's">
                  <small id="txtfdhelp" class="form-text text-muted">Click on button to check wheteher given fd 
                  is partially dependent or not</small>
                </div>

                <input type="hidden" name="txttablename" value="<?php echo $seltabel; ?>">

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>



           </div>

         </div>
       </div>
     </div>
        </div>
        
    </div>
          
            <?php 

            require_once("inc/script.php");

            ?>
            
            
</body>
</html>
