<?php
function generate_password($password_length) {
  $password = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+=-[]{};:,.<>?',
   ceil($password_length/strlen($x)) )),1,$password_length);
  return $password;
}
?>
