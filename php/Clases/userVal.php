<?php

include_once 'database.php';

class userVal extends database{
  
    private $nombre;
    private $username;
    private $apellidoPat;
    private $apellidoMat;
    private $tipoUser;
    private $ban;


    public function userExists($user, $pass){
        $query = $this->connect()->prepare('SELECT nombre_Usuario, password_Usuario, tipo_Usuario, nombres_Trabajador, apellidoPat_Trabajador, apellidoMat_Trabajador FROM Trabajador WHERE nombre_Usuario = :user AND password_Usuario = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);
        $tipoUsuario = 0;

        $row = $query->fetch(PDO::FETCH_NUM);

        if($row == true){
            $rol = $row[2];
            
            $_SESSION['user'] = $rol;

            switch($rol){
                case 'Superuser':
                    $tipoUsuario=1;
                    break;

                case 'Admin':
                    $tipoUsuario=2;
                    break;

                case 'Usuario':
                    $tipoUsuario=3;
                    break;
    

                default:
                $tipoUsuario=0;
                break;
            }

        }

        return $tipoUsuario;
       
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT nombre_Usuario, password_Usuario, tipo_Usuario, nombres_Trabajador, apellidoPat_Trabajador, apellidoMat_Trabajador FROM Trabajador WHERE nombre_Usuario = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombres_Trabajador'];
            $this->username = $currentUser['nombre_Usuario'];
            $this->apellidoPat = $currentUser['apellidoPat_Trabajador'];
            $this->apellidoMat = $currentUser['apellidoMat_Trabajador'];
            $ban = $this->tipoUser = $currentUser['tipo_Usuario'];                      
           
        }        
        return $ban;
    }

    public function getNombreyApellidoPatyMat(){
        return $this->nombre.' '.$this->apellidoPat. ' '.$this->apellidoMat;
    }
}

?>