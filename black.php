<?php

  class Black extends Cuenta{

    public function debitar($monto, $origen){
      $this->balance = $this->balance - $monto;
      $this->fechaUltMov = date ();
  }

  public function acreditar ($monto){
    if($monto > 1000000){
      parent::acreditar($monto);
      $this->balance = $this->balance - ($monto * 4 / 100);
    } else {
      parent::acreditar($monto);
    }
  }
}
