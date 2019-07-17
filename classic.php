<?php

  class Classic extends Cuenta{

    public function debitar($monto, $origen){
      if ($origen == 'Banelco') {
        $this->balance = $this->balance - $monto - ($monto * 5 / 100);
      } elseif ($origen == 'Link') {
        $this->balance = $this->balance - $monto - ($monto * 10 / 100);
      } else{
          $this->balance = $this->balance - $monto;
      }
      $this->fechaUltMov = date ();
    }

    public function acreditar ($monto){
      parent::acreditar($monto);
      $this->balance = $this->balance - ($monto * 5 / 100);
    }
  }
