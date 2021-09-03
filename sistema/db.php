<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'equipos_p'
) or die(mysqli_erro($mysqli));

?>
