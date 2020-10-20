<?php
declare(strict_types=1);


function add_user(
    int $id,
    string $username,
    string $password,
    string $name,
    string $date):array{

    $users = [
        [
            'id' => $id,
            'username' => $username,
            'password' => $password,
            'full_name' => $name,
            'date_joined' => $date
        ]
    ];

    return $users;
}


function add_news(
    int $news_id, 
    string $title, 
    string $story, 
    string $author,
    string $news_date
    ): array{

    $news = [
        [
            'id' => $news_id,
            'title' => $title,
            'story' => $story,
            'author' => $author,
            'date' => $news_date
        ]

   ];

   

            return $news;
        }
function db():PDO {
    $dir = 'sqlite:/'. __DIR__ .'/fake-news-db.sqlite3';
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        $pdo = new PDO($dir, '', '',  $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    return $pdo;
}

function signOut(){
    $_SESSION = [];
    session_destroy();
    echo $_SESSION['user'];
    header('location:'.__DIR__);
}


?>
