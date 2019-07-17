<?php

  require_once ("cuenta.php");
//Defino variables privadas para la clase Cliente

  abstract class Cliente{
    protected $email;
    protected $pass;
    protected $cuenta;

    public function __construct($email, $pass, Cuenta $cuenta){
      $this->email = $email;
      $this->pass = $pass;
      $this->cuenta = $cuenta;
    }

    public abstract function getEmail();
    public abstract function setEmail();
    public abstract function setPass();
    public abstract function getPass();

    public function cobroMensual(){
      if($cuenta instanceof Classic){
        $this->balance = $this->balance - 100;
      } elseif ($cuenta instanceof Gold) {
        if (isset($this->apellido)) {
          $this->balance = $this->balance - (stlen($this->apellido) * 10);
        } elseif (isset($this->razonSocial)) {
          $this->balance = $this->balance - (stlen($this->razonSocial) * 5);
        } elseif ($cuenta instanceof Platinum) {
          $this->balance = $this->balance - ($this->balance * 10 / 100);
        } elseif ($cuenta instanceof Black) {
          $date = '2016/09/28';
          $weekday = date('l', strtotime($date));
          $this->balance = $this->balance - 500 - (100 * $weekday);
        }
      }
    }
}
