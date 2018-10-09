<?php
define("MAXSIZE", 100);
define("IVA", 1.21);

echo "El valor del IVA es de: " . IVA;
echo "<br> El valor del IVA es de: " . constant("IVA");

include ('lang/es.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo TITULO_WEB; ?></title>
</head>
<body>
<h1><?php echo ENCABEZADO_PORTADA; ?></h1>
</body>
</html>