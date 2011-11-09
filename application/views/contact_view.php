<div id="sliderFeaturette"></div>
<div id="form-container">
	<h1>Contact Us</h1>
	<h2>Things and stuff</h2>
	
	<form id="contact-form" name="contact-form" method="post" action="submit.php">
		<table width="100%" border="0" cellspacing="0" cellpadding="5">
			<tr>
			  <td width="15%"><label for="name">Name</label></td>
			  <td width="70%"><input type="text" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="" /></td>
			  <td width="15%" id="errOffset">&nbsp;</td>
			</tr>
			<tr>
			  <td><label for="email">Email</label></td>
			  <td><input type="text" class="validate[required,custom[email]]" name="email" id="email" value="" /></td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td><label for="subject">Subject</label></td>
			  <td><select name="subject" id="subject">
			    <option value="" selected="selected"> - Choose -</option>
			    <option value="Question">Question</option>
			    <option value="Business proposal">Business proposal</option>
			    <option value="Advertisement">Advertising</option>
			    <option value="Complaint">Complaint</option>
			  </select>          </td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td valign="top"><label for="message">Message</label></td>
			  <td><textarea name="message" id="message" class="validate[required]" cols="35" rows="5"></textarea></td>
			  <td valign="top">&nbsp;</td>
			</tr>
			<tr>
			  <td><label for="captcha"></label></td>
			  <td><input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" /></td>
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