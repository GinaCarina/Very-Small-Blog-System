<html>
<body>
<?php
   $con = mysqli_connect("","root");

   $sql = "CREATE DATABASE IF NOT EXISTS lavender_secrets";
   mysqli_query($con, $sql);

   mysqli_select_db($con, "lavender_secrets");
   
   $sql = "CREATE TABLE IF NOT EXISTS diy_blog_kom (
	 		k_id int(11) NOT NULL AUTO_INCREMENT,
      id int(11),
      zeit timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
      text varchar(1000) NOT NULL,
			name varchar(60) NOT NULL,
			email varchar(100) NOT NULL,
	  PRIMARY KEY (k_id)
      ) ENGINE=MyISAM DEFAULT CHARSET=latin1";
   mysqli_query($con, $sql);
   
    $sql = "INSERT INTO diy_blog_kom (name, text, email) VALUES ('Franka',
   'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 
   'franka@gmx.de')";
   mysqli_query($con, $sql);
   
    $sql = "INSERT INTO diy_blog_kom (name, text, email) VALUES ('Lisa',
   'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 
   'lisa@web.de')";
   mysqli_query($con, $sql);
   
    $sql = "INSERT INTO diy_blog_kom (name, text, email) VALUES ('Maxi',
   'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 
   'maxi@gmx.de')";
   mysqli_query($con, $sql);
   mysqli_close($con);
?>
</body>
</html>
