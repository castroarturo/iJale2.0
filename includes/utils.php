<?php

//Función para imprimir mensajes
function printMsg($msg, $type)
{
    echo "<div class=\"$type\">";
    if (is_array($msg)) {
        echo "<ul>";
        foreach ($msg as $caca) {
        	echo "<li>$caca</li>\n";
        }
        echo "</ul>";
    } 
    else {
        echo $msg;
    }
    echo "</div>";
}

//Logica para cerrar sesion
if(isset($_GET['logout']) && $_GET['logout'] == 'true'){
    session_destroy();
    header('location: Login.php?loggedOut=true');
}
?>