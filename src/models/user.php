<?php

class User
{
  public $guid;
  public $username;
  public $pwd;

  function __construct($username, $pwd)
  {
    $this->guid = User::GUID();
    $this->username = $username;
    $this->pwd = password_hash($pwd, PASSWORD_BCRYPT);
  }

  function ToCsv(): string
  {
    return $this->guid . ", " . $this->username . ", " . $this->pwd . "\n";
  }

  static function GUID(): string
  {
    if (function_exists('com_create_guid')) {
      return trim(com_create_guid(), '{}');
    }

    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
  }
}
