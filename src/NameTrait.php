<?php


namespace TexLab\Html;


trait NameTrait
{

    protected $name;

    public function setName(string $name)
    {
        $this->name = " name='$name'";
        return $this;
    }
}