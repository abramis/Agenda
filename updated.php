  <html>
  <head>
  <META HTTP-EQUIV="REFRESH" CONTENT="3; URL=insert3.php">
  </head>
  <body>
<?php
include("dbinfo.inc.php");

$id=$_POST['ud_id'];
$first=$_POST['ud_first'];
$last=$_POST['ud_last'];
$phone=$_POST['ud_phone'];
$mobile=$_POST['ud_mobile'];
$fax=$_POST['ud_fax'];
$email=$_POST['ud_email'];
$web=$_POST['ud_web'];

 $b = $_GET['ud'];
$query="UPDATE contacts SET first='$first', last='$last', phone='$phone', mobile='$mobile', fax='$fax', email='$email', web='$web' WHERE id='$b'";
mysqli_query($conn,$query);

echo "Record Updated";

$conn-> close();
?>
</body>
</html>