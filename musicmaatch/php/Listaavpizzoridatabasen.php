<html>
<!-- Gustav Sundström te12 -->
<head>
	<title> Hejsan</title>
			
</head>
	<body>
	
	<?php
	# beställnings info till ziggespizzeria
	echo " Är inne i PHP </br>";
	$con = mysql_connect ("localhost", "root", ""); # variabel för uppkoppling (nav;root;lösenord) (inget lösenod i detta fall).
	
	if(!$con){		# testar om koppling mot databasen finns,  annars stäng ner.
		die ('kunde inte koppla upp mot databasen: ' .mysql_error() );
	}
	
	mysql_select_db ("ziggespizzeria", $con); # koppla upp och använd databasen ziggespizzeria
	
	#Skapar en SQL-fråga och kör den mot tabellen ziggespizzeria
	
	$sql=" INSERT INTO drickor(drickor) VALUES 
	('$_POST[drickor]')";
	
	if(!mysql_query($sql, $con)){
		die('Error:' .mysql_error () );
	}
	
	else{
		echo "Datat är inlagt i databasen";
	}
	
	echo"<br>";
	echo"<br> Utskrift av databasens innehåll: </br>";
	$result = mysql_query("SELECT * FROM drickor"); #sparar resultatet i variabeln $result
	
	echo"<br>";
	#Skapar en tabell där resultatet ska skrvas ut
	echo" <table border = '1'>
		<tr>
			<th>Drickor </th>
			
		</tr>";				
	
	while($row = mysql_fetch_array ($result)) # resultatet sparas rad för rad $row
	{
		echo"<tr>";
		echo"<td>" .$row['drickor'] . "</td>";
		echo"</tr>";
	}
	echo"</table>";
	
	
	mysql_close($con);
	

	?>
	
	</body>
</html>