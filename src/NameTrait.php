<?php

namespace TexLab\Html;

trait NameTrait
{

    /**
     * @var string
     */
    protected $name = '';

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name === '' ? '' : " name='$name'";

        return $this;
    }
}
