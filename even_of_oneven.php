<?php
echo "Vul een getal in" . PHP_EOL;
$getal = readline();
if (($getal % 2) == 0)   {
   echo $getal . PHP_EOL . "Dit is een even getal";
} else {
  echo "Dit is een oneven getal";
}

 ?>
