<?php
$path = dirname(__FILE__);
$file = $path.'/files/exemplo.txt'; 
$content = '';
if (file_exists($file) && is_readable($file)) {
$content = file_get_contents($file);

}
else {
        $content = 'O ficheiro solicitado nao foi encontrado ou esta protegido';
    }
?>
<html>
   <head>
     <title>file get contents</title>
   </head>
   <body>
     <p><b><?php echo $content;?></b></p>
  </body>
</html>