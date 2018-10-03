<?php

session_start();

include_once('top-part.php'); ?>

<?php include_once('mid-part.php'); ?> 

<?php
	$file = fopen("receipt.txt", "a");
	fwrite($file, "");
	fwrite($file, "Receipt\n---------------------\nDetails: \n");
	foreach($_SESSION['receipt'] as $desc => $info){
			fwrite($file, $info."\n");
	}
	fwrite($file, "\nItems: \n");
	foreach($_SESSION['cart'] as $season=>$qty){
		fwrite($file, "Please Like Me ".$_SESSION[$season]." x ".$qty.": $".number_format($_SESSION['price'][$season]*$qty,2)."\n");
	}
	fwrite($file, "\nCosts: \n");
	fwrite($file, "Price: \t\t\t\t\t\t$".number_format($_SESSION['total'],2)."\n");
	fwrite($file, "Delivery Costs: \t\t\t$".number_format($_SESSION['delivery'],2)."\n");
	fwrite($file, "Grand Total: \t\t\t\t$".number_format($_SESSION['grandtotal'],2)."\n\n");
	fclose($file);
?>
<div id = 'confirmation'>
<div id = 'receipt'>
<h1>Congratulations on your purchase!</h1>
<h3>Here is your receipt:</h3>
<?php
echo "Receipt<br>---------------------<br>Details: <br>";
foreach($_SESSION['receipt'] as $desc => $info){
			echo $info."<br>";
}
echo "<br>Items: <br>";
foreach($_SESSION['cart'] as $season=>$qty){
		echo "Please Like Me ".$_SESSION[$season]." x ".$qty.": $".number_format($_SESSION['price'][$season]*$qty,2)."<br>";
}
echo "<br>Costs: <br>";
echo "Price: $".number_format($_SESSION['total'],2)."<br>";
echo "Delivery Costs: $".number_format($_SESSION['delivery'],2)."<br>";
echo "Grand Total: $".number_format($_SESSION['grandtotal'],2)."<br><br>"
?>
</div>
</div>
<?php session_unset();?>
<?php include_once('end-part.php'); ?> 
