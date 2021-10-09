<html>
    <link rel="stylesheet" href="css/style.css">
<?php

# Iniciar sesión para usar $_SESSION
session_start();

# Y ahora leer si NO hay algo llamado usuario en la sesión,
# usando empty (vacío, ¿está vacío?)
if (empty($_SESSION["usuario"])) {
    # Lo redireccionamos al formulario de inicio de sesión
    header("Location: formulario.html");
    # Y salimos del script
    exit();
}

# No hace falta un else, pues si el usuario no se loguea, todo lo de abajo no se ejecuta
echo "Quieres ver tus codigo?";
echo "<br>";
    #creamos una funcion que nos proporcione de manera aleatoria los codigos 

    function runMyFunction() {
        $entrada = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
        $claves_aleatorias = array_rand($entrada, 7);
        echo $entrada[$claves_aleatorias[0]] . "\n";
        echo $entrada[$claves_aleatorias[1]] . "\n";
        echo $entrada[$claves_aleatorias[2]] . "\n";
        echo $entrada[$claves_aleatorias[3]] . "\n";
        echo $entrada[$claves_aleatorias[4]] . "\n";
        echo $entrada[$claves_aleatorias[5]] . "\n";
        echo $entrada[$claves_aleatorias[6]] . "\n";;
    }

    #Repetimos tantas vezes como codigos se den en la pagina,en este caso 3 por persona
    if (isset($_GET['hello'])) {
        echo "este es tu codigo:";
        runMyFunction();
        echo "<br>";
        
        if (isset($_POST['aceptado'])) {
             echo "canjeado correctamente";
             } 
     echo "<p><a href='#popup'>canjear codigo</a></p>";
    }
    echo "<br>";
?>
<div id="popup" class="overlay">
            <div id="popupBody">
                <h2>Canjeado correctamente</h2>
                <a id="cerrar" type="hidden" href="#">&times;</a>
                <div class="popupContent">
                    <p>Que tenga un buen dia</p>
                </div>
                <a href="logout.php">Cerrar sesión</a>
            </div>
        </div>
<a href='secreta.php?hello=true'>Ver mi codigo</a><br>
<!-- Y aprovechando, le indicamos al usuario un enlace para salir-->
<a href="logout.php">Cerrar sesión</a>
</html>
