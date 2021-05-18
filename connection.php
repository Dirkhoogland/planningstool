<?php 
 function connection(){
try {
    $conn = new PDO('mysql:host=localhost;dbname=spelplanner', 'root','mysql' );
    return $conn;
    }
   

    catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
}


function spellijst(){

	$sql='SELECT id , name , image , min_players , max_players
	 FROM `games`order by name';  

	$conn = connection();
	$sth = $conn->prepare($sql);
	$sth->execute();
	$result= $sth->fetchall();

	return $result;
}


?>
