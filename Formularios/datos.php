<?php
class Formulario {
    public $nombres = '';
    public $apellidos = '';
    public $fecha_nacimiento = '';
    public $tipo_documento = '';
    public $documento = '';
    public $direccion = '';
    public $telefono = '';
    public $ciudad = '';
    public $email = '';

    public function __construct($nombres, $apellidos, $fecha_nacimiento, $tipo_documento, $documento, $direccion, $telefono, $ciudad, $email) {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->tipo_documento = $tipo_documento;
        $this->documento = $documento;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->ciudad = $ciudad;
        $this->email = $email;
    }

    public function GetDataUser() {
        return $this->apellidos;
    }
}
<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <?php
    include 'Formulario.php';


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $tipo_documento = $_POST["tipo_documento"];
        $documento = $_POST["documento"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $ciudad = $_POST["ciudad"];
        $email = $_POST["email"];
    }
    ?>

    <form action="procesar_formulario.php" method="post">
        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" value="<?php echo isset($nombres) ? $nombres : ''; ?>"><br>
        <!-- Repite lo mismo para los demás campos... -->
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
?>