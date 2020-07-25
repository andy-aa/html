<?php


namespace TexLab\Html;


trait ValueTrait
{
    protected $value = '';

    public function setValue(string $value)
    {
        $this->value = " value='".addslashes($value)."'";
        return $this;
    }
}