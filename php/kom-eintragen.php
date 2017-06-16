 <?php 
 session_start();
 
if(isset($_POST["name"])&&isset($_SESSION["id"])&&$_POST["email"])
{
	
	//var_dump($_POST);
    //echo "Ihr Eingaben <br>\n ";
    //echo "Name: " . htmlspecialchars($_POST["name"]) . "<br>\n";
    //echo "E-Mail: " . htmlspecialchars($_POST["email"]) . "<br>\n";
	//echo "Kommentar: " . htmlspecialchars($_POST["text"]) . "<br>\n";
	//echo "kommentar zur id:".$_SESSION["id"];

	$ls_name=htmlspecialchars($_POST["name"]);
	$ls_email=htmlspecialchars($_POST["email"]);
	$ls_text=htmlspecialchars($_POST["text"]);

	$con=mysqli_connect("","root");
	mysqli_select_db($con, "lavender_secrets");

	//kommentar in datenbank
	//INSERT INTO table_name (column1,column2,column3,...) VALUES (value1,value2,value3,...);

	$sql="INSERT INTO diy_blog_kom (id, name, email, text) VALUES ('{$_SESSION["id"]}','$ls_name', '$ls_email', '$ls_text')";

	echo "<p class=\"nachricht\">Vielen Dank für Ihren Kommentar.</p>";
	mysqli_query($con,$sql);
			 
   mysqli_close($con);
}
?>