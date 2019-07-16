<?php

  include_once ("cliente.php");

  class Multinacional extends Cliente{
    protected $CUIT;
    protected $razonSocial;

    public function __construct($CUIT, $razonSocial, $email, $pass){
      $this->CUIT = $CUIT;
      $this->razonSocial = $razonSocial;
      $this->email = $email;
      $this->pass = $pass;
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
  }
