<?php
define("HOST", "localhost");
define("USUARIO", "root"); // Recuerda no usar root en un proyecto real
define("CLAVE", "");
define("BD", "dash_db");    
function conectObj(){
   $my = new mysqli(HOST, USUARIO, CLAVE, BD);
   if($my->connect_errno){
       echo "<p>No se ha logrado la conexión</p>";
       exit(0);
   }else return $my;
}