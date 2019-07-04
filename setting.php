<?php
  include_once 'autoload.php';
  
  if(empty(Session::get('email'))) URL::redirect("login.php"); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once 'html/head.php'; ?>
  </head>
  <body>
    <?php include_once 'html/nav.php'; ?>
    <div class="container">
      <div class="row">
        <?php echo Session::get('email'); ?>
      </div>
    </div>
    <?php include_once 'html/script.php'; ?>
  </body>
</html>