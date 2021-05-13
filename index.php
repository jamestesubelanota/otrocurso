<!DOCTYPE html>

<?php

require_once 'config.php';
$sql = "SELECT * FROM blog_post ORDER BY id DESC";
$query = $pdo->prepare($sql);
$query->execute();
$blogPost = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    

    <div class="container" >
    <!--encabesado-->
    <div class="row">
    <div class="col-md-12">
    <h1>Block de james !</h1>

    </div>
    
    </div>
        <!-- end encabesado-->

        <div class="row">
        <ul>
       
        <li>
        <a href="admin/index.php">admin</a>
        </li>
        </ul>
        <div class="col-md-8" >
        <?php
        foreach ($blogPost as $blogPostIter) {
            echo  '<div class="blog-post" >';
            echo ' <h2>'. $blogPostIter['title'] .'</h2>';
            echo '<p>jan1,05,2021 <a href="">alex</a> </p>';
            echo '<div class="blog-post-image" >  <img src="img/imglo.jpg" alt="" >';
            echo '</div>';
            echo '<div class="blog-post-content">';
            echo $blogPostIter['content'];
            echo '</div>';
            echo  '</div>';
        }
        ?>
      s
        </div>
        <div class="col-md-4" >
        <p>Traduzione del 1914 di H. Rackham
"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."</p>
        </div>
        </div>
       
       <div class="row" >
       <div class="col-md-12" >
       <footer>
       <a href="admin/index.php">  </a>
       </footer>
       
       </div>
       </div>

    
    
     <!--end container-->
    </div>
    <!--end container-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>