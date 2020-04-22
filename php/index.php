<?php

  include_once 'Clases/userVal.php';
  include_once 'Clases/user_session.php';


  $userSession = new UserSession();
  $user = new userVal();


  if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once 'Admin/home.php';

     }else if(isset($_POST['txtUsuario']) && isset($_POST['txtPassword'])){
    
    $userForm = $_POST['txtUsuario'];
    $passForm = $_POST['txtPassword'];   

    $user = new userVal();

    if($user->userExists($userForm, $passForm)){ 
        //Usuario Existente
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include_once 'Admin/home.php';

      }else{
        //No existe el usuario
        $errorLogin = "Usuario y/o password incorrecto";
        include_once 'Login.php';
    }
   }else{   
    include_once 'Login.php';
}





  



?>