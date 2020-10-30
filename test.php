<?php

// Tests tuff in a clean enviroment

if(isset($_POST['like'])){

    // addLike((int)$_POST['post_id'], $_POST['post_likes']);
    header("location: /index.php#article=".$_POST['post_id']);
}

// checks if we hit the dislike button fo a post
if(isset($_POST['dislike'])){
    $post_id = $_POST['post_id']; 
    // addDislike($post_id, (int)$_POST['post_dislikes']);
    header("location: /index.php#article=".$post_id."");
    
  

}

?>