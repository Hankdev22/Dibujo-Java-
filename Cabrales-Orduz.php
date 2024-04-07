<!DOCTYPE html>
<html>
<body>

<?php
class Rosa {
    // Atributos
    var $colorPetalos;
    var $colorTallo;
    var $cantidadEspinhas;

    // Constructor
    function Rosa($colorPetalos, $colorTallo, $cantidadEspinhas) {
        $this->colorPetalos = $colorPetalos;
        $this->colorTallo = $colorTallo;
        $this->cantidadEspinhas = $cantidadEspinhas;
    }

    // Método para dibujar la rosa
    function dibujar() {
        echo "Una rosa con pétalos de color " . $this->colorPetalos . ", tallo de color " . $this->colorTallo . " y " . $this->cantidadEspinhas . " espinas.";
    }

    // Método para colorear la rosa
    function colorear($nuevoColorPetalos, $nuevoColorTallo) {
        $this->colorPetalos = $nuevoColorPetalos;
        $this->colorTallo = $nuevoColorTallo;
        echo "La rosa ha sido coloreada.";
    }

    // Método para agregar espinas a la rosa
    function agregarEspinhas($cantidad) {
        $this->cantidadEspinhas += $cantidad;
        echo "Se han agregado " . $cantidad . " espinas a la rosa.";
    }
}

// Crear objeto rosa
$rosa1 = new Rosa("marron", "blanco", 20);
$rosa2 = new Rosa ("verde", "roja", 25);

// Imprimir el método dibujar de la rosa
echo "Rosa 1: ";
$rosa1->dibujar();
echo "<br>";
echo "Rosa 2: ";
$rosa2->dibujar();
?> 

</body>
</html>
