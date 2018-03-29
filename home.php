<?php
    session_start();
    $db= mysqli_connect('localhost','root','','login');
    ob_start();
?>
<html>
<head>
<title>Ecommerce Site</title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body bgcolor="71BA08">
<table height="150px" width="1300px"><tr><td colspan="100"><h3 class="ssss"> welcome <?php echo $_SESSION['usernam'] ?></h3>
	<form action="process.php" method="post" align="right">

  	<input type="submit" value="Logout" name="logout" style="width:88px;height:38px;font-weight: bold">
	</form>
<img src="logo1.png" height="200px" width="300px" alt="welcome!!" align="left"> 
<h1><span class="aa"><i>DealB@zar</i></span></h1>

</h3>
</table>
<hr noshade width="1280px" align="left">
<br>
<table align="left" border="0" cellpadding="30" size="25">
<tr><th bgcolor="blue" align="center"><h1>Categories</h1>
<tr><td bgcolor="E1E4E6" align="center"><h2><a href="https://www.flipkart.com/samsung-mobile-store?otracker=nmenu_sub_Electronics_0_Samsung" target="_blank">Electronics</h2></a>
<tr><td bgcolor="E1E4E6" align="center"><h2><a href="https://www.google.co.in/?gfe_rd=cr&dcr=0&ei=j423WpPZF9SmX8TusrAO" target="_blank">Clothes</h2></a>
<tr><td bgcolor="E1E4E6" align="center"><h2><a href="https://www.google.co.in/?gfe_rd=cr&dcr=0&ei=j423WpPZF9SmX8TusrAO" target="_blank">Books</h2></a>
<tr><td bgcolor="E1E4E6" align="center"><h2><a href="https://www.google.co.in/?gfe_rd=cr&dcr=0&ei=j423WpPZF9SmX8TusrAO" target="_blank">Sports</h2></a>
<tr><td bgcolor="E1E4E6" align="center"><h2><a href="https://www.google.co.in/?gfe_rd=cr&dcr=0&ei=j423WpPZF9SmX8TusrAO" target="_blank">Shoes</h2></a>
</table>
<img src="sale4.png" align="center" height="105%" width="80%">
</body>
</html>