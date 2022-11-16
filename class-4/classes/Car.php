<?php


class Car
{
    public $wheel, $engine = "1500cc", $color = "black";
    public $name;
    public $model;

//    public function __construct($carName)
//    {
//        echo $carName."<br>";
//    }

    public function getName()
    {
        return $this->name = "Marcedes";
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }
}