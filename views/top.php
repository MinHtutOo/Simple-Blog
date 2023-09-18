<?php
session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    
</head>
<body>

<?php
    include_once "sysgem/MySession.php";
    include_once "sysgem/postGen.php";
    include_once "sysgem/member.php";
    include_once "views/nav.php";

?>