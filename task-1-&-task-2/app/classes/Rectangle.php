<?php
namespace App\classes;

class Rectangle{

    public $height, $width , $result;

    public function calculateRectangle()
    {
        $this->result =  $this->width *  $this->height;
        return $this->result;
    }
}