<?php

require_once('app/Models/Model.php');

class Role extends Model
{
    public const ADMIN = 1;
    public const CUSTOMER = 2;
}