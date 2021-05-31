<?php
    include 'db.php';   
    class reservation  extends connexion
    {
        
public function InsertReservation($datedepart,$datearriv,$id_user){
  
        $this->conx->setAttribute(PDO::ATTR_EMULATE_PREPARES,TRUE);
        $sql = 'INSERT INTO `reservation`(`dateEntrer`, `dateSortie`, `fk_users`) VALUES (?,?,?)';
        $stmt = $this->conx->prepare($sql);
        $stmt->execute([$datedepart,$datearriv,$id_user]);
                   $Idreservation = $this->conx->lastInsertId('reservation') ; 
        return $Idreservation;
    }

    
            
    public function InsertChambreSimple($chambreSimple,$IdReservation)
        {
            foreach($chambreSimple as  $value){
            $query = "INSERT INTO `panier`( `fk_bien`, `fk_reservation`) VALUES((select idB from bien where type = 'chambreSimple' and vue = '$value[typevue]' and enfants is NULL and ( lit is Null )),?)";
            $stmt = $this->conx->prepare($query);
            $stmt->execute([$IdReservation]);

        }
    }
            
    public function InsertChambreDouble($chambreDouble,$IdReservation)
        {
            foreach($chambreDouble as  $value){
            $query = "INSERT INTO `panier`( `fk_bien`, `fk_reservation`) VALUES((select idB from bien where type = 'chambreDouble' and vue = '$value[typevue]' and enfants is NULL and (lit  = '$value[typeLit]')),?)";
            $stmt = $this->conx->prepare($query);
            $stmt->execute([$IdReservation]);
        }
    }

public function InsertAppartement($NumbreAppartement,$IdReservation)
{
    for($i = 0 ; $i < $NumbreAppartement ; $i++){
        $query = "INSERT INTO `panier`( `fk_bien`, `fk_reservation`) VALUES((select idB from bien where type = 'Appartements' and vue  is NULL and enfants is NULL and (lit  is NULL)),?)";
        $stmt = $this->conx->prepare($query);
        $stmt->execute([$IdReservation]);
    }

}

public function InsertBungalow($NumbreBungalow,$IdReservation)
{
    for($i = 0 ; $i < $NumbreBungalow ; $i++){
        $query = "INSERT INTO `panier`( `fk_bien`, `fk_reservation`) VALUES((select idB from bien where type = 'bungaloow' and vue  is NULL and enfants is NULL and (lit  is NULL)),?)";
        $stmt = $this->conx->prepare($query);
        $stmt->execute([$IdReservation]);
    }

}


public function InsertBaby($nbrbaby,$chambreenfbaby,$IdReservation)
{
    for($i = 0 ; $i < $nbrbaby ; $i++){
        $query = "INSERT INTO `panier`( `fk_bien`, `fk_reservation`) VALUES((select idB from bien where type = '$chambreenfbaby' and vue  is NULL  and (lit  is NULL)),?)";
        $stmt = $this->conx->prepare($query);
        $stmt->execute([$IdReservation]);
    }

}

public function InsertJunior($nbrjunior,$chambreenfjunior,$IdReservation)
{
    for($i = 0 ; $i < $nbrjunior ; $i++){
        $query = "INSERT INTO `panier`( `fk_bien`, `fk_reservation`) VALUES((select idB from bien where type = '$chambreenfjunior' and vue  is NULL  and (lit  is NULL)),?)";
        $stmt = $this->conx->prepare($query);
        $stmt->execute([$IdReservation]);
    }
}

    public function InsertSenior($nbrsenior,$chambreenfsenior,$IdReservation)
{
    for($i = 0 ; $i < $nbrsenior ; $i++){
        $query = "INSERT INTO `panier`( `fk_bien`, `fk_reservation`) VALUES((select idB from bien where type = '$chambreenfsenior' and vue  is NULL  and (lit  is NULL)),?)";
        $stmt = $this->conx->prepare($query);
        $stmt->execute([$IdReservation]);
    }

}

public function Insertpension($pension,$IdReservation)
{
        $query = "INSERT INTO `panier`( `fk_bien`, `fk_reservation`) VALUES((select idB from bien where type = '$pension' and vue  is NULL and enfants is NULL and (lit  is NULL)),?)";
        $stmt = $this->conx->prepare($query);
        $stmt->execute([$IdReservation]);
    

}

}

