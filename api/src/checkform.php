<?php 
function sanitize($conn, $input){
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  $input = mysqli_real_escape_string($conn, $input);
  return $input;
}
?>