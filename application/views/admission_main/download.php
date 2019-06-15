<?php
  $filename ="HNAUB_Admission.pdf";
  $download_path = "./";
  if(eregi("\.\.", $filename)) die("I'm sorry, you may not download that file.");
  $file = str_replace("..", "", $filename);
  if(eregi("\.ht.+", $filename)) die("I'm sorry, you may not download that file.");
  $file = "$download_path$file";
  if(!file_exists($file)) die("I'm sorry, the file doesn't seem to exist.");
   $type = filetype($file);
   $today = date("F j, Y, g:i a");
   $time = time();
  header("Content-type: $type");
  header("Content-Disposition: attachment;filename=$filename");
  header("Content-Transfer-Encoding: binary");
  header('Pragma: no-cache');
  header('Expires: 0');
  set_time_limit(0);
  readfile($file);
?>