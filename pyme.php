<?php

  include_once ("cliente.php");
  include_once ("liquidable.php");
  include_once ("persona.php");

  class PYME extends Cliente implements Liquidable{
    protected $CUIT;
    protected $razonSocial;

    public function __construct($CUIT, $razonSocial, $email, $pass){
      parent::__construct($email, $pass);
      $this->CUIT = $CUIT;
      $this->razonSocial = $razonSocial;
    }

    public function setCuit($CUIT){
      $this->CUIT = $CUIT;
    }

    public function getCUIT(){
      return $this->CUIT;
    }

    public function setRazonSocial($razonSocial){
      $this->razonSocial = $razonSocial;
    }

    public function getRazonSocial(){
      return $this->razonSocial;
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

    public function liquidarHaberes(Persona $persona, $monto){
      $persona->balance = $persona->balance + $monto;
      $this->balance = $this->balance - ($monto * 1 / 100);
    }
  }
