<?php
$url = "./img/Chrysanthemum1.jpg";
if(fileExists($url)) die("yes");
else die("no");


function fileExists($path){
    return (@fopen($path,"r")==true);
}

?>