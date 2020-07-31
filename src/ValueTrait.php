<?php

namespace TexLab\Html;

trait ValueTrait
{
    protected string $value = '';

    /**
     * @param string $value
     * @return $this
     */

    public function setValue(string $value)
    {
        $this->value = " value='" . addslashes($value) . "'";
        return $this;
    }
}
