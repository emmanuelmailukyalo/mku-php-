
<?php

  $name = $_POST['name'];
  $regno = $_POST['registrationno'];
  $course = $_POST['coursetitle'];
  $itb = $_POST['ITB'];
  $itp = $_POST['itp'];
  $ict = $_POST['ict'];
  $ma = $_POST['ma'];
  
 $totalmarks = $ict+$itb+$itp+$ma;
  
  
  echo "Full name: $name <br>";
  echo "Registration number: $regno <br>";
  echo "Course Title: $course <br>";
  echo "Marks scored in units: <br>";
  echo "Total marks: $totalmarks <br>";
 

?>
 