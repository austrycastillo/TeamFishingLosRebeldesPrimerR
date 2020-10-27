<?php
//CREAR LAS SIGUIENTES CLASES
//A - MOTOR con los métodos arrancar y apagar
class Motor
{
    //atributos
    private $modelo;
    private $km;
    private $serial;
    public $patente;
    //métodos
    function __construct($m, $k, $s, $p)
    {
        $this->modelo = $m;
        $this->km = $k;
        $this->serial = $s;
        $this->patente = $p;
    }
    public function arrancar()
    {
        echo " rummmm arrancando con ";
        echo $this->km;
    }
    public function apagar()
    {
        echo " stop la patente ";
        echo $this->patente;
        echo "<hr>";
    }
}

// $m1=new Motor("6.0",5000,"abc123","111");
// $m2=new Motor("4 x 4",158080,"def987","222");
// $m3=new Motor("3.1",0,"xyz853","333");

// $m1->arrancar();
// $m1->apagar();

// $m2->arrancar();
// $m2->apagar();

// $m3->arrancar();
// $m3->apagar();

// $m1->patente=1212;
// $m1->arrancar();
// $m1->apagar();


//B - Puerta métodos para abrir y cerrar, setters y getters

class Puerta
{
    //atributos
    private $tamaño;
    private $codigo;
    private $color;
    //métodos 
    public function setTamaño($t)
    {
        $this->tamaño = $t;
    }
    public function setCodigo($c)
    {
        $this->codigo = $c;
    }
    public function setColor($cl)
    {
        $this->color = $cl;
    }
    public function getTamaño()
    {
        return $this->tamaño;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function abrirPuerta()
    {
        echo "La puerta de color $this->color";
        echo "<b> está abriendo</b>";
    }
    public function cerrarPuerta()
    {
        echo "La puerta de color $this->color";
        echo "<b> está cerrando</b>";
    }
}

// $p1=new Puerta();
// $p1->setColor("azul");
// $p1->setTamaño("2");
// $p1->setCodigo("123");
// echo "La puerta es de color {$p1 -> getColor()} y el tamaño es {$p1 -> getTamaño()} cuyo código es {$p1->getCodigo()}";

/*
modificadores de acceso>
public->accedemos desde todos lados
private-> acceder a la clase que la definió
protected ->acceder a las clases heredadas y a la que definió
*/
class Operacion
{
    public $valor1;
    public $valor2;
    protected $resultado;
    public function cargarA($v1)
    {
        $this->valor1 = $v1;
    }
    public function cargarB($v2)
    {
        $this->valor2 = $v2;
    }
    public function imprimir()
    {
        echo $this->resultado;
    }
    public function operar()
    {
        $this->resultado = $this->valor1 * $this->valor2;
    }
}

class Suma extends Operacion
{
    public function operar()
    {
        $this->resultado = $this->valor1 + $this->valor2;
    }
}

class Resta extends Operacion
{
    public function operar()
    {
        $this->resultado = $this->valor1 - $this->valor2;
    }
}

$op1=new Suma();
$op1->cargarA(20);
$op1->cargarB(5);
$op1->operar();
echo "El resultado  de la suma es: ";
$op1->imprimir();

echo "<hr>";
$op2=new Resta();
$op2->cargarA(80);
$op2->cargarB(20);
$op2->operar();
echo "El resultado  de la resta es: ";
$op2->imprimir();

echo "<hr>";
$op3=new Operacion();
$op3->cargarA(40);
$op3->cargarB(20);
$op3->operar();
echo "El resultado  de la multiplicación es: ";
$op3->imprimir();