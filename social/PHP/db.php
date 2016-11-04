<?php
  $con = mysqli_connect("127.0.0.1","root","");
      mysqli_select_db($con,'posts') or die('unable to select db');
      date_default_timezone_set('Europe/London');
?>
