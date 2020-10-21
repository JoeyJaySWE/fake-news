<?php

db();

$stmt = db()->query('SELECT * FROM posts
                    INNER JOIN users
                    ON posts.author = users.username');
while ($article = $stmt->fetch()):
?>


<article>
    <h3><?= $article['title'];?></h3>
    <p>
        <?= $article['story'];?>
    </p>
    <hr/>
    <strong><?=$article['full_name'];?></strong>
    <time class="date"><?=$article['publish_date'];?></time>
    <section style="display:flex;">
        <form action="/updates/user-check.php" method="POST">
            <input type="hidden" name="post_id" value="<?= $article['id'];?>">
            <input type="hidden" name="post_likes" value="<?= $article['likes'];?>">
            <button type="submit" name="like" class="likes"><img style="height:32px;width:32px;" src="/Assets/icons/like.svg" alt="like"><?= $article['likes'];?> likes</button>
        </form>
        <form action="/updates/user-check.php" method="POST">
            <input type="hidden" name="post_id" value="<?= $article['id'];?>">
            <input type="hidden" name="post_dislikes" value="<?= $article['dislikes'];?>">
            <button type="submit" name="dislike" class="likes"><img style="height:32px;width:32px;" src="/Assets/icons/dislike.svg" alt="like"><?= $article['dislikes'];?> dislikes</button>
        </form>
    </section>
</article>


<?php
endwhile;
?>