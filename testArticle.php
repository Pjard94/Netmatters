<?php


require_once 'inc/databaseCall.php';

$stmt = $PDO->prepare("SELECT * FROM news ORDER BY date DESC LIMIT 3");
$stmt->execute();
$news = $stmt->fetchall();


  /*$category =  $news["category"];
    $headImg = $news["article_image"];
    $title = $news["title"];
    $description = $news["description"];
    $profileIMG = $news["profile_image"];
    $writer = $news["writer"];
    $date = $news["date"];
    $link =  $news["link"];*/

?>