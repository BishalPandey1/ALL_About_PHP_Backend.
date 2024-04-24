<?php
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
  }
  
  setHeight(350);
  setHeight(); 
  setHeight(135);
  setHeight(80);
  
  function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
  }
  
  familyName("Hege", "1975");
  familyName("Stale", "1978");
  familyName("Kai Jim", "1983");
?>