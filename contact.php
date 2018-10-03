<?php

session_start();

include_once('top-part.php'); ?>

<?php include_once('mid-part.php'); ?> 

		<section id="formdetails">
		<h1>Need a Comedian?</h1>
		<h1>Fill out the form below to make a booking enquiry.</h1>
			<form  action='/~e54061/wp/processing.php' method='post' target="_blank" onsubmit="validate(this)">
			<table>
			<tr>
				  <th>First Name:</th>
				  <td>
					<input type='text' id="fname" name='firstname' value='' placeholder='First Name' required/>
				  </td>
			</tr>

			<tr>
				  <th>Last Name:</th>
				  <td>
					<input id = "lname" type='text' name='lastname' value='' placeholder='Last Name' required/>
				  </td>
			</tr>
		
		<tr>
			  <th>Email Address:</th>
			  <td>
			   <input id = "email" type='text' name='email' value='' placeholder='example@gmail.com' required/>
			  </td>
			</tr>

		<tr>
			  <th>Phone Number:</th>
			  <td>
			   <input id = "pnumber" type='text' name='phone' value=''placeholder='Phone Number' required/>
			  </td>
			</tr>

		<tr>
			  <th>Event Date:</th>
			  <td>
			   <input type='date' name='eventdate' value='' required/>
			  </td>
			</tr>

		<tr>
		
		<tr>
			  <th>Event Time:</th>
			  <td>
			   <input type='time' name='eventtime' value=''/>
			  </td>
			</tr>

		<tr> 
		
		<tr>
			  <th>Flexibility:</th>
			  <td>
			   <input id='eventflexibility' min="0"  max="2" type='range'  value='1' oninput='flex()'/>
			  </td>
			</tr>

		<tr>
		<tr>
			  <th></th>
			  <td>
			   <input id='flexibilitytext' type='text' name='eventflexibility' value='flexible' readonly/>
			  </td>
			</tr>

			  <th>Event Location:</th>
			  <td>
			  <textarea id = "elocation" type='text' name='eventlocation' value='' cols='30' rows='2' placeholder='Event Location'>
			  </textarea>
			  </td>
			</tr>

		<tr>
			  <th>Event Description:</th>
			  <td>
			   <textarea id = "edescription"type='text' name='eventdescription' value=''  cols='30' rows='4'>
		       </textarea>
			  </td>
			</tr>

		<tr>
			  <th>Performance Required:</th>
			  <td>
			   <select name='performance'>

			<option>-None-</option>
			<option>MC</option>
			<option>Comedy Spot</option>
			<option>Full Show</option>
			<option>Other</option>
	 
		   </select>
			  </td>
			</tr>

		</table>
		<p id="submit"><input id="button" type='submit' name='submit' value='Submit' /></p>
		</form>
		</section>

		<?php include_once('end-part.php'); ?> 