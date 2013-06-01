<?php

include_once("createZip.inc.php");
$createZip = new createZip;  

//$createZip -> addDirectory("dir/");

$fileContents = file_get_contents("CreateZipFileMac.php");  
$createZip -> addFile($fileContents, "test.html");  

$fileContents = file_get_contents("CreateZipFileMac.php");  
$createZip -> addFile($fileContents, "test1.html");  


$fileName = "archive.zip";
$fd = fopen ($fileName, "wb");
$out = fwrite ($fd, $createZip -> getZippedfile());
fclose ($fd);

$createZip -> forceDownload($fileName);
@unlink($fileName);
?>