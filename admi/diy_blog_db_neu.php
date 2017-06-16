<html>
<body>
<?php
   $con = mysqli_connect("localhost","root","");

   $sql = "CREATE DATABASE IF NOT EXISTS lavender_secrets";
   mysqli_query($con, $sql);

   mysqli_select_db($con, "lavender_secrets");
   
   $sql = "CREATE TABLE IF NOT EXISTS diy_blog (
	    id int(11) NOT NULL AUTO_INCREMENT,
      zeit timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
			titel varchar(100) NOT NULL,
      text varchar(1000) NOT NULL,
			bild varchar(100) NOT NULL,
	  PRIMARY KEY (id)
      ) ENGINE=MyISAM DEFAULT CHARSET=latin1";
   mysqli_query($con, $sql);
   
   $sql = "INSERT INTO diy_blog (bild, text, titel) VALUES ('img/salz.jpg',
   'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 
   'Lavendelsalz')";
   mysqli_query($con, $sql);
    $sql = "INSERT INTO diy_blog (bild, text, titel) VALUES ('img/seife.jpg',
   'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 
   'Lavendelseife zaubern')";
   mysqli_query($con, $sql);
    $sql = "INSERT INTO diy_blog (bild, text, titel) VALUES ('img/kleine-dose-250.jpg',
   'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 
   'Lavendelcreme')";
   mysqli_query($con, $sql);
   mysqli_close($con);
?>
</body>
</html>
