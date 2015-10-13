<?php ob_start('ob_gzhandler'); ?> 
<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<?php
if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
echo('<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>');
?>

    <title>Recruiting Station</title>

    <meta name="description" content="I WANT YOU, to hire this exceptionally talented web developer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico"> 

    <meta property="og:image" content="">
    <meta property="og:title" content="Recruiting Station">
    <meta property="og:url" content="domain.com">
    <meta property="og:description" content="I WANT YOU, to hire this exceptionally talented web developer">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="src/core.js"></script>

  </head>
    <body>

        <img src="img/blur.png" id="bg" alt="" draggable="false">

          <a href="cv.pdf" target="_blank" class="btn white">résumé</a>

        <div id="container">
          <img src="img/uncle.png" alt="" draggable="false"/>
        </div>

       <h1>i want <span>you</span></h1> 
       <h2>to hire this exceptionally talented web developer</h2>

    </body>
</html>