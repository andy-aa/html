<?php

namespace TexLab\Html;

trait ValueTrait
{
    /**
     * @var string
     */
    protected $attrValue = '';

    /**
     * @param string $value
     * @return $this
     */
    public function setValue(string $value)
    {
        $this->attrValue = $value === '' ? '' : " value='" . addslashes($value) . "'";

        return $this;
    }
}
