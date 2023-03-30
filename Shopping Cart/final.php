<?php
//start session
session_start();
//initialize session shopping cart
if (!isset($_SESSION['cart']))
{
 $_SESSION['cart']=array();
}
//look for catalog file
$catalogFile="catalog.txt";
//file is available, extract data from it
//place into $CATALOG array, with SKU as key
if (file_exists($catalogFile))
{
 $data=file($catalogFile);
 foreach ($data as $line)
 {
 $lineArray=explode(':', $line);
 $sku=trim($lineArray[0]);
 $CATALOG[$sku]['desc']=trim($lineArray[1]);
 $CATALOG[$sku]['price']=trim($lineArray[2]);
 }
}
else
{
 die("Could not find catalog file");
}
//check to see if the form has been submitted
//and which submit button was clicked
//if this is an add operation
//add to already existing quantities in shopping cart

if ($_POST['add'])
{
 foreach ($_POST['a_qty'] as $k=>$v)
 {
 //if the value is 0 or negative
 //don't bother changing the cart
 if ($v>0)
 {
 $_SESSION['cart'][$k]=$_SESSION['cart'][$k] + $v;
 }
 }
}
//if this is an update operation
//replace quantites in shopping cart with values entered
else if ($_POST['update'])
{
 foreach ($_POST['u_qty'] as $k=>$v)
 {
 //if the value is empty, 0 or negative
 //don't bother changing the cart
 if ($v!=" " && $v>=0)
 {
 $_SESSION['cart'][$k]=$v;
 }
 }
}
//if this is clear operation//reset the session and the cart
//destroy all session data
else if ($_POST['clear'])
{
 $_SESSION=array();
 
 }
?>







<html>
<head><link rel="stylesheet" href="css/style.css"?v=<?php echo time(); ?>
  <meta charset="utf-8">
  	<span style="font-size:32px;color:white;font-weight:bold;
	font-family:Gill Sans MT;cursor:pointer;float:right;
	padding-right:15px;padding-top:16px;
	position:relative;" onclick="openNav()">Creator &#9776</span>

  	<div class="logo">
		<a href="final.php"><img src="css/img/logo.png" height="75" width="200"></a>
		</div>

		<div id="myNav" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<div class="overlay-content">
			<ul>
			<li><a href="#">Ian Conrad Baarde</a></li>
				</ul>
			</div>
			</div>
            <title>Shopping Cart</title>
<body>





<form action="<?$_SERVER['PHP_SELF']?>" method="post">
<div class="cat">

<?php
    

function title(){
    echo '<div class="shop">Salsquared Shopping</div>'; //FUNCTION
    }
    title();

?>



<div class="cato">Catalog</div>

<div class="please">
	Please add items from the list below to your shopping cart.
</div>
<hr align="center" width="80%">
<form action="<?$_SERVER['PHP_SELF']?>" method="post">

<table  class="table" width="130%" border="0" cellspacing="50" style="font-size:20px; color:rgb(228, 177, 111);" >
</div>
<?php
//print items from the catalog for selection
foreach ($CATALOG as $k=>$v)
{
 echo "<tr><td colspan=2>";
 echo "<b>".$v['desc']."</b>";
 echo "</td></tr>\n";
 echo "<tr><td>";
 echo "Price per unit: ".$CATALOG[$k]['price'];
 echo "</td><td>Quantity: ";
 echo "<input size=30 type=text name=\"a_qty[" .$k. "]\">";
 echo "</td></tr>\n";
}
?>

	
</tr>
</table>
<input type="submit" name="add" value="Add items to cart">
</div></div>
</div>



<hr align="center" width="30%">
<hr align="center" width="50%">

<div class="shoppingcart">
<h2><center>Shopping cart</h2></center>
<div class="note">
	Note: You cannot update only one listed item or the other items will be deleted. Thank you!<br><br>
	You can add other items from the catalog.
</div> 
<table class="table2" width="85%" border="0" cellspacing="10" style="font-size:20px; color:rgb(228, 177, 111)";>
<?php
//initialize a variable to hold total cost
$total=0;
//check the shopping cart
//if it contains values
//look up the SKUs in the $CATALOG array
//get the cost and calculate subtotals and totals
if (is_array($_SESSION['cart']))
{
 foreach ($_SESSION['cart'] as $k=>$v)
 {
 //only display items that have been selected
 //that is, quantities>0
 if ($v>0)
 {
 $subtotal=$v*$CATALOG[$k]['price'];
 $total+=$subtotal;
 echo '<div class="cart">';
 echo"<tr><td>";
 echo"<b>$v unit(s) of " . $CATALOG[$k]['desc']."</b>";
 echo"</td><td>"; echo "New quantity: <input size=4 type=number name=\"u_qty[" . $k . "]\">";
 echo "</td></tr>\n";
 echo "<tr><td>";
 echo "Price per unit: " . $CATALOG[$k]['price'];
 echo "</td><td>";
 echo "Sub-total: " . sprintf("%0.2f", $subtotal);
 echo "</td></tr>\n";
 echo '</div>';
 }
 }
 }
?>








<tr>
<td><b>TOTAL</b></td>
<td><b><?=sprintf("%.2f", $total)?></b></td>
</tr>
</table>
<input type="submit" name="update" value="Update Cart">
<input type="submit" name="clear" value="Clear Cart"><br>

<!--Finalize button-->
<form action="final_2.php">
<button class="button btnfinal" type="submit" formaction="final_2.php">Finalize</button>

<?php
$_SESSION['totalpurch'] = $total; //redirect to final_2.php/Bill Deduction page
?>



</form>
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