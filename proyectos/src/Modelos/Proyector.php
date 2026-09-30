<?php

namespace Prestamos\Modelos;

class Proyector extends Equipo {
    public function __construct(public readonly string $nombre, public readonly string $codigo)
    {
        parent::__construct($nombre, $codigo);
    }

    public function diasMaximosPrestamo(): int
    {
        return 1;
    }
}