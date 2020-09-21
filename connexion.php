<? php
				//creation de la connexion
$host = '127.0.0.1';
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');


	$conn=mysql_connect("localhost",$user,$dbname) or die(mysql_error());
	mysql_select_db("db_scolarite",$conn) or die(mysql_error());
	
?>
