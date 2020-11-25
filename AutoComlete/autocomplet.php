<?php
    require_once "firstNamesArray.php";
    $name=$_GET["name"];
    
    foreach ($namesArray as $nameList) {
        if (in_str($nameList,$name)){
            $actualName.=$nameList.",";
        }
    }

    echo $actualName;

    function in_str($string,$substr){
        $stringCut = substr($string,0,strlen($substr));
        if(strcasecmp($stringCut,$substr)==0){
            return true;
        }
        else{
            return false;
        }
    }
    
?>
