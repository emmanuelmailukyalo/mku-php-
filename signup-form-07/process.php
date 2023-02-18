
<?php

  $name = $_POST['name'];
  $regno = $_POST['registrationno'];
  $course = $_POST['coursetitle'];
  $itb = $_POST['ITB'];
  $itp = $_POST['itp'];
  $ict = $_POST['ict'];
  $ma = $_POST['ma'];
  
 $totalmarks = $ict+$itb+$itp+$ma;
 $averagemarks = $totalmarks/4;
  
  echo "Full name: $name <br>";
  echo "Registration number: $regno <br>";
  echo "Course Title: $course <br><br>";
  // total marks print 
  echo "Marks scored in units: $totalmarks <br>";
// average marks print 
  echo "average marks: $averagemarks";

?>
 