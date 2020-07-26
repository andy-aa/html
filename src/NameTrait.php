<?php

namespace TexLab\Html;

trait NameTrait
{

    protected string $name = '';

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = " name='$name'";
        return $this;
    }
}
