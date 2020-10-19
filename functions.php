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
    string $news_date, 
    string $author
    ): array{

    $news = [
        [
            'id' => $news_id,
            'title' => $title,
            'story' => $story,
            'date' => $news_date,
            'author' => $author
        ]

   ];

            return $news;
        }


?>