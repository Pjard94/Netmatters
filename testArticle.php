<?php
$i = 0;

$PDO = new PDO("mysql:host=localhost;dbname=peterjar_netmatters.peter-jardine.netmatters-scs.co.uk", "	
peterjar_contact_admin	", "ABQdTJeV_wny/Z*d");

$stmt = $PDO->prepare("SELECT * FROM news ORDER BY date DESC LIMIT 3");
$stmt->execute();
while($data = $stmt->fetch()) {
    if ($i == 0){
        $category1 =  $data["category"];
        $headImg1 = $data["article_image"];
        $title1 = $data["title"];
        $description1 = $data["description"];
        $profileIMG1 = $data["profile_image"];
        $writer1 = $data["writer"];
        $date1 = $data["date"];
        $link1 =  $data["link"];
    } else if ($i == 1){
        $category2 =  $data["category"];
        $headImg2 = $data["article_image"];
        $title2 = $data["title"];
        $description2 = $data["description"];
        $profileIMG2 = $data["profile_image"];
        $writer2 = $data["writer"];
        $date2 = $data["date"];
        $link2 =  $data["link"];
        } else {
        $category3 =  $data["category"];
        $headImg3 = $data["article_image"];
        $title3 = $data["title"];
        $description3 = $data["description"];
        $profileIMG3 = $data["profile_image"];
        $writer3 = $data["writer"];
        $date3 = $data["date"];
        $link3 =  $data["link"];
        }
    ++$i;
}



?>