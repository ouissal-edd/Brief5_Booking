<?php
try{ 
	
    $conn=new PDO('mysql:host=localhost;dbname=hotels','root','');
    $conn->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES 'utf8'");


if(isset($_POST['reserver']))
{
$dateEn=['dateEntrer'];
$dates=['dateSortie'];


$app = $_POST['app'];
$pens = $_POST['pension'];

$c = $_POST['chambreenf'];
$v = $_POST['chambre'];
// $ee = $_POST['chambreDouble'];
// $cdd= $_POST['typebatiment'];
print_r($dateEn);
print_r($dates);

print_r($cdd);
print_r($v);
print_r($ee);
print_r($pens);
print_r($app);
print_r($c);
}
}
catch(PDOException $e){
	echo "echec de la connexion" .$e->getMessage(); 

}
?>