<?php

  class Gold extends Cuenta{

    public function debitar($monto, $origen){
      if ($origen == 'Banelco') {
        $this->balance = $this->balance - $monto;
      } elseif ($origen == 'Link') {
        $this->balance = $this->balance - $monto - ($monto * 5 / 100);
      } else{
          $this->balance = $this->balance - $monto;
      }
      $this->fechaUltMov = date ();
    }

    public function acreditar ($monto){
      if($monto < 25000){
        parent::acreditar($monto);
        $this->balance = $this->balance - ($monto * 3 / 100);
      } else {
        parent::acreditar($monto);
      }
    }
  }
