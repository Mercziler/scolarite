<? php
				//creation de la connexion
$host = getenv('OPENSHIFT_MYSQL_DB_HOST');
$user = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$pass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$dbname = getenv('OPENSHIFT_GEAR_NAME');


	$conn=mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("db_scolarite",$conn) or die(mysql_error());
	
?>
