<div id="sliderFeaturette"></div>
<div id="form-container">
	<h1>Contact Us</h1>
	<h2>Things and stuff</h2>
	<?php echo validation_errors(); ?>
	<form id="contact-form" name="contact-form" method="post" action="<?php echo site_url('contact'); ?>">
		<table width="100%" border="0" cellspacing="0" cellpadding="5">
			<tr>
			  <td width="15%"><label for="name">Name</label></td>
			  <td width="70%"><input type="text" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="<?php echo set_value('name'); ?>" /></td>
			  <td width="15%" id="errOffset">&nbsp;</td>
			</tr>
			<tr>
			  <td><label for="email">Email</label></td>
			  <td><input type="email" class="validate[required,custom[email]]" name="email" id="email" value="<?php echo set_value('email'); ?>" /></td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td><label for="subject">Subject</label></td>
			  <td>
			  	<select name="subject" id="subject">
					<?php
					if(set_value('subject')===''){
						echo "<option value='' selected='selected'> - Choose -</option>";
					}
					else{
						echo "<option value=''> - Choose -</option>";
					}
					
					foreach ($options as $option) {
						if($option === set_value('subject')){
							echo "<option value='$option' selected='selected'>$option</option>";
						}
						else{
							echo "<option value='$option'>$option</option>";
						}
					}
					?>
			  	</select>
			  </td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td valign="top"><label for="message">Message</label></td>
			  <td><textarea name="message" id="message" class="validate[required]" cols="35" rows="5"><?php echo set_value('message'); ?></textarea></td>
			  <td valign="top">&nbsp;</td>
			</tr>
			<tr>
			  <td valign="top">&nbsp;</td>
			  <td colspan="2"><input type="submit" name="button" id="button" value="Submit" />
			  <input type="reset" name="button2" id="button2" value="Reset" />
				<img id="loading" src="img/ajax-load.gif" width="16" height="16" alt="loading" /></td>
			</tr>
 		</table>
	</form>
</div>