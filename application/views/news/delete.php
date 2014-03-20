<?php 
 $uri = $_SERVER["REQUEST_URI"];
$uriArray = explode('/', $uri);
 $id = $uriArray[5];
//echo $id;
?>
<h2>Delete a news item</h2>

<?php echo validation_errors(); 

 echo form_open("news/delete/$id");
 $query = $this->db->get_where("news",array('id'=>$id));
foreach ($query->result() as $row)

 ?>
	<label for="message">Are You Sure to Delete a News item No. $id ? </label>
	<input type="button" onclick="" align="middle" style="position:relative; left:75px;" name="no" value="No" />
	<input type="submit" align="middle" style="position:relative; left:75px;" name="yes" value="Yes" />
</form>