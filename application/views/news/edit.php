<?php 
 $uri = $_SERVER["REQUEST_URI"];
$uriArray = explode('/', $uri);
 $id = $uriArray[5];
//echo $id;
?>
<h2>Edit a news item</h2>

<?php echo validation_errors(); 

 echo form_open("news/edit/$id");
 $query = $this->db->get_where("news",array('id'=>$id));
foreach ($query->result() as $row)

 ?>
	<label for="title">Title</label>
	<input type="text" name="title1" size="31" value="<?php  echo $row->title1; ?>"/><br />
	<label for="text" style=" position:relative; bottom:80px;" >Text</label>
	<textarea name="text" rows="10" cols="25"  ><?php  echo $row->text; ?></textarea><br />
	<input type="submit" align="middle" style="position:relative; left:75px;" name="submit" value="update news item" />
</form>