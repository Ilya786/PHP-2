<?php

class Paper
{
    public $width;
    public $height;

    public function __construct($height,$width)
    {
        $this->width = $width;
        $this->height = $height;
        $this->render();
    }
    /**
    метод отрисовки листа
     */
    private function render(){

    }
    /**
    метод осуществляюший сгибание листа
     */
    function flexion($cordinateX, $cordinateY){

    }
}
class ColoredPaper extends Paper{
    public $color;
    public function __construct($height, $width, $color)
    {
        parent::__construct($height, $width);
        $this->color = $color;
    }
    /**
    метод дочерниго объекта
     */
    function discoloration(){
        $this->color;
    }
}
class Carton extends Paper{
    public $thickness;
    public function __construct($height, $width, $thickness)
    {
        parent::__construct($height, $width);
        $this->thickness = $thickness;
    }
}