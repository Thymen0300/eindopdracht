<?php

class mijnbureau extends figuur
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
        print_r("<br> mijn bureau oppervlakte : ");
        return  $this->x * $this->y;

    }
}