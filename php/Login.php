<html>
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <title>Cuestionarios - Instituto Joch Jaban</title> 
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/d73fdf4074.js" crossorigin="anonymous"></script>
     <script src="../js/jquery-3.5.0.min.js" type="text/javascript"></script>   
</head>
<body background="../images/fondoLogin.jpg">
  <br>
  <br>
  <center>
 <div class="container pt-1" >
  <div class="row justify-content-sm-center">
    <div class="col-sm-10 col-md-6">
     <div class="card border-info" style="width: 330px; height: 540px">
       <div class="card-body" style="width: 330px">
          <h1><center><div class="card-header"><img src="../images/logo-joch-jaban.png" ></div></center></h1>
		     	<br>
		    	<center><img src="../images/usuariosIcono.png" width="190px" height="100px"></center>
		    	<br>  
            <form action="" method="POST" id="frmLog" style="height: 230px">         
              <div class="form-group">
                <input type="text" class="form-control" maxlength="100" id="txtUsuario1" name="txtUsuario" placeholder="Ingrese el usuario" required autofocus/>
             </div>  
              <div class="form-group">
                <input type="password" class="form-control" maxlength="40" id="txtPassword1" name="txtPassword" placeholder="Ingrese el password" required autofocus/>
                <br>
                <large id="mensajeError" style="color: rgb(187, 2, 2 )" class="form-text text-muted"><?php if(isset($errorLogin)){echo $errorLogin;}?> </large>
                </div>
               <center><button type="submit" class ="btn btn-lg btn-info" style="width:200px; background-color: rgb(41, 152, 164)"> <i class="fas fa-sign-in-alt"> Iniciar Sesión</i> </button></center>
               <br>
               <label>¿Aún no tienes cuenta? <a href="https://es-la.facebook.com/">Registrate</a></label>
            </form>          
        </div>
       </div>
      </div>
     </div>
    </div>
  </center>
</body>
</html>