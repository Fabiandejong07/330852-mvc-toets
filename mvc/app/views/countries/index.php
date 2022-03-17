<?php 
 echo '<a href=http://www.mvc-toets.org/countries/index>Click here</a>';
  foreach ($data['Country'] as $countrie) {
   echo "informatien:" . $countrie->id . $countrie->name . $countrie->capitalCity . $countrie->continent . $countrie->population;
   echo "<br>";
  }
?>