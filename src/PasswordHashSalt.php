<?php

class PasswordHashSalt
{
    public function hashPassword($password)
    {
        return password_hash(
            $password,
            PASSWORD_DEFAULT,
            ['salt' => mt_rand(1000, mt_getrandmax())]
        );
    }
}