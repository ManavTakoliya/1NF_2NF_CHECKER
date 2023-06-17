<?php 
if(isset($_REQUEST['msg'])==true)
{   
?>

			<div aria-live="polite" aria-atomic="true">
              <div class="toast pl-2" data-autohide="false" style="position: absolute; bottom: 0; right: 0; margin: 20px;">
                <div class="toast-header">
                  <img src="https://www.citypng.com/public/uploads/preview/blue-notification-bell-icon-png-img-11638985034lcbypudcig.png" class="rounded mr-2" width="20px" height="20px">
                  <strong class="mr-auto">MESSAGE</strong>
                  <small>11 mins ago</small>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                </div>
                <div class="toast-body">
                  <?php echo $_REQUEST['msg']; ?>
                </div>
              </div>
            </div>
          

<?php } //end of if ?>