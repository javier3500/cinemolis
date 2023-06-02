<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title> Formulario de Acceso </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="author" content="Videojuegos & Desarrollo">
        <meta name="description" content="Ejemplo de formulario de acceso basado en HTML5 y CSS">
        <meta name="keywords" content="login,formulariode acceso html">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="../css/registro.css">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
    
    <body>
    
        <div id="contenedor">
            
            <div id="contenedorcentrado">
                <div id="login">
                    <form id="loginform">
                        <label for="correo">correo</label>
                        <input id="correo" type="text" name="correo" placeholder="correo" required>
                        <label for="usuario">correo</label>
                        <input id="usuario" type="text" name="usuario" placeholder="Usuario" required>
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" placeholder="Contraseña" name="password" required>
                        <label for="password_2">Validacion de Contraseña</label>
                        <input id="password_2" type="password" placeholder="retype the password" name="password_2" required>
                        <button type="submit" title="Ingresar" name="Ingresar">Register</button>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>