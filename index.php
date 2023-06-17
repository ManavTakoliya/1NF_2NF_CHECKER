
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php  ?>
  <?php require_once("inc/header_part.php");?>  

</head>

<body class="hold-transition sidebar-mini">
  
  <div class="wrapper">
 

  <div class="content-wrapper">
    <section class="content">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 mt-3 mb-3">
              <h2 class="text-center bg-white"></h2>
            </div>
          </div>

          <div class="row justify-content-center">
           <div class="col-4">

         			<form action="submit/verify_admin.php" method="POST">
							  <!-- Email input -->
							  <div class="form-outline mb-4">
							    <input type="email" id="txtemail" name="txtemail" class="form-control" />
							    <label class="form-label" for="txtemail">Email address</label>
							  </div>

							  <!-- Password input -->
							  <div class="form-outline mb-4">
							    <input type="password" id="txtpassword" name="txtpassword" class="form-control" />
							    <label class="form-label" for="txtpassword">Password</label>
							  </div>

							  <!-- 2 column grid layout for inline styling -->
							  <div class="row mb-4">
							    <div class="col d-flex justify-content-center">
							      <!-- Checkbox -->
							      <div class="form-check">
							        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
							        <label class="form-check-label" for="form2Example31"> Remember me </label>
							      </div>
							    </div>

							    <div class="col">
							      <!-- Simple link -->
							      <a href="#!">Forgot password?</a>
							    </div>
							  </div>

							  <!-- Submit button -->
							  <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

					</form>
       </div>
     </div>
        </div>
        
            </div>
          

            <?php 

            require_once("inc/script.php");

            ?>
</body>
</html>
