<h2>Create a news item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>

	<label for="title">Title</label>
	<input type="text" name="title1" size="31" value=""/><br />

	<label for="text" style=" position:relative; bottom:80px;">Text</label>
	<textarea name="text" rows="10" cols="25" ></textarea><br />

	<input type="submit" style="position:relative; left:75px;" name="submit" value="Create news item" />

</form>