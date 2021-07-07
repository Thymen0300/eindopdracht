<?php


class mijnlaptop extends figuur
{
    public function __construct($Ix, $Iy)
    {
        return parent::__construct($Ix, $Iy);
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }


    public function oppervlakteBerekenen()
    {
        print_r("<br> mijn laptop oppervlakte : ");
        return  $this->x * $this->y;

    }
}