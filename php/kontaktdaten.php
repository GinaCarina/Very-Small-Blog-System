<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formular</title>
  <meta charset="utf-8">

</head>

<body>
<?php
	//var_dump($_POST);
	echo "<p class=\"nachricht\">Vielen Dank für Ihre  Eingabe ".htmlspecialchars($_POST["vorname"])." ".htmlspecialchars($_POST["name"]).".";
	echo "<br>Wir werden uns umgehend um Ihre Anfrage kümmern.</p>";
	
	
// nachricht
$nachricht = "Nachricht an Lavender Secrets:\r\n".htmlspecialchars($_POST["vorname"]).", ".htmlspecialchars($_POST["name"]).", ".htmlspecialchars($_POST["email"])."\r\n".htmlspecialchars($_POST["nachricht"]);
$nachricht = wordwrap($nachricht, 70, "\r\n");
//echo $nachricht;
// Senden

mail('regina.leone@t-online.de', 'Lavender Secrets', $nachricht);

?>


</body>
</html>