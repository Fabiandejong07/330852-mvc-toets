<?php 

  foreach ($data['country'] as $countrie) {
      
   echo "informatien:" . $countrie->id . $countrie->name . $countrie->capitalCity . $countrie->continent . $countrie->population;
   echo "<br>";
    $data .= "<tr><th scope='row'>" .  $countrie->id  . "</th>
    <td> ".  $countrie->id ." </td>
    <td>".  $countrie->name   . " </td>
    <td>" .  $countrie->capitalCity  . "</td>
    <td> " .  $countrie->continent . " </td>
    <td> " .    $countrie->population . " </td>


    ";
  

  }
?>


<!doctype html>
<html>
<head>

<meta name="description" content="Our first page">
<meta name="keywords" content="html tutorial template">
</head>
<body>
<table>
  <tr>
  <th>id</th>
  <th>name</th>
    <th>hoofdstad</th>
    <th>continet</th>
    <th>populatie</th>
  </tr>
  <tr>
   <?php echo $data; ?>
  </tr>
 
</table>
</body>
</html>


