<?php
	$page_title = "Donate";
	$page_banner="donateBanner";
	$page_header="";
	include('includes/header.html');
	?>

	<div class="donate">
		<div class="container">
			<p class="donate-paragraph">
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
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" style="width: 40%;" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<!-- <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" style="width: 100%;"> -->
				</form>
			</div>
		</div>
	</div>

	<!--footer-->
	<?php
	include('includes/footer.html');
	?>