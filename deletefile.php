<?php // deletefile.php
  if (!unlink('testfile.txt')) echo "Could not delete file";
  else echo "File 'testfile.txt' successfully deleted";
?>