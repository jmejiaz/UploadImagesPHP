<?php

class loggin{

function showLoggin(){
    session_start();
    if ($_SESSION["existe"])
    {
        header("Location: http://localhost/PhpTelematica/Vista/SubirImagenesVista.php");
        
    }

      
  
?>
                <html><head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>Acceso al sistema</title> </head>
                    <body>
                        <div align="center">
                            <form id="form1" name="form1" method="post" action="../Controlador/Loggin.php">
                            
                            <table width="270" border="0">
                                
                                <tr>
                                    <td width="97"><label>Usuario</label></td>
                                    <td width="163"><label for="contrasena">
                                      <input type="text" name="usuario" id="usuario" />
                                    </label></td>
                                </tr>
                                <tr>
                                    <td><label>Contraseña</label></td>
                                    <td><input type="password" name="contrasena" id="contrasena" /></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td><input type="submit" name="Ingresar" id="Ingresar" value="Ingresar" /></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td><a href="RegisterView.php">Register</a></td>
                                </tr>
                            </table>
                        </form>
                        </div>
                    </body>
                </html>
<?php
}
}


