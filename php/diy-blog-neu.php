<?php
session_start();
//anzeige blog start, den neusten
$con=mysqli_connect("","root");
mysqli_select_db($con, "lavender_secrets");

//SELECT MAX(Price) AS HighestPrice FROM Products; 
//ermitteldn der höchsten id
$sql="SELECT MAX(id) AS MaxId FROM diy_blog";
$res=mysqli_query($con,$sql);
while($dsatz=mysqli_fetch_assoc($res))
{
	$blogid=$dsatz["MaxId"];
}
$_SESSION["id"]=$blogid;
//ergebnis ausgeben
$sql="SELECT * FROM diy_blog WHERE id LIKE {$blogid}";

//echo $sql;
$res=mysqli_query($con,$sql);
//var_dump($res);
while($dsatz=mysqli_fetch_assoc($res))
{	
	$z = $dsatz["zeit"];
    $zeit = mktime(substr($z,11,2), substr($z,14,2), substr($z,17,2), substr($z,5,2), substr($z,8,2), substr($z,0,4));

	echo "<img src=\"".$dsatz["bild"]."\">";
	echo "<h2>".$dsatz["titel"]."</h2><p>";
	echo date("d.m.Y", $zeit)." ";
	echo $dsatz["text"]."</p>";
}
//kommentar ausgeben
$sql="SELECT * FROM diy_blog_kom WHERE id LIKE {$blogid} ORDER BY zeit DESC";

//echo $sql;
$res=mysqli_query($con,$sql);
//var_dump($res);
echo "<h2>Ihre Kommentare</h2>";
while($dsatz=mysqli_fetch_assoc($res))
{	
	$z = $dsatz["zeit"];
    $zeit = mktime(substr($z,11,2), substr($z,14,2), substr($z,17,2), substr($z,5,2), substr($z,8,2), substr($z,0,4));

	echo "<p>".date("d.m.Y", $zeit)."<br>";
	echo $dsatz["text"]."<br>".$dsatz["name"]."</p>";
}

mysqli_close($con);
?>
