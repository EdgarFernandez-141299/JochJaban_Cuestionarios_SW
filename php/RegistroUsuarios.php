<html>
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <title>Registro De Usuarios - Instituto Joch Jaban</title> 
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/d73fdf4074.js" crossorigin="anonymous"></script>
     <script src="../js/jquery-3.5.0.min.js" type="text/javascript"></script>  
     <script>function regresar(){window.location="index.php";}</script> 
</head>
<body>
<center>
<div class="card text-white bg-info">
   <div class="card-header">
       <h3> Registro De Usuarios</h3>
   </div>

<div class="card-body">

<!-- Datos Generales -->
<h4 class="card-title" align = "left"> Datos Generales: </h4>
<br>
<form>
<div class="form-row">          
          
      <div class="form-group col-md-4">
           <label for="etiNombre">Nombre(s):</label>
           <input type="text" class="form-control" id="txtNombre" autofocus required/>
       </div>

    <div class="form-group col-md-4">
         <label for="etiAP">Apellido Paterno: </label>
         <input type="text" class="form-control" id="txtAP" autofocus required/>
    </div>

    <div class="form-group col-md-4">
         <label for="etiAM">Apellido Materno: </label>
         <input type="text" class="form-control" id="txtAM" autofocus required/>
    </div>

    <div class="form-group col-md-4">
         <label for="etiGenero">Genero: </label>
         <select class="form-control" id="selGenero">
            <option>Seleccionar...</option>
            <option>Masculino</option>
            <option>Femenino</option>          
        </select>
    </div>

    <div class="form-group col-md-4">
         <label for="etiEdoCivil">Estado Civil: </label>
         <select class="form-control" id="selEdocivil">
            <option>Seleccionar...</option>
            <option>Soltero</option>
            <option>Casado</option> 
            <option>Divorciado</option>      
            <option>Unión Libre</option>  
            <option>Viudo</option>          
        </select>
    </div>

    <div class="form-group col-md-4">
         <label for="etiEscolaridad">Escolaridad: </label>
         <select class="form-control" id="selEscolaridad">
            <option>Seleccionar...</option>
            <option>Sin Estudios</option>
            <option>Primaria</option> 
            <option>Secundaria</option>      
            <option>Bachillerato</option>  
            <option>Técnico</option>
            <option>Licenciatura</option>
            <option>Maestría</option>
            <option>Doctorado</option>
        </select>        
    </div>
</div>


<!-- Datos Laborales -->

<br>
<h4 class="card-title" align = "left"> Datos Laborales: </h4>
<br>

<div class="form-row">          
          
       <div class="form-group col-md-4">
           <label for="etiCenTrab">Centro De Trabajo:</label>
           <input type="text" class="form-control" id="txtNombre" autofocus required/>
       </div>

       <div class="form-group col-md-4">
         <label for="etiPuesAct">Puesto/Actividad: </label>
         <input type="text" class="form-control" id="txtPuesAct" autofocus required/>
       </div>

        <div class="form-group col-md-4">
         <label for="etiDepto">Departamento/Area: </label>
         <input type="text" class="form-control" id="txtDepto" autofocus required/>
        </div>

        
        <div class="form-group col-md-12">
         <label for="etiAnti">Antigüedad: </label>       
        </div>

        <div class="form-group col-md-6">
        <label for="etiAniosAnt">Años: </label>
        <select class="form-control" id="selAniosAnt">
            <option>Seleccionar...</option>
            <option>1</option>
            <option>2</option> 
            <option>3</option>  
            <option>4</option>      
            <option>5</option>      
            <option>6</option>      
            <option>7</option>      
            <option>8</option>      
            <option>9</option>      
            <option>10</option>      
            <option>11</option>      
            <option>12</option>      
            <option>13</option>      
            <option>14</option>      
            <option>15</option>      
            <option>16</option>      
            <option>17</option>      
            <option>18</option>      
            <option>19</option>      
            <option>20</option>    
        </select>             
        </div>


        <div class="form-group col-md-6">
        <label for="etiMesAnt">Meses: </label>
        <select class="form-control" id="selMesAnt">
            <option>Seleccionar...</option>
            <option>1</option>
            <option>2</option> 
            <option>3</option>      
            <option>4</option>  
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
        </select>             
        </div>


        <div class="form-group col-md-12">
         <label for="etiAnti">Experiencia Laboral: </label>       
        </div>

        <div class="form-group col-md-6">
        <label for="etiAniosExp">Años: </label>
        <select class="form-control" id="selAniosExp">
            <option>Seleccionar...</option>
            <option>1</option>
            <option>2</option> 
            <option>3</option>  
            <option>4</option>      
            <option>5</option>      
            <option>6</option>      
            <option>7</option>      
            <option>8</option>      
            <option>9</option>      
            <option>10</option>      
            <option>11</option>      
            <option>12</option>      
            <option>13</option>      
            <option>14</option>      
            <option>15</option>      
            <option>16</option>      
            <option>17</option>      
            <option>18</option>      
            <option>19</option>      
            <option>20</option>    
        </select>             
        </div>


        <div class="form-group col-md-6">
        <label for="etiMesExp">Meses: </label>
        <select class="form-control" id="selMesExp">
            <option>Seleccionar...</option>
            <option>1</option>
            <option>2</option> 
            <option>3</option>      
            <option>4</option>  
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
        </select>             
        </div>


        <br>
        <div class="form-group col-md-4">
        <label for="etiTipoPues">Tipo De Puesto: </label>
        <select class="form-control" id="selTipoPues">
            <option>Seleccionar...</option>
            <option>Operativo</option>
            <option>Administrativo</option> 
            <option>Supervisión</option>      
            <option>Gerencia</option>  
            <option>Dirección</option>
        </select>             
        </div>


        <div class="form-group col-md-4">
        <label for="etiTipoCont">Tipo De Puesto: </label>
        <select class="form-control" id="selTipoCont">
            <option>Seleccionar...</option>
            <option>Por Obra o Proyecto</option>
            <option>Temporal</option> 
            <option>Tiempo Determinado</option>      
            <option>Tiempo Indeterminado</option>  
            <option>Honorarios</option>
        </select>             
        </div>

        <div class="form-group col-md-4">
        <label for="etiTipoPers">Tipo De Personal: </label>
        <select class="form-control" id="selTipoPers">
            <option>Seleccionar...</option>
            <option>Becario</option>
            <option>Sindicalizado</option> 
            <option>Confianza</option>      
            <option>Ninguno</option>  
        </select>             
        </div>


        <div class="form-group col-md-6">
        <label for="etiTipoJorn">Tipo De Jornada: </label>
        <select class="form-control" id="selTipoJorn">
            <option>Seleccionar...</option>
            <option>Diurna(06:00-20:00 hrs.)</option>
            <option>Nocturna(20:00-06:00 hrs.)</option> 
            <option>Mixta</option>    
        </select>             
        </div>

        <div class="form-group col-md-6">
        <label for="etiRolaTurn">¿Rola Turnos?</label>
        <select class="form-control" id="selRolaTurn">
            <option>Seleccionar...</option>
            <option>Si</option>   
            <option>No</option>   
        </select>             
        </div>
</div> 
          <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"> Registrar</i></button>
          <button type="button" onClick="regresar()" class="btn btn-primary"><i class="fas fa-undo-alt"> Atras </i></button>
    </form>
   </div>
</div>
<center>
</body>
</html>