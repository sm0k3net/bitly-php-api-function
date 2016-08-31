<?php require_once 'bitly_api.php'; ?>

<!DOCTYPE html>
<head>
 <meta charset="utf-8" />
</head>

<body>

<?php
$test_link = $_POST['link'];
if(isset(trim($test_link))) {
 $shortLink = bitlyShorten($test_link);
 echo $shortLink; }
else {
 echo "Error! The link field was empty!"; }
?>

<center><h3>Simple script to test Bitly function</h3></center>

<form action="" method="post">
 <input type="text" name="link" value="" />
 <input type="submit" value="test my link" />
</form>
 
</body>
</html>
