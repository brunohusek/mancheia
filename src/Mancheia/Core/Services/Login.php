<?php

namespace Mancheia\Core\Services;

class Login {

  public function Login($conn,$username,$password) {
    //Check for user and password
    $sql = $conn->prepare('SELECT user_id,account_id,name,status FROM users WHERE email = :username AND password=PASSWORD(:password) LIMIT 1');
    $sql->bindValue(':username', $username);
    $sql->bindValue(':password', $password);
    $sql->execute();

    if($sql->rowCount()==0) {

      //Checking if user exists
      $sql = $conn->prepare('SELECT user_id,account_id,name,status FROM users WHERE email = :username');
      $sql->bindValue(':username', $username);
      $sql->execute();
      if($sql->rowCount()==0) {
        return "Usuário e senha inválidos.";
      } else {
        return "Senha inválida para este usuário.";
      }

    } elseif($sql->rowCount()==1) {

      $result = $sql->fetch();
      //Checking for user status
      if($result['status']<>1) {
        return "Este usuário está inativo.";
      } else {

        //Login
        return $result['name'];
      }

    }
  }
}
