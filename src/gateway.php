<?php

require_once("login.php");
require_once("register.php");

$username = $_POST["username"] ?? "";
$pwd = $_POST["pwd"] ?? "";
$action = $_POST["submit"] ?? "";

switch ($action) {
  case "login":
    TryLoginUser($username, $pwd);
    break;

  case "register":
    TryRegisterUser($username, $pwd);
    break;

  default:
    break;
}
