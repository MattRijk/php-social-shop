<?php
// Sample SELECT using PDO
$user = 'mattrijk';
$pass = '';
$dbh = new PDO('mysql:host=localhost;dbname=sweets', $user, $pass);
foreach($dbh->query("SELECT name FROM `users` ", PDO::FETCH_ASSOC) as $row) {
    echo implode(':', $row) . PHP_EOL . '<br>';
}
$dbh = NULL;