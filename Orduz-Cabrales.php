<!DOCTYPE html>
<html>
<body>

<?php

class HomeroSimpson {
    public $nombre;
    public $edad;
    public $ocupacion;
    public $frase_favorita;
    
    public function __construct($nombre, $edad, $ocupacion, $frase_favorita) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ocupacion = $ocupacion;
        $this->frase_favorita = $frase_favorita;
    }
    
    public function presentarse() {
        return "Soy $this->nombre, tengo $this->edad años y trabajo como $this->ocupacion, mi frase es $this->frase_favorita" ;
    }
    
    public function decir_frase_favorita() {
        return "$this->nombre dice: '$this->frase_favorita'";
    }
    
    public function cambiar_ocupacion($nueva_ocupacion) {
        $this->ocupacion = $nueva_ocupacion;
        return "$this->nombre ahora trabaja como $this->ocupacion";
    }
}

// Crear dos objetos de la clase HomeroSimpson
$homero1 = new HomeroSimpson("Homero Simpson", 40, "Inspector de seguridad", "Mmm... donas");
$homero2 = new HomeroSimpson("Homero J. Simpson", 38, "Trabajador de la Planta Nuclear de Springfield", "¡Woo-hoo!");

// Imprimir un método
echo $homero1->presentarse();
echo "<br>";
echo "<br>";
echo $homero2->presentarse
();


?> 

</body>
</html>