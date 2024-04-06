<?php
include('layouts/header.php');
include('server/getcontact.php');
?>
  </div>
</div>
<!------------- Website Messages----------->
<p style="color: red; font-weight: bold; text-align: center" class="text-center"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
<p style="color: green" class="text-center"><?php if(isset($_GET['message'])){ echo $_GET['message']; }?></p>
<!---------Contact-Page--------->
<section>
    <h3>Contact Us</h3>
    <hr class="mx-auto">
    <div class="contactpagecontainer">
      <div class="googlemapscontainer">
        <iframe class="googlemaps" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=4708%20Mhunti%20Street%20Johannesburg+(MR)&amp;t=p&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
        </iframe>
        <a href='https://www.easybooking.eu/'>Fetching Google Maps...</a> 
        <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=5c8a8dd1d18f664e1a4704f0a64fff04109a8dd8'>
        </script>
      </div>
      <div class="contactpage">
        <p>Send Any Queries And We Will be In Touch Soon.</p><br>
        <form  action="contact.php" method="POST" enctype="multipart/form-data">
          Your name:<br>
          <input name="fldname" type="text" value="" size="30" required/><br>
          Your email:<br>
          <input name="fldemail" type="text" value="" size="30" required/><br>
          Your message:<br>
          <textarea name="fldmessage" rows="7" cols="30"></textarea><br>
          <input class="submitcontactformbtn" type="submit" value="Send Messsage" name="submitcontactformbtn"/>
        </form><br><br>
      </div>
    </div>
  </div>
</section>
<?php
include('layouts/footer.php');
?>