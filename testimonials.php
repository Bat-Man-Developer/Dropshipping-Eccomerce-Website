<?php

include('layouts/header.php');

//if user is not logged in then take user to login page
if(!isset($_SESSION['logged_in'])){
  header('location: testimonialslogin.php');
  exit;
}

include('server/gettestimonials.php');

?>
  </div>
</div>

<!--------- Testimonials-page ------------>
    <section class="my-5 py-5" id="account-page">
    	<div class="container my-5 py-3">
        <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
				  <p class="text-center" style="color: green"><?php if(isset($_GET['testimonialsmessage'])){ echo $_GET['testimonialsmessage']; }?></p>
					<p class="text-center" style="color: red"><?php if(isset($_GET['errormessage'])){ echo $_GET['errormessage']; }?></p>
        </div>
			</div>

      <!--------- Display User Comments --------->
      <div id="testimonials" class="testimonials container my-5 py-3">
        <div class="container mt-2">
          <h2 class="font-weight-bold text-center" style="color: grey">Testimonials & Suggestions...</h2>
          <hr class="mx-auto">
        </div>
        <table class="row">
          <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Comments</th>
            <th>Comments Date</th>
          </tr>

          <?php while($row = $testimonials->fetch_assoc()) { ?>

          <tr>
            <td>
              <span><?php echo $row['fldtestimonialsemail']; ?></span>
            </td>
            <td>
              <span>Member</span>
            </td>
            <td>
              <span><?php echo $row['fldtestimonialscomment']; ?></span>
            </td>
            <td>
              <span><?php echo $row['fldtestimonialsdate']; ?></span>
            </td>
          </tr>

          <?php }?>

        </table>
        <div id="testimonialsbottomspace"></div>
      </div>
    </section>

    <div class="row">
      <form id="testimonialsform" method="POST" action="testimonials.php">
        <div class="form-group">
          <label>Comments
            <input type="text" class="form-control" id="testimonialscomment" name="fldtestimonialscomment" placeholder="write comment here..." required/>
          </label>
        </div>
        <div class="form-group">
          <button type="submit" name="testimonialscommentbtn" class="btn" style="background-color: grey" required>Submit Comment..</button>
        </div>
      </form>
    </div>
  </body>
</html>