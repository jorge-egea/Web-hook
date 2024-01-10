<?php
/**
* SCRIPT PARA EJECUTAR COMANDOS EN EL SERVIDOR
*
*/
// Creamos un array con los comandos que queramos
$commands = array(
'echo $PWD',
'whoami',
'git pull',
'git status',
'git submodule sync',
'git submodule update',
'git submodule status',
);
// Ejecutamos los comandos para después mostrarlos por pantalla
$output = '';
foreach($commands AS $command){
// Ejecución de los comandos
$tmp = shell_exec($command);
// Generamos el output
$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
$output .= htmlentities(trim($tmp)) . "\n";
}
// Creamos el código html por si se quisiera ejecutar el deploy manualmente
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>SCRIPT PARA DESPLEGAR AUTOMÁTICAMENTE</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<pre>
<?php echo $output; ?>
</pre>
</body>
</html>