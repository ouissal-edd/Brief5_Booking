<?php
    include 'db.php';   
    class Signup extends Connexion{ 
      
        public function UserExist($email){
            $sql = 'SELECT * FROM users where email = ?';
            $stmt = $this->conx->prepare($sql);
            $stmt->execute([$email]);
             $count = $stmt->fetchColumn();
             return $count;
        }
    
            
    public function  register($email,$password,$fullname,$idrole){  
        $sql = 'INSERT INTO `users`(`email`, `password`, `fullname`,  `idrole`)  values(?,?,?,?)';
        $stmt = $this->conx->prepare($sql);
        $stmt->execute([$email,$password,$fullname,$idrole]);
    
            
}}