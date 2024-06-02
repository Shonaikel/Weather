<?php

class Gasto {
    private $descripcion;
    private $monto;

    public function __construct($descripcion, $monto) {
        $this->descripcion = $descripcion;
        $this->monto = $monto;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getMonto() {
        return $this->monto;
    }
}

class RegistroGastos {
    private $listaGastos;

    public function __construct() {
        $this->listaGastos = [];
    }

    public function agregarGasto($descripcion, $monto) {
        $gasto = new Gasto($descripcion, $monto);
        $this->listaGastos[] = $gasto;
    }

    public function obtenerGastos() {
        return $this->listaGastos;
    }

    public function obtenerTotalGastos() {
        $total = 0;
        foreach ($this->listaGastos as $gasto) {
            $total += $gasto->getMonto();
        }
        return $total;
    }
}

// Programa principal
$registro = new RegistroGastos();

// Agregar gastos de ejemplo
$registro->agregarGasto("Comida", 50);
$registro->agregarGasto("Transporte", 30);
$registro->agregarGasto("Entretenimiento", 20);

// Mostrar lista de gastos
echo "Lista de gastos:\n";
foreach ($registro->obtenerGastos() as $gasto) {
    echo "- Descripción: " . $gasto->getDescripcion() . ", Monto: $" . $gasto->getMonto() . "\n";
}

// Mostrar total de gastos
echo "\nTotal de gastos: $" . $registro->obtenerTotalGastos() . "\n";
?>