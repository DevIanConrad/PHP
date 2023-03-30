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
session_start();
$_SESSION['totalpurch']; //takes hold of $total value from final.php


?>









<?php
    

function title(){
    echo '<div class="shop2">Salsquared Shopping</div>'; //FUNCTION
    }
    title();

?>

<div class="deduction">

<div class="dedu"><center>Bill deduction</div></center>
<hr align="center" width="45%">
<hr align="center" width="80%">

<table class="table3" width="60%" border="0" cellspacing="50" style="font-size:20px; color:rgb(228, 177, 111);">

<form action="final_2.php" method="post">
<tr>
<td><b>TOTAL PURCHASED COST: </b><br>
<td><?=sprintf("%.2f", $_SESSION['totalpurch']);?></td></tr>
<td>Bill: <input type="number" placeholder="Enter your bill" name="bill"><!--Takes the users bill and deductions are applied base on what is the total purchased-->
</tr></table>

<div class="submitbtn">
<input  type="submit" name="submit" value="Submit">  
</div>
</form>

<?php  

    //Determine whether the bill is enough or too low for the $total value 
    if(isset($_POST['submit'])) {

    if($_POST['bill'] >= $_SESSION['totalpurch'])
    {  
        $change = $_POST['bill'] - $_SESSION['totalpurch'];     
        $displaychange = $change;  //Accepts the bill then display 

}  
    else if($_POST['bill'] < $_SESSION['totalpurch']){
        echo '<script>alert("Insufficient balance")</script>';//Declines the bill then display a msgbox
    }
    
}

$displaybill = $_POST['bill'];
?>  


</div>
<!--Displays the change-->
<div class="change">
<table class="table4" width="30%" border="0" cellspacing="10" style="font-size:20px; color:rgb(228, 177, 111)";>
<tr><td><p>Received Bill:</p>
<td><?php echo $displaybill;?>
<tr><td><p>Your change:</p>
<td><?php echo $change;?>	
</td>
</table>
<hr align ="center" width="30%">



</form>


<!--Order again button that destroys the final.php session-->
<form action="final_3.php">
<input type="submit" name="n" value="Order Again">
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