<?php

class Producto
{
    private $id_producto;
    private $descripcion;
    private $costo;
    private $impuesto;
    private $id_tipoProducto;
    private $marca;
    private $precio;
    private $fecha_vencimiento;
    private $codigoBarra;
    private $estado;

    public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}