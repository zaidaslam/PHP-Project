<?php

session_start();

include_once('top-part.php'); ?>

<?php include_once('mid-part.php'); ?> 

		<div id="shop">
		<section id="s1">
			<a href="https://play.google.com/store/search?q=Please%20like%20Me%20season1&c=movies" target='_blank'><img id="purchaseGoogleplays1" src="images/googleplay.png" alt="googleplay"></a>
			<a href="https://itunes.apple.com/au/tv-season/please-like-me-season-1/id616877503" target='_blank'><img id="purchaseituness1" src="images/itunes.png" alt="itunes"></a>
			<img id = "imgs1" src="images/s1.jpg">
			<div class="season">
			<h1>Season 1</h1>
			<?php
			echo "<p>Price: $17.00</p>";
			?>
			<form  action='cart.php' method='post'>
			Quantity (between 0 and 5):
			<input id = "qtys1" type="number" name="plm[s1]" min="0" max="5" oninput='unitPrice()'>
			<label>Price :</label><input id="unitprice1" type="text" name="price[s1]" readonly>
			<details>
			<summary>Summary</summary>
			<div>Josh’s life is turned upside down when he’s dumped by his girlfriend,
			finds a weird new boyfriend and has to move back in with his mother after she overdoses on painkillers. 
			Inspired by the award-winning standup comedy of Josh Thomas, PLEASE LIKE ME is a charming and bittersweet comedy/drama about cavoodles,
			custard tarts, boyfriends and girlfriends.
			Mostly though, it’s about growing up quickly and realizing that your parents are not heroes, 
			but big dopes with no idea what’s going on – just like you.</div>
			</details>
			</div>
        </section>

        <section id="s2">
		    <a href="https://play.google.com/store/search?q=Please%20like%20Me%20season2&c=movies" target='_blank'><img id="purchaseGoogleplays2" src="images/googleplay.png" alt="googleplay"></a>
			<a href="https://itunes.apple.com/au/tv-season/please-like-me-season-2/id906508728" target='_blank'><img id="purchaseituness2" src="images/itunes.png" alt="itunes"></a>
			<img id = "imgs2" src="images/s2.jpg">
			<div class="season">
			<h1>Season 2</h1>
			<?php
			echo "<p>Price: $22.50</p>";
			?>
			Quantity (between 0 and 5):
			<input id = "qtys2" type="number" name="plm[s2]" min="0" max="5" oninput='unitPrice()'>
			<label>Price :</label><input id="unitprice2" type="text" name="price[s2]" readonly>
			<details>
			<summary>Summary</summary>
			<div>The award-winning Please Like Me, created by Josh Thomas, is back. In Season Two, Josh tries to get through the day without upsetting anyone.
			There's a new dog, a new rabbit and a new baby. There’s no big twist. It isn't Lost.</div>
			</details>
			</div>
        </section>

		<section id="s3">
		    <a href="https://play.google.com/store/search?q=Please%20like%20Me%20season3&c=movies" target='_blank'><img id="purchaseGoogleplays3" src="images/googleplay.png" alt="googleplay"></a>
			<a href="https://itunes.apple.com/au/tv-season/please-like-me-season-3/id1047334958" target='_blank'><img id="purchaseituness3" src="images/itunes.png" alt="itunes"></a>
			<img id = "imgs3" src="images/s3.jpg">
			<div class="season">
			<h1>Season 3</h1>
			<?php
			echo "<p>Price: $26.75</p>";
			?>
			Quantity (between 0 and 5):
			<input id = "qtys3" type="number" name="plm[s3]" min="0" max="5" oninput='unitPrice()'>
			<label>Price :</label><input id="unitprice3" type="text" name="price[s3]" readonly>
			<details>
			<summary>Summary</summary>
			<div>The award-winning comedy/drama Please Like Me, created by Josh Thomas, is back, as an unconventionally astute twentysomething makes sense
			of his friends and family and a cast of intriguing characters competes for screen time with John the Cavoodle.</div>
			</details>
			</div>
        </section>
		<div id = "buy">
		<p>Total Price :
		<input id="totalamount" type="text" name="total" readonly>
		</p>
		<p>Select type: 
		<select name = "media">
			<option>DVD</option>
			<option>Blue Ray</option>
		</select>
		</p>
		<p><input type ="submit" value="Add to cart"></p>
		</div>
		</form>
		</div>

		<?php include_once('end-part.php'); ?> 
