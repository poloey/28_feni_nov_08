<?php
class Query  {
  protected $connection;
  public function __construct($db)
  {
    $this->connection = $db;
  }
  public function registerUser ($array) {
    $name = $array['name'];
    $email = $array['email'];
    $password = $array['password'];
    $sql = "insert into users (name, email, password) values ('$name', '$email', '$password')";
    $statement = $this->connection->prepare($sql);
    return $statement->execute();
  }

}