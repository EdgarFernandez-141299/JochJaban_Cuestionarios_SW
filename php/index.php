<?php

  include_once 'Clases/userVal.php';
  include_once 'Clases/user_session.php';

  $userSession = new UserSession();
  $user = new userVal();

   if(isset($_SESSION['user'])){

    // Sesión Iniciada
    if($user->setUser($userSession->getCurrentUser())== 'Root'){
      include_once 'Superuser/home.php';
    }else if($user->setUser($userSession->getCurrentUser())== 'Admin'){
      include_once 'Admin/home.php';
    }else if($user->setUser($userSession->getCurrentUser())== 'Usuario'){
      include_once 'Usuario/home.php';

    }  
    

    }else if(isset($_POST['txtUsuario']) && isset($_POST['txtPassword'])){
    
    $userForm = $_POST['txtUsuario'];
    $passForm = $_POST['txtPassword'];   

    $user = new userVal();

    if($user->userExists($userForm, $passForm)== 1){ 

        //Usuario Existente
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);  
        include_once 'Superuser/home.php';

      }else if($user->userExists($userForm, $passForm)== 2){
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);  
        include_once 'Admin/home.php';

      }else if ($user->userExists($userForm, $passForm)== 3){
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);  
        include_once 'Usuario/home.php';

      }else{
        //No existe el usuario
        $errorLogin = "Usuario y/o Contraseña incorrecta";
        include_once 'Login.php';
    }
   }else{   
    include_once 'Login.php';
}


?>