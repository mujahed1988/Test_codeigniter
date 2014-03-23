<h2>Create User's Account</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('users/create') ?>
<?php echo form_error('user_name'); ?>
<table width="50%"><tr>
<td><label for="user_name">User name</label></td>
	<td><input type="text" name="user_name" size="50" value="<?php echo set_value('user_name'); ?>"/></td><br />
	</tr>
	<tr><td>
	<?php echo "<span style='color:#ff0000;'>".form_error('password')."</span>"; ?>
	<label for="password" style=" position:relative; ">Password</label></td>
	<td><input type="password" name="password"   size="50" value=""/><br /></td>
	</tr>
	<tr>
	<td><label for="passconf" style=" position:relative; ">Confirm password</label></td>.
<td><input type="password" name="passconf" size="50" value=""/><br /></td>
</tr>
<tr><td>
<?php //echo form_error('email'); ?>
	<label for="email" style=" position:relative; ">E-mail</label></td>
<td><input type="text" name="email" size="50" value="<?php echo set_value('email'); ?>"/><br /></td>
</tr>
<tr><td>&nbsp;</td>
	<td><input type="submit" style="position:relative; left:75px;" name="submit" value="Sign up" /></td>
	</tr>
</form>
</table>