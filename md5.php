<!DOCTYPE html>

<head><title>Pratham Gupta MD5</title></head>

<!-- PHP code to generate hash of a 4 digit PIN -->
<?php
$md5="None";
if (isset($_GET['encoding'])){
    $md5=hash('md5',$_GET['encoding']);
}
?>


