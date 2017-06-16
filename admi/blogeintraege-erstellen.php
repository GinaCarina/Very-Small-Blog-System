<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Blogeinträge erstellen</title>
<?php
if(isset($_POST["gesendet"]))
{
	
		$con=mysqli_connect("","root");
		mysqli_select_db($con, "lavender_secrets");
		//var_dump($_POST);
		
		/*Einfügen Text und bildpfad*/
		$sql = "INSERT INTO diy_blog (bild, text, titel) VALUES ('{$_POST["bild"]}', '{$_POST["text"]}', '{$_POST["titel"]}')";
		//echo $sql;
		mysqli_query($con,$sql);
 
 		mysqli_close($con);

}
?>
</head>

<body>
<h2>Neuen Blogeintag erstellen</h2>
<form action="blogeintraege-erstellen.php" method="post" >
<p>Titel</p>
<p><input type="text" name="titel" ></p>
<p>Text eingeben (max. 1000 Zeichen)</p>
<p><textarea name="text" rows="5" cols="80"></textarea></p>
<p>Bild auswählen (img/xyz.jpg)</p>
<p><input type="text" name="bild" ></p>
<p><input type="submit" name="gesendet" value="senden"><input type="reset" value="leeren"></p>
</form>
</body>
</html>