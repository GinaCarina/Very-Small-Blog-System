<?php
//session_start(); 
//welche beiträge gibt es noch, werden in blog-navi eingetragen
$con=mysqli_connect("","root");
mysqli_select_db($con, "lavender_secrets");
$res=mysqli_query($con,"SELECT id, zeit, titel FROM diy_blog ORDER BY zeit DESC");
echo "<ul>";
while($dsatz=mysqli_fetch_assoc($res))
{
	$z = $dsatz["zeit"];
    $zeit = mktime(substr($z,11,2), substr($z,14,2), substr($z,17,2), substr($z,5,2), substr($z,8,2), substr($z,0,4));
	
	echo "<li><a href='javascript:blogAnfordern(".$dsatz['id'].");'>";
	echo $dsatz["titel"]."<br>";
	echo date("d.m.Y", $zeit);
	echo "</a></li>";
}
echo "</ul>";
?>

   