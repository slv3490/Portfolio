<?php 

namespace Model;

class Email extends ActiveRecord {
    public $nombre;
    public $email;
    public $asunto;
    public $mensaje;

    public function __construct($args = [])
    {
        $this->nombre = $args["nombre"] ?? "";
        $this->email = $args["email"] ?? "";
        $this->asunto = $args["asunto"] ?? "";
        $this->mensaje = $args["mensaje"] ?? "";
    }

    public function validar() {
        
        if(!$this->nombre) {
            self::$alertas["error"][] = "El nombre es obligatorio";
        }
        if(!$this->email) {
            self::$alertas["error"][] = "El email es obligatorio";
        } else if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            self::$alertas["error"][] = "Formato no valido";
        }
        if(!$this->asunto) {
            self::$alertas["error"][] = "El asunto es obligatorio";
        }
        if(!$this->mensaje) {
            self::$alertas["error"][] = "El mensaje es obligatorio";
        }
        return self::$alertas;
    }
}