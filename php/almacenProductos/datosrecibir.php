<?php 

 $tamano=(isset($_POST['tamano'])    ? $_POST['tamano']    : '');	
 
 $lineasuperior=$tamano*2;
 $espaciointerno=$tamano;
 $lineamedio=$tamano;
 $lineainferior=$tamano*2;

 echo "...";
 for ($x = 0; $x <= $lineasuperior; $x++) {
  echo "..";
}
echo '<br>';

for ($x = 0; $x <= $lineamedio; $x++) {
  echo "|";
   for ($y = 0; $y <= $espaciointerno; $y++) {
  echo "....";
  ;
  } 
  echo "| <br>";
}

// for ($x = 0; $x <= $lineainferior; $x++) {
//   echo "_";
// }	
	


 ?>