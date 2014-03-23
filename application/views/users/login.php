<h2>Login User's Account</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('users/login') ?>

<table width="50%"><tr>
<td><?php echo form_error('user_name'); ?><label for="user_name">User Name</label></td>
	<td><input type="text" name="user_name" size="50" value="<?php echo set_value('user_name'); ?>"/></td><br />
	</tr>
	<tr><td>
	<?php echo "<span style='color:#ff0000;'>".form_error('password')."</span>"; ?>
	<label for="password" >Password</label></td>
	<td><input type="password" name="password"   size="50" value=""/><br /></td>
	</tr>
	<tr>
<td>&nbsp;</td>
	<td><input type="submit" style="position:relative; left:70px;" name="submit" value="Login" /></td>
	</tr>
</form>
</table>