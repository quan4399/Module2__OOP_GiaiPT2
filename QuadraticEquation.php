<?php

class QuadraticEquation
{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;


    }
    public function getter()
    {
        return "a la : " . $this->a . "b la : " . $this->b . "c la :" . $this->c ;
    }
    public function getDiscriminant()
    {
        return ($this->b * $this->b) - (4 * $this->a * $this->c);
    }
    public function getRoot1()
    {

        return ((-$this->b + sqrt($this->getDiscriminant())) / 2 * $this->a);
    }
    public function getRoot2()
    {

        return ((-$this->b - sqrt($this->getDiscriminant())) / 2 * $this->a);
    }
    public function result()
    {
        if ($this->getDiscriminant() > 0)
        {
            return "Two root: " . $this->getRoot1() . "and" . $this->getRoot2();
        }else if($this->getDiscriminant() == 0)
        {
            return "One root: " . (-$this->b) / (2 * $this->a);
        }else
        {
            return "no real root";
        }
    }
}