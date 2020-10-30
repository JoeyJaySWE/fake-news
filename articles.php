<?php
// starts database connection
db();

// fetches all articles from db and list them in order of latest->oldest
$stmt = db()->query('SELECT * FROM posts
                    INNER JOIN users
                    ON posts.author = users.username
                    ORDER BY publish_date DESC');
while ($article = $stmt->fetch()):
?>

<!-- adds a anchor link to each article (W.I.P) -->
<article id="article=<?= $article['post_id'];?>">
    <h3><?= $article['title'];?></h3>
    <p>
        <?= $article['story'];?>
    </p>
    <!-- Adds a horisontal line -->
    <hr/>
    
    <footer>
        <section class="likes">
            <img src="/Assets/icons/like.svg"> Likes
        </section>


        <!-- adds our Author and publush date -->
        <em class="athur">
            Ahtur: 
            <strong><?=$article['full_name'];?></strong>
            <time class="date"><?=$article['publish_date'];?></time>
        </em>

    </footer>
</article>


<?php
endwhile;
?>