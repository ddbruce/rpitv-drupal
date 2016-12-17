<?php
  if(!isset($title)) {
    $title = 'Hello world!';
  }

  if(!isset($body)) {
    $body = '<em>Hi again!</em>';
  }
?>

<!doctype html>
<html>
<head>
  <title><?php echo $title; ?> | RPI TV</title>
  <?php echo file_get_contents('partials/head.html'); ?>
</head>
<body class="grey darken-4">
  <?php echo file_get_contents('partials/nav.html'); ?>
  <div class="container section white-text">
    <div class="row">
      <div class="col s12 m12">
        <h2><?php echo $title; ?></h2>

        <?php echo $body; ?>
      </div>
    </div>
  </div>
  <?php echo file_get_contents('partials/footer.html'); ?>
  <?php echo file_get_contents('partials/bottom_scripts.html'); ?>
</body>
</html>
