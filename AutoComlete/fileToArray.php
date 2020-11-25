<?php
    $namesArray=file("first-names.txt");
    $fp=fopen("fisrtNamesArray.php","w");
    foreach ($namesArray as $key=>$value) {
        fwrite($fp,"\$namesArray[$key]='$value';");
    }
    fclose($fp);
?>