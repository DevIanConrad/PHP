<?php
session_start();
?>

<html>
<head><link rel="stylesheet" href="css/style.css"?v=<?php echo time(); ?>
  <meta charset="utf-8">
  	<span style="font-size:32px;color:white;font-weight:bold;font-family:Gill Sans MT;cursor:pointer;float:right;padding-right:15px;padding-top:16px;position:relative" onclick="openNav()">Group Members &#9776</span>

  	<div class="logo">
		<a href="final_2.php"><img src="css/img/logo.png" height="75" width="200"></a>
		</div>

				<div id="myNav" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<div class="overlay-content">
			<ul>
			<li><a href="#">Carl Erwin Gorobao</a></li>
				<li><a href="#">Ian Conrad Baarde</a></li>
				<li><a href="#">Simon Wayne Palma</a></li>
				<li><a href="#">Basteen Ison</a></li>
				<li><a href="#">Iris Faye Raguine</a></li>
				</ul>
			</div>
			</div>
            <title>Shopping Cart</title>
<body>

<?php
    

function title(){
    echo '<div class="shop2">Salsquared Shopping</div>'; //FUNCTION
    }
    title();

?>





<div class="thank">
    THANK YOU FOR USING SALSQUARED SHOPPING
</div>
<div class="please2">
    Please click the continue button to order again</div>
    
<div class="con">
<!--Order again button that destroys the session-->
<form action="final.php">
<input type="submit" style="width: 200px" name="n" value="Continue" onclick="<?php if (isset($_POST['n'])) $_SESSION=array();session_destroy();?>">
</form>
</div>
</div>













<div class="footer">
	<p><b>&copy; Copyright Salsquared Tech., All Rights Reserved 2021</p></b>
	<br>
	<br>
	<br>
</div>



<script type="text/javascript">
	function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>
</body>
</html>