<?php

namespace src;

class Users {
  public $firstname, $middlename, $lastname, $username, $password;

  public function __construct($firstname, $middlename = null, $lastname, $username, $password) {
    $this->firstname = $firstname;
    $this->middlename = $middlename;
    $this->lastname = $lastname;
    $this->username = $username;
    $this->password = $password;
  }
}
