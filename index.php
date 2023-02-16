<?php
header('Content-Type: application/json');
$pdo=new PDO("mysql:dbname=basededatos;host=127.0.0.1","root","123");
switch($_GET['q']){
		
		case 1:
		    $statement=$pdo->prepare("SELECT temperatura FROM tempera ORDER BY id DESC LIMIT 0,1");
			$statement->execute();
			$results=$statement->fetchAll(PDO::FETCH_ASSOC);
			$json=json_encode($results);
			echo $json;
		break; 
		
		default:
			
			$statement=$pdo->prepare("SELECT temperatura FROM tempera ORDER BY id ASC");
			$statement->execute();
			$results=$statement->fetchAll(PDO::FETCH_ASSOC);
			$json=json_encode($results);
			echo $json;
		break;

}
?>