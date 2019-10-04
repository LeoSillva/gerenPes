<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $connection = 'mysql';
	protected $table = 'usuario';
	protected $primaryKey = 'id';
    public $timestamps = false;

    public static $id = 'id';
    public static $nome = 'nome';
    public static $email = 'email';

    public function getId()
    {
        return $this->attributes[Usuario::$id];
    }
    public function getNome()
    {
        return $this->attributes[Usuario::$nome];
    }

    public function setNome($valor)
    {
        $this->attributes[Usuario::$nome] = $valor;
    }

    public function getEmail()
    {
        return $this->attributes[Usuario::$email];
    }

    public function setEmail($valor)
    {
        $this->attributes[Usuario::$email] = $valor;
    }
}
