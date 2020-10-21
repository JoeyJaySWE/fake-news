<?php
include __DIR__ ."/functions.php" ;

if(isset($_POST['like'])){
    echo "id from articles: ".$_POST['post_id']. "<br>";
    echo "likes from articles:".$_POST['post_likes']. "<br>";
    addLike((int)$_POST['post_id'], (int)$_POST['post_likes']);
    // header("location:".__DIR__);
}
if(isset($_POST['dislike'])){
    addDislike((int)$_POST['post_id'], (int)$_POST['post_dislikes']);
    // header("location:".__DIR__);
}

?>