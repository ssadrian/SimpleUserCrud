<?php

require_once("api.php");
require_once("helpers.php");
require_once("models/user.php");

function TryLoginUser($username, $pwd)
{
  $user = new User($username, $pwd);

  if (DoesUserExist($user) === false ||
      DoesPasswordMatch($user->username, $user->pwd) === false) {
    header("Location: ../index.html");
    return false;
  }

  header("Location: /panel.php");
  return true;
}

function DoesPasswordMatch($usernameToFind, $passwordToMatch)
{
  return GetUser($usernameToFind, $passwordToMatch) !== null;
}
