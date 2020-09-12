<? php
				//creation de la connexion
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_scolarite";



	$conn=mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("db_scolarite",$conn) or die(mysql_error());
	
?>