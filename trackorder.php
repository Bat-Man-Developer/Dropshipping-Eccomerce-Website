<?php
include('layouts/header.php');
include('server/gettrackorder.php');
//If User Did Not Click Track Order Button
if(!isset($_SESSION['trackorderbtn'])){
  header('location: index.php');
  exit;
}
?>
  </div>
</div>

<!--------- Track Order page ------------>
<section class="my-5 py-5">
	<div class="container text-center mt-3 pt-5">
		<h2 class="form-weight-bold">Track Order</h2>
		<hr class="max-auto">
	</div>
  <?php include('layouts/trackorderbanner.php'); ?>
</section>
<section class="realtimetrackingstatuscontainer">
  <div class="form-check">
    <label class="form-check-label">Processing Order
      <input class="form-check-input" type="checkbox" name="realtimetrackingstatus" id="realtimetrackingstatus1" value="Processing Order" <?php if(isset($type) && $type == 'Processing Order'){ echo 'checked'; } ?>>
    </label>
    
    <label class="form-check-label">Order Ready
      <input class="form-check-input" type="checkbox" name="realtimetrackingstatus" id="realtimetrackingstatus2" value="Order Ready" <?php if(isset($type) && $type == 'Order Ready'){ echo 'checked'; } ?>>
    </label>

    <label class="form-check-label">Shipping Order
      <input class="form-check-input" type="checkbox" name="realtimetrackingstatus" id="realtimetrackingstatus3" value="Shipping Order" <?php if(isset($type) && $type == 'Shipping Order'){ echo 'checked'; } ?>>
    </label>

    <label class="form-check-label">Delivered
      <input class="form-check-input" type="checkbox" name="realtimetrackingstatus" id="realtimetrackingstatus4" value="Delivered" <?php if(isset($type) && $type == 'Delivered'){ echo 'checked'; } ?>>
    </label>
  </div>
</section>

  </body>
</html>