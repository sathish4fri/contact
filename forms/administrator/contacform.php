<?php
$settings = new OssnComponents;
$settings = $settings->getComSettings('contact');


?>
<div>
<?php //if ($settings->gmap){
		//echo '<iframe src='.$settings->gmap.' width="100%" height="250" frameborder="0" style="border:0"></iframe>';
	//}else{
?>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248756.0436943909!2d80.20895354999999!3d13.047560400000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C+Tamil+Nadu!5e0!3m2!1sen!2sin!4v1425016869185" width="100%" height="250" frameborder="0" style="border:0"></iframe>
<?php// } ?>
</div>
<div class="basic-grey"	>
			    <h1>Contact Form
        <span>Please fill all the texts in the fields</span>
    </h1>
    <label>
        <span>Your Name :</span>
        <input id="name" type="text" name="name" placeholder="Your Full Name" />
    </label>
   
    <label>
        <span>Your Email :</span>
        <input id="email" type="email" name="email" placeholder="Valid Email Address" />
    </label>
   
    <label>
        <span>Message :</span>
        <textarea id="message" name="message" placeholder="Your Message to Us"></textarea>
    </label>
       <label>
        <span>&nbsp;</span>
        <input type="submit" class="button" value="<?php echo ossn_print('save'); ?>" />
    </label>    
<!--<input type="submit" class="ossn-admin-button button-dark-blue" value="<?php echo ossn_print('save'); ?>"/>-->

</div>
