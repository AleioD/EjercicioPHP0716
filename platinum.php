<?php

  class Platinum extends Cuenta{

    public function debitar($monto, $origen){
      if($this->getBalance() >= 5000){
        $this->balance = $this->balance - $monto;
      } else {
        $this->balance = $this->balance - $monto - ($monto * 5 / 100);
      }
      $this->fechaUltMov = date ();
    }

    public function acreditar ($monto){
      parent::acreditar($monto);
    }
  }
