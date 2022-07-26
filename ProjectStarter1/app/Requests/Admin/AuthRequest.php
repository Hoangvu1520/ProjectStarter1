<?php

require_once('app/Requests/BaseRequest.php');

class AuthRequest extends BaseRequest
{
    public function validateRegister($data)
    {
        if (empty($data['username']))
        {
            $this->errors['username'] = "Username không được để trống";
        }

        if (empty($data['password']))
        {
            $this->errors['password'] = "Password không được để trống";
        }

        if (empty($data['password_confirmation']))
        {
            $this->errors['password_confirmation'] = "Password xác nhận không được để trống";
        }

        return $this->errors;
    }
}