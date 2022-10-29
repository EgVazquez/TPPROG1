<?php

class users
{
    protected $id;
    protected $user;
    protected $name;
    protected $surname;

    public function __construct($user, $name, $surname, $id = null)
    {
        $this->id = $id;
        $this->user = $user;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getUsuario()
    {
        return $this->user;
    }
    public function getNombre()
    {
        return $this->name;
    }
    public function getApellido()
    {
        return $this->surname;
    }
    public function getNombreApellido()
    {
        return "$this->name  $this->surname";
    }
}
