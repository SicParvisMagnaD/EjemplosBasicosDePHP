<?php
    // dependiendo de la hora del día cambiamos el saludo
    if (date('a') == 'pm') {
        $saludo = 'Buenas tardes/noches!';
    } else {
        $saludo = 'Buenos días!';
    }
?>
<html>
<head>
    <title>Ejemplo</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f7f7f7; text-align: center; margin-top: 60px; }
        h1 { color: #2b4c7e; }
    </style>
</head>
<body>
<h1><?php echo $saludo; ?></h1>
</body>
</html>