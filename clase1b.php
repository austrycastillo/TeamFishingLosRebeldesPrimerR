<?php
class Cliente{
    public $nombre=NULL;
    public $apellido=NULL;
    public function __construct(Array $datos)
    {
        $this->nombre=isset($datos['nombre'])?$datos['nombre']:'';
        $this->apellido=isset($datos['apellido'])?$datos['apellido']:'';
    }
    public function guardar(){
        if(empty($this->nombre)){
            throw new Exception("El nombre no puede estar vacío");
        }
        if(empty($this->apellido)){
            throw new Exception("El apellido no puede estar vacío");
        }
        if(strlen($this->nombre)<3){
            throw new Exception("El nombre no puede ser tan corto");
        }
        if(strlen($this->apellido)<3){
            throw new Exception("El apellido no puede ser tan corto");
        }
        echo "<p style=color:green>aquí haría el proceso de guardar todo en la bd</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
    <input type="text" name="nombre"  placeholder="Nombre">
    <input type="text" name="apellido" placeholder="Apellido">
    <button name="guardar">Guardar</button>
    </form>
    <?php
if(isset($_POST['guardar'])){
    try{
        echo "...preparando todo para cargar la información al sistema";
        $obj=new Cliente($_POST);
        $obj->guardar();
        echo "<hr>";
        echo "Datos guardados correctamente";
    }catch(Exception $e){
        echo "<p style=color:red>..OH OH tenemos inconvenientes que pena</p>";
        echo "<hr>";
        echo $e->getMessage();
    }
}
    ?>
</body>
</html>