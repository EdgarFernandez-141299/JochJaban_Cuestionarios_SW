<?php
include_once 'database.php';

class userVal extends database{
  
    private $nombre;
    private $username;


    public function userExists($user, $pass){
        $query = $this->connect()->prepare('SELECT * FROM Trabajador WHERE nombre_Usuario = :user AND password_Usuario = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM Trabajador WHERE nombre_Usuario = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombres_Trabajador'];
            $this->username = $currentUser['nombre_Usuario'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}

?>