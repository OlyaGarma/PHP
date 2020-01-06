<?php
function delete_dir($dirname) {
  $scan_dir =  array_diff(scandir ($dirname, SCANDIR_SORT_NONE), ['.','..']);
  var_dump($scan_dir);
     foreach ($scan_dir as $key) {
        if (is_file($dirname . '/' . $key)) {
            unlink($dirname . '/' . $key);
            echo "файл " . $dirname . '/' . $key . " удалён <br>";
          }
          if (is_dir($dirname . '/' . $key))  {
				 			delete_dir($dirname . '/' . $key);
              echo "папка " . $dirname . '/' . $key . " удалена <br>";
    			}
      }
return rmdir($dirname);
}
delete_dir('img2');