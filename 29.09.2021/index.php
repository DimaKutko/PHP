<?php

class Point
{
    protected $x;
    protected $y;

    function __construct($x = 30, $y = 30)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function Show()
    {
        echo 'Vertex: (' . $this->x . ',' . $this->y . ')<br/>';
    }
}
class Point3D extends Point
{
    private $z;

    function __construct($x = 30, $y = 30, $z = 30)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    function Show()
    {
        echo 'Vertex: (' . $this->x . ',' . $this->y . ',' .  $this->z . ')<br/>';
    }
}

$p = new Point(100, 200);
$p3d = new Point3D();

$p->Show();
$p3d->Show();


interface AnimalTemplate
{
    public function getName();
    public function setName($name);
    public function getYear();
    public function setYear($year);
}

abstract class Animal implements AnimalTemplate
{
    protected $name;
    protected $year;

    abstract protected function Go();
    function getName()
    {
        return $this->name;
    }
    function setName($name)
    {
        $this->name = $name;
    }
    function getYear()
    {
        return $this->year;
    }
    function setYear($year)
    {
        $this->year = $year;
    }
}

class Dog extends Animal
{

    function __construct($name, $year = 0)
    {
        $this->name = $name;
        $this->year = $year;
    }

    function Go()
    {
        return 'Я ' . $this->name . ' иду' . '<br/>';
    }
}

class Bird extends Animal
{
    function __construct($name, $year = 0)
    {
        $this->name = $name;
        $this->year = $year;
    }

    function Go()
    {
        return 'Я ' . $this->name . ' лечу' . '<br/>';
    }
}

class Snake extends Animal
{
    function __construct($name, $year = 0)
    {
        $this->name = $name;
        $this->year = $year;
    }

    function Go()
    {
        return 'Я ' . $this->name . ' ползу' . '<br/>';
    }
}

function GoAnimal($animal)
{
    echo $animal->Go();
}

echo '<br/>';
GoAnimal(new Snake('питон'));
echo '<br/>';
GoAnimal(new Dog('когри'));
echo '<br/>';
GoAnimal(new Bird('воробей'));
