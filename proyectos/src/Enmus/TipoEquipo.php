<?php
namespace Prestamos\Enmus;
use Prestamos\Modelos\Equipo;
use Prestamos\Modelos\Laptop;
use Prestamos\Modelos\Proyector;
enum TipoEquipo: string {
    case LAPTOP = 'Laptop';
    case PROYECTOR = 'Proyector';

    public function crearEquipo(string $nombre, string $codigo): Equipo {
        return match($this) {
            self::LAPTOP => new Laptop($nombre, $codigo),
            self::PROYECTOR => new Proyector($nombre, $codigo),
        };
    }
}


?>