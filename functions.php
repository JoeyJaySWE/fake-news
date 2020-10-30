<?php
declare(strict_types=1);


// makes our database connection into an esier managebale function
function db():PDO {

    // path to our db file
    $dir = 'sqlite:/'. __DIR__ .'/fake-news-db.sqlite3';
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        $pdo = new PDO($dir, '', '',  $options); //tries to connect to our databse using $path, $username, $passowrd, $options 
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode()); //sends out an error message if it fails to connect.
    }

    return $pdo;
}

// gives us our error message with our query and erro code
function handle_sql_errors($query, $error_message):string {
    $message = "<pre>
                    <br>
                    $query
                    <br>
                </pre>
                <br>
                $error_message";
    return $message;
}
?>
