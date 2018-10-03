<?php

session_start();
if(isset($_POST['plm'])){
	foreach($_POST['plm'] as $season=>$qty){
		if($qty!=0){
			$_SESSION['cart'][$season]=$qty;
		}
	}
} 
else if(isset($_POST['delete'])){
	unset($_SESSION['cart'][$_POST['delete']]);
}

if(empty($_SESSION['cart'])){
	header('Location: shop.php');
}
else{
	$_SESSION['price']['s1']=17.00;
	$_SESSION['price']['s2']=22.50;
	$_SESSION['price']['s3']=26.75;

	$_SESSION['s1']='Season1';
	$_SESSION['s2']='Season2';
	$_SESSION['s3']='Season3';

	$_SESSION['total']=0.00;
}
include_once('top-part.php'); ?>

<?php include_once('mid-part.php'); ?>
<section id="cart">
	<h1>Your Cart:</h1> 
	<div>
	<form action='cart.php' method='post'>
	<table>
		<tr>
			<th>Item</th>
			<th>Quantity</th>
			<th>Item Price</th>
			<th>Total Price</th>
			<th>Remove</th>
		</tr>
		<?php 
			foreach($_SESSION['cart'] as $season=>$qty){
				echo "<tr id='sess".$season."'>";
				echo "<td><img src='images/".$season.".jpg'><br>".$_SESSION[$season]."</td>";
				echo "<td>".$qty."</td>";
				echo "<td>$".number_format($_SESSION['price'][$season],2)."</td>";
				echo "<td>$".number_format($_SESSION['price'][$season]*$qty,2)."</td>";
				echo "<td><button name='delete' value=$season>Remove</button></td>";
				echo "</tr>";
				$_SESSION['total']+=$_SESSION['price'][$season]*$qty;
			}
		?>	
	</table>
	</div>
	</form>
	<p>Total: $
	<input id="total" type="text" name="total" value=<?php echo number_format($_SESSION['total'],2)?> readonly></p>
	<p><button><a href='checkout.php'>Checkout</a></button></p> 
</section>
<?php include_once('end-part.php'); ?>
<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?> 
