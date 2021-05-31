<?php
include "../models/reservation.php";
error_reporting(0);

$Reservation = new reservation();

if(session_id()==''){
  
  session_start();
}
$fk_users =$_SESSION['idU'];
if (isset($_POST['reserver']))
 {

$datedepart= $_POST['dateEntrer'];
$datearriv = $_POST['dateSortie'];
$id_user = $_SESSION['idU'];

$chambreSimple=$_POST['chambreSimple'];
$chambreDouble=$_POST['chambreDouble'];
$NumbreAppartement=$_POST['TypeAppartement'];
$NumbreBungalow=$_POST['TypeBungalow'];

$chambreenfbaby=$_POST['chambreenfbaby'];
$chambreenfjunior=$_POST['chambreenfjunior'];
$chambreenfsenior=$_POST['chambreenfsenior'];

$nbrbaby=$_POST['nbrbaby'];
$nbrjunior=$_POST['nbrjunior'];
$nbrsenior=$_POST['nbrsenior'];

$pension=$_POST['pens'];
// print_r($pension) ;
 


$IdReservation=$Reservation->InsertReservation($datedepart,$datearriv,$id_user);

$Reservation->InsertChambreSimple($chambreSimple,$IdReservation);
$Reservation->InsertChambreDouble($chambreDouble,$IdReservation);

$Reservation->InsertAppartement($NumbreAppartement,$IdReservation);
$Reservation->InsertBungalow($NumbreBungalow,$IdReservation);

$Reservation-> InsertBaby($nbrbaby,$chambreenfbaby,$IdReservation);
$Reservation-> InsertJunior($nbrjunior,$chambreenfjunior,$IdReservation);
$Reservation-> InsertSenior($nbrsenior,$chambreenfsenior,$IdReservation);
$Reservation->Insertpension($pension,$IdReservation);

   
 
 }
 