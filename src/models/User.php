<?php

class User extends UserRepository
{
  private $id;
  private $userName;
  private $password;
  private $firstName;
  private $lastName;

  public function __construct($userName, $password, $firstName, $lastName, $id=0)
  {
    $this->id = $id;
    $this->setUserName($userName);
    $this->setPassword($password);
    $this->setFirstName($firstName);
    $this->setlastName($lastName);
  }

  public function getId()
  {
    return $this->id;
  }

  public function getUserName()
  {
    return $this->userName;
    
  }
  public function setUserName($userName)
  {
    if(preg_match("/[A-z]{3,}/", $userName)){
    $this->userName = htmlspecialchars($userName);
  }
  }

  public function getPassword()
  {
    return $this->password;
  }
  public function setPassword($password)
  {
    if(preg_match("/[A-z]{3,}/", $password)){
      $this->password = htmlspecialchars($password);
  }
}

  public function getFirstName()
  {return $this->firstName;
   
  }
  public function setFirstName($firstName)
  {
    if(preg_match("/[A-z]{3,}/", $firstName)){
      $this->firstName = htmlspecialchars($firstName);
    }
  }

  public function getLastName()
  {
    return $this->lastName;
  }


  public function setLastName($lastName)
  {
    if(preg_match("/[A-z]{3,}/", $lastName)){
      $this->lastName = htmlspecialchars($lastName);
  }
}
}