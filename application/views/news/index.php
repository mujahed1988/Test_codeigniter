
<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title1'] ?></h2>
    <div id="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><a href="<?php echo $news_item['slug'] ?>">View article</a>&nbsp;&nbsp;
<a href="edit/<?php echo $news_item['id'] ?>">Edit article</a>&nbsp;&nbsp;
<a href="/<?php echo $news_item['slug'] ?>">Delete article</a></p>
<?php endforeach ?>
