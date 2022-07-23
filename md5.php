<!DOCTYPE html>

<head><title>Pratham Gupta MD5</title></head>

<!-- PHP code to generate hash of a 4 digit PIN -->
<?php
$md5="None";
if (isset($_GET['encoding'])){
    $md5=hash('md5',$_GET['encoding']);
}
?>

<body>
<h1>MD5 hash encoder</h1>
<p>MD5 hash for the entered PIN: <?= htmlentities($md5); ?></p>

<form>
    <input type="text" name="encoding" size="60" />
    <input type="submit" value="Generate MD5" />
</form>

<!-- List of links -->

<ul>
    <li><a href="md5.php">Reset this Page</a></li>
    <li><a href="index.php" target="_blank">Back to MD5 Pin cracker</a></li>
</ul>

</body>
</html>
