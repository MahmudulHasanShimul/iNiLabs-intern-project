<?php

namespace App\classes;

class Circle extends Rectangle
{
    public $radius, $pi, $result;


    public function __construct($post = null)
    {
        if(isset($post['radius'])){

            $this->radius = $post['radius'];
        }
        else{
            $this->width = $post['width'];
            $this->height = $post['height'];
        }
    }

    public function calculateCircle()
    {
        
        $this->result = 3.1416 * $this->radius * $this->radius;
        return $this->result;
    }
}
