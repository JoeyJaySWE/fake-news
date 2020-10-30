<?php
require "../data.php";
require "../functions.php";
session_start();


// sends user back to main site incase they try to manually enter the page
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location: /index.php');
}
db();





/*---------- Checks if we pressed any of the like/dislike buttons -----------------*/


// checks if we hit the like button of a post
if(isset($_POST['like'])){

    addLike((int)$_POST['post_id'], $_POST['post_likes']);
    header("location: /index.php#article=".$_POST['post_id']);
}

// checks if we hit the dislike button fo a post
if(isset($_POST['dislike'])){
    $post_id = $_POST['post_id']; 
    addDislike($post_id, (int)$_POST['post_dislikes']);
    header("location: /index.php#article=".$post_id."");
    
  

}
else{
    $_SESSION['errors'] = "Unkown request";
    header("location: /index.php#errors");
}

/*-----------------------------------------------------------------------------------*/