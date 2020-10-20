<?php
require "../data.php";
require "../functions.php";
session_start();
// sends user back to main site incase they try to manually enter the page
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:'.__DIR__);
}
$tmpPassword=md5($_POST['password']).'j47dl1';
$tmpPassword = strrev($tmpPassword);
$tmpPassword = md5($tmpPassword);
$tmpPassword = strrev($tmpPassword);






db();

$find_user = db()->prepare('SELECT username FROM users WHERE username = :username');
$find_user->execute(['username'=> $_POST['username']]);
$row = $find_user->fetch(PDO::FETCH_ASSOC);
//If match was found
if($row){
    
    $password_check = db()->prepare('SELECT * FROM users WHERE password = :password');
    $password_check->execute(['password'=>$tmpPassword]);
    $row = $password_check->fetch(PDO::FETCH_ASSOC);
    if($row){
        session_start();
        $_SESSION['user'] = $_POST['username'];
        header("location:".__DIR__);
    }
    else
    {
        $_SESSION['error'] = "Password missmatch!";
        echo $_SESSION['error'];
        header('Refresh:5; /../');
    }
} else{


                                





    $create_user = db()->prepare('INSERT INTO users (full_name, username, "password") VALUES
                                                    (:full_name, :username, :password)');
    $create_user->execute([
        'full_name'=> 'Link',
        'username'=> $_POST['username'],
        'password'=> $tmpPassword
        ]);

    session_start();
    $_SESSION['user'] = $_POST['username'];
    header("location:".__DIR__);
}


// $query = 'INSERT INTO posts (id, title, story, author, publish_date) VALUES
//                             (:id, :title, :story, :author, :publish_date)';

// $data = [
//     'id' => $news_id,
//     'title' => $_POST['news_title'],
//     'story' => $_POST['news_story'],
//     'author' => $user,
//     'publish_date' => date('d-m-Y') 
// ];         

// $add_story = $pdo->prepare($query);

// $add_story->execute($data);
