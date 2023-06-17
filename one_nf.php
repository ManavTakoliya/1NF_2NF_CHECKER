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
              <h2 class="text-left bg-white">1<sup>st</sup> Normal Form</h2>
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

                        $result = mysqli_query($link,$sql) or die(mysqli_error($link));

                        while($row = mysqli_fetch_assoc($result)){
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

                        $count = -1;
                        while($row = mysqli_fetch_assoc($result)){
                      ?>

                      <tr>
                        <?php

                          for ($x = 0; $x < $len; $x++) {
                       
                            $check = explode(",",$row[$column_name[$x]]);
                            if(count($check)>1){
                              $count+=1;
                              $unmatched_row[$row[$column_name[0]]] = $x;
                            }

                        ?>
                        <td><?php echo $row[$column_name[$x]]; ?></td>
                        <?php }//end of for ?>
                      </tr>
                      
                      <?php 
                        } // end of while
                         echo "$count";
                         $val = "";
                        foreach($unmatched_row as $key => $value) {
                          echo "$key is at $value";
                          $val = $value;
                        }
                        print_r($unmatched_row);
                      ?>
                    </tbody>
                </table>


                <div class="mt-3">
                  <button class="btn btn-success" onclick="myFunction(<?php echo $val; ?>)">CHECK 1<SUP>st</SUP> NF</button>
                </div>

           </div>

         </div>
       </div>
     </div>
        </div>
        
    </div>
          
            <?php 

            require_once("inc/script.php");

            ?>
            
            <script>

              function myFunction() {
                
                 var x = document.getElementById("myTable").getElementsByTagName("td");
                 x[5].style.backgroundColor = "yellow";       
                 alert(x);
              }

              // $(document).ready(function() {




    //           var jArray = <?php echo json_encode($unmatched_row); ?>;
    //           //for(var i=0; i<jArray.length; i++){
    //             alert(jArray[21]);
    //           //}


    //           $('#myTable').DataTable({
    //             "iDisplayLength": 100,
    //             "bFilter": false,
    //             "aaSorting": [
    //               [2, "desc"]
    //             ],
    //             "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
    //               if (aData[0] == "21") {
    //                 $('td', nRow).css('background-color', 'Red');
    //               }
    //              if(jArray[21] == '186490316114'){
    //               alert('hi')
    //             $(row).find('td:eq(2)').css('color', 'blue');
    // }
    //             }
    //           });
    //         })


            </script>
            
</body>
</html>
