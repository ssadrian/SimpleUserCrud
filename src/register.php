<?php

require_once("api.php");
require_once("helpers.php");
require_once("models/user.php");

function TryRegisterUser($username, $pwd)
{
  $user = new User($username, $pwd);
  CreateUser($user);

  header("Location: ../");
}

function DoesUserExist($username) {

}
