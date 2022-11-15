<?php

require "./src/User.php";

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUser()
    {
        // Instance of User class
        $user = new User;

        // without arguments in name
        $userNameTest = $user->name();
        $this->assertEquals('Aly', $userNameTest);

        // with name('Samy')
        $userNameTest = $user->name('Samy');
        $this->assertEquals('Samy', $userNameTest);

        // without arguments in email
        $emailTest = $user->email();
        $this->assertEquals('aly@yahoo.com', $emailTest);

        // with email('samy@gmail.com')
        $emailTest = $user->email('samy@gmail.com');
        $this->assertEquals('samy@gmail.com', $emailTest);
    }
}
