<?php
include __DIR__ . "/data.php";
include __DIR__ . "/functions.php";
include __DIR__ . "/header.php";

session_start();

?> 
        <h1><img src="/Assets/icons/fake_news_medium.svg" alt="FAKE NEWS!"></h1>
        <p>
            <em>"Now I can't even read the news today, it remind me of yesterday..."</em>
            The Swedish artist Sanna Nilsen sang this words in her song "Empty Room", and I agree with her.
            Have you ever read the news and felt "Woho! All is awsome in the world!" I mean, the news are sad, boring and often unintresting.
            FAKE NEWS! The one site where you can read about fake news without needing to worry about if it's fact check, we already done that part,
            and we are pretty sure it's all bogus. That said, enjoy a more intresting read!
        </p>
        <h2>News Feed</h2>
        <?php

include __DIR__ . "/articles.php";

if(isset($_SESSION['user']) && $_SESSION['user'] != ''){
    
    include __DIR__ . "/add-news.php";
    
}
else{
    include __DIR__ . "/join.php";
}


include __DIR__ . "/footer.php";
?>
