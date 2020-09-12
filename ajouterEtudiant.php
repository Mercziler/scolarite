<?php
					//creation de la connexion
	$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_scolarite";

	$conn =new mysqli($host,$user,$pass,$dbname) or die(mysqli_connect_error());


$nom=$_POST['nom'];
	$email=$_POST['email'];
	$nomphoto=$_FILES['photo']['name']; 
		//recuperation du fichier dans la mémoire temporaire
	$file_tmp_name=$_FILES['photo']['tmp_name'];
		//recupération et deplacement de la photo dans le dossier images
	move_uploaded_file($file_tmp_name,"./images/$nomphoto");
		//requete d'insertion d'un étudiant dans la table etudiant

	$req="INSERT into Etudiants(Nom,mail,Photo) values ('$nom','$email','$nomphoto')";
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