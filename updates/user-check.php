<?php
require "../data.php";
require "../functions.php";
session_start();
// sends user back to main site incase they try to manually enter the page
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:'.__DIR__);
}
db();

if(isset($_POST['new_full_name'])){

   
    try{
        
        $update_full_name = db()->prepare('UPDATE users 
                                            SET full_name = :new_full_name 
                                            WHERE username = :username');

            $update_full_name->execute([
                'new_full_name'=> $_POST['new_full_name'],
                'username'=>$_SESSION['user']]);
    }
    catch(PDOException $e){
        $_SESSION['error'] = handle_sql_errors($update_full_name, $e->getMessage());
        header("location:".__DIR__);
    }
    $success = $update_full_name->fetchAll();
    if(sizeof($success) === 0){
        $_SESSION['error'] = "Couldn't find user in Database";
       
        header("location: ".__DIR__);
    }
    $_SESSION['error'] = '';
    header("location: ".__DIR__);
}




if(isset($_POST['like'])){
    echo "id from articles: ".$_POST['post_id']. "<br>";
    echo "likes from articles:".$_POST['post_likes']. "<br>";
    addLike((int)$_POST['post_id'], (int)$_POST['post_likes']);
    header("location:".__DIR__);
}
if(isset($_POST['dislike'])){
    addDislike((int)$_POST['post_id'], (int)$_POST['post_dislikes']);
    header("location:".__DIR__);
}



$tmpPassword=md5($_POST['password']).'j47dl1';
$tmpPassword = strrev($tmpPassword);
$tmpPassword = md5($tmpPassword);
$tmpPassword = strrev($tmpPassword);
$username = trim($_POST['username']);





try{
    $find_user = db()->prepare('SELECT username FROM users WHERE username = :username');
    $find_user->execute(['username'=> $username]);
}
catch(PDOException $e){
    $_SESSION['error'] = handle_sql_errors($update_full_name, $e->getMessage());
    header("location:".__DIR__);
}

$row = $find_user->fetch(PDO::FETCH_ASSOC);
//If match was found
if($row){
    try{
        $password_check = db()->prepare('SELECT * FROM users WHERE password = :password');
        $password_check->execute(['password'=>$tmpPassword]);
    }
    catch(PDOException $e){
        $_SESSION['error'] = handle_sql_errors($update_full_name, $e->getMessage());
        header("location:".__DIR__);
    }
    $row = $password_check->fetch(PDO::FETCH_ASSOC);
    if($row){
        session_start();
        $_SESSION['user'] = $username;
        $_SESSION['error'] = '';
        header("location:".__DIR__);
    }
    else
    {
        $_SESSION['error'] = "Password missmatch!";
        echo $_SESSION['error'];
        header('Refresh:5; /../');
    }
} else{


                                




    try{
        
        $create_user = db()->prepare('INSERT INTO users (full_name, username, "password") VALUES
                                                        (:full_name, :username, :password)');
        $create_user->execute([
            'full_name'=> 'Link',
            'username'=> $username,
            'password'=> $tmpPassword
            ]);

    }
    catch(PDOException $e){
        $_SESSION['error'] = handle_sql_errors($update_full_name, $e->getMessage());
        header("location:".__DIR__);
    }

    session_start();
    $_SESSION['user'] = $username;
    header("location:".__DIR__);
}