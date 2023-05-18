<?php
trait Eatable
{
    public $eatable;

    public function setEatable($_eatable,)
    {
        $this->eatable = $_eatable;
    }

    public function getEatable()
    {
        return $this->eatable;
    }
}
