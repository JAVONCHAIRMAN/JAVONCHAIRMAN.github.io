<?php

    $conexion = mysqli_connect('b7sjcn8sknqp6gwbhtna-mysql.services.clever-cloud.com', 'u2eghudgnfirfaoi','oYV02D01NBDIdqtYzzdL','b7sjcn8sknqp6gwbhtna');
  if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
    }
    function showerror( )   {
    die("Se ha producido el siguiente error: " . mysqli_error($conexion));
    }

?>