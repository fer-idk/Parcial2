<?php

namespace Prestamos\Modelos;

abstract class Equipo {

public function __construct(public readonly string $nombre, public readonly string $codigo)
{
    
}

//definir maximo dias de prestamos maximo 

abstract function diasMaximosPrestamo(): int;

}

?>