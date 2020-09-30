<?php

namespace TexLab\Html;

trait ValueTrait
{
    /**
     * @var string
     */
    protected $value = '';

    /**
     * @param string $value
     * @return $this
     */

    public function setValue(string $value)
    {
        $this->value = $value === '' ? '' : " value='" . addslashes($value) . "'";

        return $this;
    }
}
