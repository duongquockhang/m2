<?php

class User
{
    protected $name;
    protected $email;
    public $role;

    public function __construct($name = "", $email = "", $role = "")
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getInfo()
    {
        echo "name: ". $this->name . "<br/>";
        echo "email: ". $this->email . "<br/>";
        echo "role: ". $this->role . "<br/>";
    }

    public function isAdmin()
    {
        if ($this->role == 1){
            echo "admin";
        }
        if ($this->role == 2){
            echo "la nguoi dung binh thuong";
        }
    }
}
