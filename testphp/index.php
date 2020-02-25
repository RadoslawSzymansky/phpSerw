
<!DOCTYPE HTML>
<html lang="pl">
<html>
<head>
  <meta charset="utf-8" />
  
</head>
 
  <body>

  <?php echo "SADASk"; ?>

  <?php include 'header.php'; ?>
  <?php include 'image.php'; ?>
  <?php 
    define("text", "tekst"); 
    echo text."cos";
    echo '<br>';


    function writeTxt($count) {
      echo 'text';
      echo $count;
      echo '<br>';
    };

    print_f($count);
    die();


    for ($i = 0; $i < 30; $i += 1) {
      writeTxt($i);
    };

  ?>

  

  </body>

</html>

