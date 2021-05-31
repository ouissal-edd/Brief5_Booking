<?php
    include 'db.php';   
    class Signin  extends Connexion{ 
     
        public function login($email,$password)
        {
        $query = "select * from users u,role r where u.email=? and u.password=? and  u.idrole=r.idR";
        $stmt = $this->conx->prepare($query);
        $stmt->execute([$email,$password]);
      $count = $stmt->rowCount();
      $row   = $stmt->fetch(PDO::FETCH_ASSOC);
      if($count == 1 && !empty($row))
       {
         session_start();
        $_SESSION['idU']   = $row['idU'];
        $_SESSION['fullname'] = $row['fullname'];
        return $row["sonrole"];

      } 
      else {
       return false;
    }  
   
}   
    }