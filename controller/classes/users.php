<?php

class Users
{
    public string $name;
    public string $firstName;
    public string $email;
    
    public function __construct(string $name, string $firstName, string $email)
    {
        $this->name = $name;
        $this->firstName =$firstName;
        $this->email =$email;
    }
}