  <html>
  <head>
  <META HTTP-EQUIV="REFRESH" CONTENT="2; URL=insert3.php">
  </head>
  <body>
<?php


$first=$_POST['first'];
$last=$_POST['last'];
$phone=$_POST['phone'];
$mobile=$_POST['mobile'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$web=$_POST['web'];

include("dbinfo.inc.php");

//2os tropos me php (to kana me input type= email)
 // if (!filter_var($email, FILTER_VALIDATE_EMAIL))
   // {
   // echo "E-Mail is not valid";
   // }
  //else
  // {

$query = "INSERT INTO contacts VALUES ('','$first','$last','$phone','$mobile','$fax','$email','$web')";
mysqli_query($conn,$query);
//}
$conn-> close();
?>
</body>
</html>