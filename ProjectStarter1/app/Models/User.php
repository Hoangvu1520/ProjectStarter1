<?php

require_once('app/Models/Model.php');
require_once('app/Models/Role.php');

class User extends Model
{
    public function authenticate($data)
    {
        $email = $data['email'];
        $password = $data['password'];
        $roleAdminId = Role::ADMIN;
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = md5('$password') AND role_id={$roleAdminId}";
        dd($sql);
        return $this->getFirst($sql);
    }
}