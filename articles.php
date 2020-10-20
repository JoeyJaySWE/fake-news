<?php

db();

$stmt = db()->query('SELECT * FROM posts');
while ($article = $stmt->fetch()):

   



?>
<article>
    <h3><?= $article['title'];?></h3>
    <p>
        <?= $article['story'];?>
    </p>
    <hr/>
    <strong><?=$article['author'];?></strong>
    <span class="date"><?=$article['publish_date'];?></span>
</article>
<?php
endwhile;
?>