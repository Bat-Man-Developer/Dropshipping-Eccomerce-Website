<?php
include('adminlayouts/adminheader.php');
//if user is not logged in then take user to login page
if(!isset($_SESSION['adminlogged_in'])){
  header('location: adminlogin.php');
  exit;
}
else{
  //Check For Product Id
  if(isset($_GET['fldproductid'])){
    $productid = $_GET['fldproductid'];
  }
  else{
    header('location: dashboard.php');
  }
}
include('adminserver/getadmineditproducts.php');
?>
  <body>
    <!--------- Admin-Edit Product-Page ------------>
    <section class="dashboard">
      <div class="dashboardcontainer" id="dashboardcontainer">
        <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
          <p class="text-center" style="color: green"><?php if(isset($_GET['editmessage'])){ echo $_GET['editmessage']; }?></p>
          <p class="text-center" style="color: red"><?php if(isset($_GET['errormessage'])){ echo $_GET['errormessage']; }?></p>
          <h3>Edit Product</h3>
          <hr class="mx-auto">
          <div class="dashboardadmininfo">
            <p>Name: <span><?php if(isset($_SESSION['fldadminname'])){ echo $_SESSION['fldadminname']; }?></span> Position: <span><?php if(isset($_SESSION['fldadminposition'])){ echo $_SESSION['fldadminposition']; }?></span> Department: <span><?php if(isset($_SESSION['fldadmindepartment'])){ echo $_SESSION['fldadmindepartment']; }?></span></p>
          </div>
          <div class="dashboardinfo">
            <div class="admineditproductstablecontainer">
              <!--------- edit product form ------------>
              <div class="max-auto container">
                <div class="admineditproductstable">
                  <?php foreach($editproducts as $product){?>
                  <img src="<?php echo "../../assets/images/". $product['fldproductimage']; ?>">
                  <p><?php echo $product['fldproductname']; ?></p>
                  <p>R<?php echo $product['fldproductprice']; ?></p>
                  <p><?php echo $product['fldproductdescription']; ?></p>
                  <p><?php echo $product['fldproductspecialoffer']; ?></p>
                  <p><?php echo $product['fldproductstock']; ?></p>
                  <p><?php echo $product['fldproductdepartment']; ?></p>
                  <p><?php echo $product['fldproducttype']; ?></p>
                </div>
                <form id="admineditproductsform" method="POST" action="admineditproducts.php" style="text-align: center;">
                  <p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error'];} ?></p>
                  <div class="form-group">
                    <label>Product Name
                      <input type="text" class="form-control" name="fldproductname" value="<?php echo $product['fldproductname']; ?>" required/>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Department
                      <select class="form-select" required name="fldproductdepartment">
                        <option value="Automotive & DIY">Automotive & DIY</option>
                        <option value="Baby & Toddler">Baby & Toddler</option>
                        <option value="Beauty">Beauty</option>
                        <option value="Camping & Outdoor" >Camping & Outdoor</option>
                        <option value="Clothing, Shoes & Accessories">Clothing, Shoes & Accessories</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Gaming & Media">Gaming & Media</option>
                        <option value="Garden, Pool & Patio">Garden, Pool & Patio</option>
                        <option value="Groceries & Household">Groceries & Household</option>
                        <option value="Health & Personal Care">Health & Personal Care</option>
                        <option value="Home & Appliances">Home & Appliances</option>
                        <option value="Liquor">Liquor</option>
                        <option value="Office & Stationery">Office & Stationery</option>
                        <option value="Pets">Pets</option>
                        <option value="Sports & Training">Sports & Training</option>
                        <option value="Toys">Toys</option>
                      </select>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Type
                      <select class="form-select" required name="fldproducttype">
                        <option value="Automotive">Automotive</option>
                        <option value="DIY">DIY</option>
                        <option value="Baby">Baby</option>
                        <option value="Toddler">Toddler</option>
                        <option value="Beauty">Beauty</option>
                        <option value="Camping">Camping</option>
                        <option value="Outdoor">Outdoor</option>
                        <option value="Clothing">Clothing</option>
                        <option value="Shoes">Shoes</option>
                        <option value="Accessories">Accessories</option>
                        <option value="Electronics">Watch</option>
                        <option value="Electronics">Phone</option>
                        <option value="Electronics">Laptop</option>
                        <option value="Electronics">Computer</option>
                        <option value="Electronics">TV</option>
                        <option value="Electronics">Speaker</option>
                        <option value="Gaming">Gaming</option>
                        <option value="Media">Media</option>
                        <option value="Garden">Garden</option>
                        <option value="Pool">Pool</option>
                        <option value="Patio">Patio</option>
                        <option value="Groceries">Groceries</option>
                        <option value="Household">Household</option>
                        <option value="Health">Health</option>
                        <option value="Personal Care">Personal Care</option>
                        <option value="Home">Home</option>
                        <option value="Appliances">Appliances</option>
                        <option value="Liquor">Liquor</option>
                        <option value="Office">Office</option>
                        <option value="Stationery">Stationery</option>
                        <option value="Pets">Pets</option>
                        <option value="Sports">Sports</option>
                        <option value="Training">Training</option>
                        <option value="Toys">Toys</option>
                      </select>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Stock
                      <select class="form-select" required name="fldproductstock">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                      </select>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Description
                      <input type="text" class="form-control" name="fldproductdescription" value="<?php echo $product['fldproductdescription']; ?>" required/>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Price
                      <input type="text" class="form-control" name="fldproductprice" value="<?php echo $product['fldproductprice']; ?>" required/>
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Product Discount
                      <input type="text" class="form-control" name="fldproductspecialoffer" value="<?php echo $product['fldproductspecialoffer']; ?>" required/>
                    </label>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="fldproductid" value="<?php echo $product['fldproductid']; ?>"/>
                    <input class="btn" id="admineditbtn" name="admineditproductsbtn" type="submit" value="Edit" required/>
                    <a id="helpurl" href="Help.php"><br>Need Help?</a>
                  </div>
                  <?php }?>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><br><br><br><br><br><br><br><br><br>	
  </body>
</html>