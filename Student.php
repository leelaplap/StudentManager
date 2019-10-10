<?php


class Student extends User
{
public $class;
public function __construct($name, $age, $phone,$class)
{
    parent::__construct($name, $age, $phone);
    $this->class= $class;
}

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class): void
    {
        $this->class = $class;
    }

}