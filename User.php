<?php


class User
{
public $name;
public $age;
public $phone;

public function __construct($name,$age,$phone)
{
    $this->name=$name;
    $this->age=$age;
    $this->phone=$phone;
}

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}