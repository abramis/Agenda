  <html>
  <head>
  <META HTTP-EQUIV="REFRESH" CONTENT="1; URL=insert3.php">
  </head>
  <body>
<?php
include("dbinfo.inc.php");

 $c = $_GET['id'];
  
$query="DELETE FROM contacts WHERE id='$c'";
$result=mysqli_query($conn,$query);

$num=mysqli_num_rows($result);
$conn-> close(); 
?>
</body>
</html>