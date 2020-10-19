<?php

declare(strict_types=1);

$title = "Fake News!";

$metaTitle = "Who want to read boring real news any way?";
$metaDesc = "So, you know what's happening the real world?
            So what?! The real world is BORING!
            Take a look at these fictional news instead.
            They may not be accurate, but God knows,
            they are a way more intresting read!";

$metaImg = "http://vengefulscars.com/img/blue-text-card.png";
$metaCard = "summary";
$metaCardAlt = "Fake News, we lie straight to your face!";
$favicon = "img/favicon.png";


$loggedIn = false;

$news = [];
$date = date('m-d-Y');
// -----------[ DB Values ]-----------------

$dir = 'sqlite:/'. __DIR__ .'/fake-news-db.sqlite3';
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

//-----------------------------------------

// debug values
$loggedIn = true;
$user = 'Test1';
