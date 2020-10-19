<?php
declare(strict_types=1);

include __DIR__ . "/data.php";
include __DIR__ . "/functions.php";

try {
    $pdo = new PDO($dir, '', '',  $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
$id_finder = $pdo->query('SELECT id FROM posts ORDER BY id DESC LIMIT 1');
$news_id = (int)$id_finder->fetch() + 1;

$query = 'INSERT INTO posts (id, title, story, author, publish_date) VALUES
                            (:id, :title, :story, :author, :publish_date)';

$data = [
    'id' => $news_id,
    'title' => $_POST['news_title'],
    'story' => $_POST['news_story'],
    'author' => $user,
    'publish_date' => date('d-m-Y') 
];         

$add_story = $pdo->prepare($query);

$add_story->execute($data);

            header('location:'. __DIR__ );



?>