<?php

//Defino variables privadas para la clase Cliente

abstract Class Cliente{
  protected $email;
  protected $pass;


    public abstract function getEmail();
    public abstract function setEmail();
    public abstract function setPass();
    public abstract function getPass();

}
