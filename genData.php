<?php
require_once "sysgem/postGen.php";
$data = file_get_contents("assets/genData.json");
$posts =json_decode($data,true);
$types = [1,2];
$i = 0;
$writers = ["Waiferkolar", "Bob", "Bobby", "Chris"];
$imglinks = ["1694958605_Screenshot (111).png", "1694958852_Screenshot (151).png", 
            "1694963812_Screenshot (128).png", "1694963913_Screenshot (108).png"];
$subjects = [1, 2, 3, 4];

foreach($posts as $post) {
    $i++;
    $title = $post["title"];
    $content = $post["content"];
    $type = $types[$i%2];
    $writer = $writers[$i%4];
    $imglink = $imglinks[$i%4];
    $subject = $subjects[$i%4];

    insertPost($title,$type,$writer,$content,$imglink,$subject);
}
?>