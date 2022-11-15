<?php

class User
{
    // public $name = 'aly';
    // public $email = 'aly@yahoo.com';

    public function name($name = 'Aly')
    {
        return $name;
    }
    public function email($email = 'aly@yahoo.com')
    {
        return $email;
    }
}

$user = new User;

// echo $user->name();
// echo $user->email();
