<p ><a href="./create" style=" width:130px;position:relative;  left:90%;">Add a new article</a></p>
<?php 
 foreach ($news as $news_item): ?>

    <div style="position:relative; bottom:30px;"><h2><?php echo $news_item['title1'] ?></h2>
    <div id="main">
        <?php echo substr($news_item['text'],0,75)."...";  ?>
    </div>
    <p><a href="<?php echo $news_item['slug'] ?>">View article</a>&nbsp;&nbsp;
<a href="edit/<?php echo $news_item['id'] ?>">Edit article</a>&nbsp;&nbsp;
<a href="delete/<?php echo $news_item['id'] ?>">Delete article</a></p></div>
<?php endforeach ?>
<? //-------------------------Show news in table
	$query = $this->db->query("select id,title1,text from news");
$tmpl = array ( 'table_open'  => '<table border="2" cellpadding="2" cellspacing="1" class="mytable">' );
$this->table->set_heading('NO.', 'Title_News', 'News');
$this->table->set_template($tmpl);
echo $this->table->generate($query);
?>