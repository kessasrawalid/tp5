<?php
	$con=mysqli_connect("localhost", "root", "", "restaurant") or die("erreur connexion mysqli");
	$id=mysqli_query($con,"SELECT * FROM  menu where id<=3 "); 
	echo "<label>que désirez-vous comme entree ?<//label><br//>";
	echo "<ul>";
	while ($donnees = mysqli_fetch_assoc($id) )
	{
		echo "<li><input type='radio' name='menu' value='".$donnees['id']."'//>
					<label>".$donnees['NomPlat']."<//label><//li><br//>";
	}  
	echo "<//ul>";
	echo "</br>";

	$id=mysqli_query($con,"SELECT * FROM  menu where id>3 AND id<=6 ");
echo "<label>que désirez-vous comme plat principal  ?<//label><br//>";
echo "</br>";
while ($donnees = mysqli_fetch_assoc($id) )
{
	echo "<li><input type='radio' name='menu' value='".$donnees['id']."'//>
				<label>".$donnees['NomPlat']."<//label><//li><br//>";
}  
echo "</br>";
$id=mysqli_query($con,"SELECT * FROM  menu where id>6  ");
echo "<label>que désirez-vous comme dessert  ?<//label><br//>";
echo "</br>";
while ($donnees = mysqli_fetch_assoc($id) )
{
	echo "<li><input type='radio' name='menu' value='".$donnees['id']."'//>
				<label>".$donnees['NomPlat']."<//label><//li><br//>";
}  
     
	mysqli_close($con);  

?>