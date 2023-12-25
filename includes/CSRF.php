<?php
 session_start();
 
class CSRF
{
    public static function create_token()
    {
        // Generate token
      $token = md5(uniqid(mt_rand(),true));
      $_SESSION['token'] =  $token ;
    //   echo '<input type="hidden" name="token" value="$token">';
        return $token;

    }

    public static function validate_token($token)
    {
        return isset($_SESSION["token"]) && $_SESSION['token'] === $token;
    }
}