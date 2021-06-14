<?php
	$con=mysqli_connect("localhost", "root", "", "restaurant") or die("erreur connexion mysqli");
	$id=mysqli_query($con,"SELECT * FROM  clients "); 
	echo "<table border='/1'/><tr><th>nom client<//th><th>email client<//th><//tr>";
	while ($donnees = mysqli_fetch_assoc($id) )
	{
		echo "<TR><TD>";
		echo "$donnees[NomClient]";
		echo"<//td><td>";
		echo "$donnees[MailClient]";
		echo "<//TD><//TR>"; 
	}  
	echo "<//table>";
	mysqli_close($con);   
?>
