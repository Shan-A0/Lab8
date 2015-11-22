<?php 
  
 if(!empty($_REQUEST['country']))
 { 
  $LOOKUP = $_REQUEST['country']; 
 	 
 	# execute a SQL query on the database 
 	$results = mysql_query("SELECT * FROM countries WHERE name LIKE '%$LOOKUP%';"); 
 	print $results.' '; 
 	# loop through each country 
 	while ($row = mysql_fetch_array($results)) { 
 	  ?> 
 	  <li> <?php echo $row["name"]; ?>, ruled by <?php echo $row["ruler"]; ?> </li> 
 	  <?php 
 	} 
 }
 else{ 
 	echo "Not Found"; 
 } 
 ?> 
