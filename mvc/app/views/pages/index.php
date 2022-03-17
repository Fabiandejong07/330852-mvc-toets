<?php 
 echo '<a href=http://www.mvc-toets.org/countries/index>Click here</a>';
  foreach ($data['users'] as $user) {
   echo "informatien:" . $user->user_name . $user->user_emiail;
   echo "<br>";
  }
?>