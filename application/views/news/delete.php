<?php 
 $uri = $_SERVER["REQUEST_URI"];
$uriArray = explode('/', $uri);
 $id = $uriArray[5];
//echo $id;
?>
<h2>Delete a news item</h2>

<?php

 echo form_open("news/delete/$id");
 
 $query = $this->db->get_where("news",array('id'=>$id));
foreach ($query->result() as $row)

 ?>
	<label style="color:#FF0000;" for="message">Are You Sure to Delete a News item No. <? echo $id; ?> ? </label>
	<input type="radio" name="ms" value="1"  checked="checked"/><label for="yes">Yes</label>
	<input type="radio" name="ms" value="0" /><label for="no">No</label>
	<input type="submit" align="middle" style="position:relative; left:20px;" name="Send" value="Send" />
</form>
