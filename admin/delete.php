<?php


$id = $_GET['id'];

$sql ='DELETE FROM blog_post WHERE id = :id';
$query = $pdo->prepare($sql);
$query->execute(['id'=> $id]);
header('location:posts.php');




?>