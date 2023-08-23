<?php

include './Formulario/datos.php';

    public $nombres ='Diego Fernando';
    public $apellidos ='Manrique Espinosa';
    public $fecha_nacimiento ='28/01/2004';
    public $tipo_documento ='CC';
    public $documento ='1013057812';
    public $direccion ='calle21 #54- 20';
    public $telefono ='3215487952';
    public $ciudad ='Bogota';
    public $email ='siuuuuu@gmail.com';
    

    $userValues = new FormPersonal($nombres ,$apellidos, $fecha_nacimiento, $tipo_documento, $documento, $telefono, $direccion, $ciudad, $email);

    echo userValues->GetDataUser();

?>



