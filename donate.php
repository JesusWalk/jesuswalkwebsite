<?php
	$page_title = "Donate";
	$page_banner="donateBanner";
	$page_header="";
	include('includes/header.html');
	?>

	<div class="donate">
		<div class="container donate">
			<h1></h1>
			<p>
				We pray that somehow you have been able to witness the way God has used this conference as a vehicle to deliver the message of the gospel to the youth of today. <br/><br/>
				Under the continued guidance of the CCMP we strive to expand our programs and bring new offerings to our students. It is our mission to provide an open and safe 
				refuge for youth to experience God and His Word. We do this through our 4-day dynamic program that includes moving worship, engaging messages, community service,
				and extensive mentoring by small group interaction. In order to meet our mission, we rely on the generosity of individuals and families like you for support. <br/><br/>
				As you may know preparations are well under way for the 2016 Conference which will entail a good amount of expenses for our organization. You may have a received 
				a letter from us asking for a one time monetary donation to support our efforts. From the cost of facility rental all the way down to the pens and paper our students
				use to take notes on, your help is greatly needed. In addition to that, your support is crucial to keeping the registration cost affordable for our youth. <br/><br/>
				If you feel convicted to help us, please click on the "DONATE" button below. In the COMMENTS box, please type in "JW Donation". <br/><br/>
				Thank you in advance and may our God richly bless you.
			</p>
			
			<div align="center">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="6MV57KMMVGXHC">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>
			<h1></h1>
		</div>
	</div>

	<!--Contact-->
	<div class="like">		
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h3 class="title1 ">follow us: jesuswalkyouth</h3>
				<div class="like-info">
				<div class="col-md-3 like-grids">
					<a href="https://www.facebook.com/jesuswalkyouth">
						<img src="images/icon1.png" alt=""/>
					</a>
				</div>
				<div class="col-md-3 like-grids">
					<a href="https://www.instagram.com/jesuswalkyouth/">
						<img src="images/icon3.png" alt=""/>
					</a>
				</div>
				<div class="col-md-3 like-grids">
					<a href="https://twitter.com/jesuswalk">
						<img src="images/icon5.png" alt=""/>
					</a>
				</div>
				<div class="col-md-3 like-grids">
					<a href="https://www.youtube.com/channel/UC8ClHBypqvmXQhC8FcMcf_g">
						<img src="images/icon2.png" alt=""/>
					</a>
				</div>			
				<div class="clearfix"> </div>
			</div>
				</div>
				<div class="col-md-3">
					<h3 class="title2">contact us</h3>
				<div class="contact-right">				
				<form>
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>

				</form>
			</div>
				</div>
			<div class="col-md-1 buttonPosition">
					<button class="btn" type="submit" ><img src="images/submitButton.png" alt=""/></input>
			</div>

			</div>

		</div>
	</div>

	<!--//Contact-->

	<!--footer-->
	<?php
	include('includes/footer.html');
	?>