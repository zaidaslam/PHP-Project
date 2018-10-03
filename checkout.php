<?php

include_once('top-part.php');

session_start();

$error='';

if(isset($_POST['delivery']) && !empty($_POST['delivery'])){
	
	$month = str_pad($_POST['card']['exMonth'], 2, '0', STR_PAD_LEFT); 
	$ccDate = $_POST['card']['exYear'].$month;
	
	$now = Date('Ym');

	if($ccDate<$now){		
		$error = 'Your card has expired';
	}
	else{
		$cal = $_POST['delivery'];
		$_SESSION['delivery'] = $cal;
	
		$_SESSION['grandtotal'] = $_SESSION['total'] + $cal;
	
		foreach($_POST['desc'] as $key => $data){
			$_SESSION['receipt'][$key] = $data;
		}	
		header("Location: confirmation.php");
	}
	
      
}
 ?>

<?php include_once('mid-part.php'); ?> 

		<section id="checkout">
			<h1>Checkout</h1>
			<form  action='checkout.php' method='post' onsubmit="checkoutvalidate(this)">
			<table>
			<tr>
				  <th>First Name:</th>
				  <td>
					<input type='text' id="fname" name='desc[firstname]' value='' placeholder='First Name' required/>
				  </td>
			</tr>

			<tr>
				  <th>Last Name:</th>
				  <td>
					<input id = "lname" type='text' name='desc[lastname]' value='' placeholder='Last Name' required/>
				  </td>
			</tr>
		<tr>
			  <th>Address:</th>
			  <td>
			  <textarea id = "address" type='text' name='desc[address]' value='' placeholder='Address' cols='30' rows='4' required>
			  </textarea>
			  </td>
			</tr>

		
		<tr>
			  <th>Email Address:</th>
			  <td>
			   <input id = "email" type='text' name='desc[email]' value='' placeholder='example@gmail.com' required/>
			  </td>
			</tr>

		<tr>
			  <th>Phone Number:</th>
			  <td>
			   <input id = "pnumber" type='text' name='desc[phone]' value=''placeholder='Phone Number' required/>
			  </td>
			</tr>

		<tr>
			  <th>Credit Card:</th>
			  <td>
			   <input id = "creditcard" type='text' name='card[number]' placeholder='xxxx xxxx xxxx xxxx' value='' required/>
			  </td>
			</tr>

	
		
		<tr>
			  <th>Credit Expiry</th>
			  <td>
			  <select id="exMonth" name='card[exMonth]' required>
              <?php
  
              $months=["Month","January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
              
			  for ( $j=0; $j<=12; $j++ )
           {
               echo "<option value='".($j)."'>".     
              $months[$j].
           "</option>";
           }
		   
            ?>
			</select>
             <select id='exYear' name='card[exYear]' required>
				<?php
  
              $thisyear = Date('Y');
			  echo "<option value=''>Year</option>";
			  for ( $j=$thisyear; $j < $thisyear+10 ; $j++ )
           {
               echo "<option value='".($j)."'>".     
              $j.
           "</option>";
           }
           ?>
		   </select>
			  </td>
			</tr>

		<tr>
			<th></th>
			<td><?php echo "<span id='error'>".$error."</span>"; ?></td>
		</tr>
		
		<tr>
			  <th>Delivery Method:</th>
			  <td>
			  <select name='delivery' required>
               <option value=''>Please Select</option>
               <optgroup label='Regular delivery price'>
               <option value='0.00'>free</option>
               </optgroup>
               <optgroup label='Regular Courier price'>
               <option value='7.00'>$7.00</option>
               </optgroup>
			   <optgroup label='Express Courier price'>
               <option value='10.50'>$10.50</option>
               </optgroup>
               </select>
			  </td>
			</tr>
		
		</table>
		<input id="remember" type='checkbox' name="rememberme" value="false" onclick = "check()">Remember me</input>
		<p id="submit"><input id="button" type='submit' name='submit' value='Submit' /></p>
		</form>
		</section>
		<script>
			document.getElementById('error').style.color = "red";
		</script>
		<?php include_once('end-part.php'); ?> 
		