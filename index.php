<!doctype html public "-//W3C//DTD HTML 4.0 //ES"> 
<html>
<head>
       <title</title>
	   <meta name="viewport" content="width=device-width"/>
</head>
<body>

<?

        $conexion=mysql_connect(" "," "," ");
          mysql_select_db(" ",$conexion);
        $usuario=$_POST["usuarioindex"];
        $clave=$_POST["clave"];
        $tabla=mysql_query (" ",$conexion);
        $numerodefilas=mysql_num_rows($tabla);
        #echo "$numerodefilas";
        //para leer las filas
                $fila=mysql_fetch_row($tabla);

                if ($fila[0]==$usuario)
                {
                    $mantenerusuario="$usuario";
                }
                else
                {
                    $errorusuario="Usuario Incorrecto";
                }
                if ($fila[1]==$clave)
                {
                    $clavecorrecta="si";
                }
                else
                {
                    $errorclave="Clave incorrecta";
                }
           echo "
             <form action='index.php' method='post'>
             Usuario: <input type='text' name='usuarioindex' value='$mantenerusuario'>";echo "$errorusuario";
             echo"
             <br>
             Contraseña: <input type='password' name='clave'>";echo "$errorclave";
             echo"

             <br><br>
             <input type='submit' name='enviar' value='enviar'>
             </form>";
           if ($numerodefilas=='1' && $fila[1]==$clave)
           {
			   $_SESSION["usuario"]=$_POST["usuarioindex"];
               echo "<br>.<meta http-equiv='refresh' content='0;URL=menu.php'>";
           }
      ?>
</body>
</html>
