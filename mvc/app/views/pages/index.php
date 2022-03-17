<?php 

  foreach ($data['users'] as $user) {
   echo "informatien:" . $user->user_name . $user->user_emiail;
   echo "<br>";
  }
?>