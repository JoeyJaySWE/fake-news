<?php

try {
    $pdo = new PDO($dir, '', '',  $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$stmt = $pdo->query('SELECT * FROM posts');
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