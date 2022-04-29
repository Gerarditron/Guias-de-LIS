<?php

namespace Model;

class User extends ActiveRecord
{
    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $genero;
    public $ciudad;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? NULL;
        $this->nombre = $args['nombre'] ?? "";
        $this->apellido = $args['apellido'] ?? "";
        $this->email = $args['email'] ?? "";
        $this->genero = $args['genero'] ?? "";
        $this->ciudad = $args['ciudad'] ?? "";
    }

    public function getUser()
    {
        $query = 'SELECT * FROM usuarios';
        $result = self::$db->query($query);
        if ($result->num_rows > 0) {
            $valor = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $valor;
        }
        return [];
    }

    public function getDeleteUser($id)
    {
        $query = 'SELECT * FROM usuarios WHERE id=' . $id;
        $result = self::$db->query($query);
        if ($result->num_rows > 0) {
            $valor = $result->fetch_assoc();
            return $valor;
        }
        return [];
    }

    public function postDeleteUser($id)
    {
        $query = 'DELETE FROM usuarios WHERE id=' . $id;
        self::$db->query($query);
    }
    public function postUser()
    {
        $query = 'INSERT into usuarios(first_name,last_name,email,gender,city) VALUES("' . $this->nombre . '","' . $this->apellido . '","' . $this->email . '","' . $this->genero . '","' . $this->ciudad . '")';
        self::$db->query($query);
    }

    public function getEditUser($id)
    {
        $query = 'SELECT * FROM usuarios WHERE id=' . $id;
        $result = self::$db->query($query);
        if ($result->num_rows > 0) {
            $valor = $result->fetch_assoc();
            return $valor;
        }
        return [];
    }

    public function postEditUser()
    {
        $query = 'UPDATE usuarios SET first_name="' . $this->nombre . '", last_name="' . $this->apellido . '", email="' . $this->email . '", gender="' . $this->genero . '", city="' . $this->ciudad . '" WHERE id=' . $this->id;
        self::$db->query($query);
    }
}
