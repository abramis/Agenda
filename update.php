<html>
<head>
<style>
h2{margin:12px; }
div{margin:12px;}
span
{
display:block;
width:360px;
padding:10px;
border:5px solid gray;
margin:8px; 

}
</style>
<title>Edit contact</title>
</head>
<body>
<h2>Update form</h2>
<div>(*)required</div>
<?php
include("dbinfo.inc.php");

 $a = $_GET['id'];
  
$query="SELECT * FROM contacts WHERE id='$a'";
$result=mysqli_query($conn,$query);

$num=mysqli_num_rows($result);
  
$conn-> close();

$i=0;
while ($i < $num) {
$first=mysqli_result($result,$i,"first");
$last=mysqli_result($result,$i,"last");
$phone=mysqli_result($result,$i,"phone");
$mobile=mysqli_result($result,$i,"mobile");
$fax=mysqli_result($result,$i,"fax");
$email=mysqli_result($result,$i,"email");
$web=mysqli_result($result,$i,"web");

?>

<form action="updated.php?ud=<?=$a ?>" method="post">
<input type="hidden" name="ud_id" value="<?php echo "$id"; ?>">
<span>*First Name: <input type="text" name="ud_first" value="<?php echo "$first"?>" required></span>
<span>*Last Name: <input type="text" name="ud_last" value="<?php echo "$last"?>" required></span>
<span>*Phone Number: <input type="text" name="ud_phone" value="<?php echo "$phone"?>" required></span>
<span>Mobile Number: <input type="text" name="ud_mobile" value="<?php echo "$mobile"?>"></span>
<span>Fax Number: <input type="text" name="ud_fax" value="<?php echo "$fax"?>"></span>
<span>E-mail Address: <input type="text" name="ud_email" value="<?php echo "$email"?>"></span>
<span>Web Address: <input type="text" name="ud_web" value="<?php echo "$web"?>"></span>
<input type="Submit" value="Update">
</form>

<?php
++$i;
} 
?>
</body>
</html>