<?php
$con=mysqli_connect("localhost", "root", "", "restaurant")or die("erreur connexion mysqli");
$nom=$_POST['nom'];
$mail=$_POST['mail'];
$id=mysqli_query($con,"SELECT * FROM clients WHERE NomClient='$nom' AND MailClient='$mail'");
if($id->num_rows>0)
{
	$donnees = mysqli_fetch_assoc($id);
	mysqli_query($con,"UPDATE clients SET NbVisites='".($donnees['NbVisites']+1)."' WHERE id='".$donnees['id']."'");
	
	echo "<h1>Tableau est bien modifié!!!<h1/>";
}
else
{
	$id=mysqli_query($con,"INSERT INTO clients VALUES(null,'$nom','$mail','1')");


	echo "<h1>Client est bien inséré!!!</h1>";
}
mysqli_close($con);

?>