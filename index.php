<?php
require_once 'config/config.php';

?>
<!DOCTYPE html>
<html>

<head>
  <title>MovieCamp</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript" async></script>
  <link href="https://fonts.googleapis.com/css?family=Kelly+Slab&display=swap" rel="stylesheet">
  <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
  <script type='text/javascript' src='js\loading.js'></script>

</head>

<body>


    <div id="landingHeader" style="display:none">
      <h1>Welcome to MovieCamp!</h1>
      <a href="main.php" class="btn btn-lg">View All Movies</a>
    </div>

    <ul class="slideshow">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  
  <div class="wrap">
    <div class="loading">
      <div class="bounceball"></div>
      <div class="text lead"> NOW LOADING...</div>
    </div>



  <script src="js/index.js" type="text/javascript"> </script>

</body>

</html>