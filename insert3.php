<html>
<head>
<style>
h2{margin:12px; opacity:0.7; }
	
table
{
border-collapse:collapse;

}
table,td,th
{
	margin:12px; 
	border-width:3px;  
    border-style:groove;
	border-color: #000000 #00ff00 #0000ff rgb(250,0,255);
}
td
{	
	height:40px;
vertical-align:bottom;
text-align:left;
}
th
{
background-color:lightcoral;;
color:white;
text-align:left;
}
.name
{width: 140px;
text-transform:capitalize;
}
.phone
{width: 110px;
}
.internet
{width: 65px;
}
.ypo
{
position:fixed;
bottom:20px;
right:5px;
}
.num_cont
{
text-align: right;
font-style: italic;
}

a:link {color:red;text-decoration:none;}    
a:visited {color:darkred;} 
 a:hover {text-decoration:underline;color:blue;}
a:active {color:grey;}  

</style>
<title>Contacts</title>
</head>
<body>
<h2><font size=+4 color=#993459>C</font>ontacts <font size=+4 color=#993459>t</font>able</h2>
<?php
include("dbinfo.inc.php");
$query="SELECT * FROM contacts ORDER BY last,first";
$result=mysqli_query($conn,$query);

$num=mysqli_num_rows($result);
$conn-> close(); 
?>


<table border="0" cellspacing="2" cellpadding="2">
<tr>
<th><font face="Arial, Helvetica, sans-serif">Name</font></th>
<th><font face="Arial, Helvetica, sans-serif">Phone</font></th>
<th><font face="Arial, Helvetica, sans-serif">Mobile</font></th>
<th><font face="Arial, Helvetica, sans-serif">Fax</font></th>
<th><font face="Arial, Helvetica, sans-serif">E-mail</font></th>
<th colspan="3"><font face="Arial, Helvetica, sans-serif">Website</font></th>
</tr>

<?php
$i=0;
while ($i < $num) {
$id=mysqli_result($result,$i,"id");
$first=mysqli_result($result,$i,"first");
$last=mysqli_result($result,$i,"last");
$phone=mysqli_result($result,$i,"phone");
$mobile=mysqli_result($result,$i,"mobile");
$fax=mysqli_result($result,$i,"fax");
$email=mysqli_result($result,$i,"email");
$web=mysqli_result($result,$i,"web");

/* if ($num){

	$I = 1;
                
	while($row = mysqli_fetch_assoc($result)){

		$cat_name = $row['cat_name'];
		$cat_num = $row['cat_num'];

		echo "$cat_name, $cat_num, $I<br />";

		$I++;

	}
} */

?>

<tr>
<td class="name"><font face="Arial, Helvetica, sans-serif"><?php echo $last." ".$first; ?></font></td>
<td class="phone"><font face="Arial, Helvetica, sans-serif"><?php echo $phone; ?></font></td>
<td class="phone"><font face="Arial, Helvetica, sans-serif"><?php echo $mobile; ?></font></td>
<td class="phone"><font face="Arial, Helvetica, sans-serif"><?php echo $fax; ?></font></td>
<td class="internet"><font face="Arial, Helvetica, sans-serif"><a href="mailto:<?php echo $email; ?>">E-mail</a></font></td>
<td class="internet"><font face="Arial, Helvetica, sans-serif"><a href="<?php echo $web; ?>">Website</a></font></td>
<td width="45px"><font face="Arial, Helvetica, sans-serif"><a href="update.php?id=<?=$id ?>"><img src="edit_logo.jpg" width="39" height="24"></a></font></td>
<td><font face="Arial, Helvetica, sans-serif"><a href="delete.php?id=<?=$id ?>" onclick="return confirm('Are you sure?')"><img src="delete_logo.png" width="39" height="27"></a></font></td>
</tr>

<?php
$i++;
	if($i==$num) 
	{ ?>
		<tr>
		<td><font face="Arial, Helvetica, sans-serif"><a href="importcont.html">import contact</a></font></td>
		<td colspan="7" class="num_cont"><font face="Arial, Helvetica, sans-serif"><?php echo $i." "."contacts"; ?></font></td>
		</tr>
<?php	}
}


echo "</table>";
?>

<footer class="ypo">
<hr>
created by Avraam Tepelidis, <A HREF="mailto:abraahamtepe@yahoo.gr?subject=Sxolia gia to site&body=H istoselida sou einai....">abraahamtepe@yahoo.gr</A> <br>
</footer>
</body>
</html>