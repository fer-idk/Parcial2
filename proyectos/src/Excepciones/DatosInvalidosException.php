<?php

class DatosInvalidosException extends Exception {
    public function __construct($message = "Datos inválidos", $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

?>

