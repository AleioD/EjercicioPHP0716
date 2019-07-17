<?php

  include_once ("cliente.php");

  class Persona extends Cliente {
    protected $nombre;
    protected $apellido;
    protected $documento;
    protected $nacimiento;

    public function __construct($nombre, $apellido, $documento, $nacimiento, $email, $pass){
      parent::__construct($email, $pass);
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->documento = $documento;
      $this->nacimiento = $nacimiento;
    }

    public function setNombre($nombre){
      $this->nombre = $nombre;
    }
    public function getNombre(){
      return $this->nombre;
    }

    public function setApellido($apellido){
      $this->apellido = $apellido;
    }
    public function getApellido(){
      return $this->apellido;
    }

    public function setDocumento($documento){
      $this->documento = $documento;
    }
    public function getDocumento(){
      return $this->documento;
    }

    public function setNacimiento($nacimiento){
      $this->nacimiento = $nacimiento;
    }
    public function getNacimiento(){
      return $this->nacimiento;
    }

    public function setEmail($email){
      $this->email = $email;
    }
    public function getEmail(){
      return $this->email;
    }

    public function setPass($pass){
      $this->pass = $pass;
    }
    public function getPass(){
      return $this->pass;
    }
  }
