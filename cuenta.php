<?php

  class Cuenta {
    protected $CBU;
    protected $balance;
    protected $fechaUltMov;

    public function __construct($CBU){
      $this->setCBU($CBU);
    }

    public function setCBU ($CBU){
      $this->CBU = $CBU;
    }

    public function getCBU (){
      return $this->CBU;
    }
    public function setBalance ($balance){
      $this->balance = $balance;
    }

    public function getBalance (){
      return $this->balance;
    }
    public function setFechaUltMov ($fechaUltMov){
      $this->fechaUltMov = $fechaUltMov;
    }

    public function getFechaUltMov (){
      return $this->fechaUltMov;
    }

    public abstract function debitar($monto, $origen);

    public function acreditar ($monto){
      $this->balance = $this->balance + $monto;
      $this->fechaUltMov = date ();
    }
  }
