<?php

namespace TexLab\Html;

trait NameTrait
{
    /**
     * @var string
     */
    protected $attrName = '';

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->attrName = $name === '' ? '' : " name='$name'";

        return $this;
    }
}
