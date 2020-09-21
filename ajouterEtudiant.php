<?php
					//creation de la connexion
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');
$dbname = getenv('MYSQL_DATABASE');

	$conn =new mysqli('localhost',$user,$pass,$dbname) or die(mysqli_connect_error());


$nom=$_POST['nom'];
	$email=$_POST['email'];
	$req="INSERT into Etudiants(Nom,mail) values ('$nom','$email')";
	//execution de la requete
	mysqli_query($conn,$req) or die (mysqli_error($conn));
	//affichage du resultat dans un tableau!//
?>

<script >
function plz(){
			alert('Merci');
		}
</script>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<td>Nom</td>
			<td><?php echo "$nom" ?></td>
		</tr>
		<tr>
			<td>email</td>
			<td><?php echo "$email" ?></td>
		</tr>
		<tr>
			<td>photo</td>
			<td><img src="images/<?php echo($nomphoto)?>"></td>
		</tr>
	</table>	
</body>
</html>
