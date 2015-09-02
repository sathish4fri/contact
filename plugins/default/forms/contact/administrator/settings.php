<label>Contact</label>
<label>Enter the email that you want to receive feedback</label>
<input type="text" name="email" value="<?php echo $params['settings']->email;?>"/>
<!--<textarea id="gmap" name="gmap" placeholder="Enter Your google map iframe" ><?php //echo $params['settings']->gmap;?></textarea>-->
<input type="submit" class="ossn-admin-button button-dark-blue" value="<?php echo ossn_print('save'); ?>"/>
