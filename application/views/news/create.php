<h2>Create a news item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>

	<label for="title">Title</label>
	<input type="text" name="title1" value=""/><br />

	<label for="text">Text</label>
	<textarea name="text"  ></textarea><br />

	<input type="submit" name="submit" value="Create news item" />

</form>