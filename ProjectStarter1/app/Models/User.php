<?php

require_once('app/Models/Model.php');
require_once('app/Models/Role.php');

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['id','role_id','email','password'];
    public function authenticate($data)
    {
        $email = $data['email'];
        $password = $data['password'];
        $roleAdminId = Role::ADMIN;
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = md5('$password') AND role_id={$roleAdminId}";
        dd($sql);
        return $this->getFirst($sql);
    }
    
    public function validateRegister($data)
    {
        $email = $data['email'];
        $password = $data['password'];
        $roleAdminId = Role::ADMIN;
        $sql = "INSERT into users(email, password) VALUES('$email','$password') AND password = md5('$password') AND role_id={$roleAdminId}";
        dd($sql);
        return $this->create($data);
    }


}