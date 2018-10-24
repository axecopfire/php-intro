<?php
$file = "example.txt";

if($handle = fopen($file, 'r')) {


//  echo $content = fread($handle, filesize($file));
// fwrite($handle, 'Im having a great time writing PHP');



  fclose($handle);
  // unlink($file);
} else {
  echo "The application could not write";
}

?>