<?php
    session_start();
    $db= mysqli_connect('localhost','root','','login');
    ob_start();
?>
<html>
<head>

  <title>Seller</title>
  <link rel="stylesheet" type="text/css" href="sellercss.css">
	
  <style type="text/css">     
    select {
        width:100px;
		height:30px;
		    }
</style>

</head>
<body background="images.jpg">
  <!--<img src="icon.png" height="80px" width="90px" align="right">--><br>
  <pre><h3 class="aaa"> welcome <?php echo $_SESSION['usernam'] ?>     </h3></pre>
<h1 align ="center" ><u><b> Product Details</b></u> </h1>

<form class="form-horizontal">
  <div class="form-group">
    <label for="inputProducttype" class="col-sm-2 control-label"><b>Product Type</b></label>
    <div class="col-sm-10">
     
<select>

  <option value="electronics">Electronics</option>
  <option value="sports">Sports</option>
  <option value="books">Books</option>
  <option value="shoes">Shoes</option>
  <option value="clothes">Clothes</option>
</select>
 

    </div>
  </div>
  <div class="form-group">
    <label for="inputProductName" class="col-sm-2 control-label"><b>Product Name</b></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputProductName" placeholder="Product Name">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputCompany" class="col-sm-2 control-label"><b>Company</b></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputCompany" placeholder="Company">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPrice" class="col-sm-2 control-label"><b>Price</b></label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPrice" placeholder="Price">
    </div>
  </div>
  <div class="form-group">
    <label for="inputQuantity" class="col-sm-2 control-label"><b>Quantity</b></label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputQuantity" placeholder="Quantity">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>

</body>

</html>