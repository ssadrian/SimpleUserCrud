<?php

require_once("sources.php");

function GetUsers()
{
}

function GetUser($username, $pwd)
{
}

function CreateUser($user)
{
  global $usersSource;

  file_put_contents($usersSource, $user->ToCsv(), FILE_APPEND);
}

function UpdateUser($guidToUpdate, $newUsername = null, $newPassword = null)
{
}

function DeleteUser($guidToDelete)
{
}
