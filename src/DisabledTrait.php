<?php

namespace TexLab\Html;

trait DisabledTrait
{
    /**
     * @var string
     */
    protected $attrDisabled = '';

    /**
     * @param bool $disabled
     * @return $this
     */
    public function disabled(bool $disabled = true)
    {
        $this->attrDisabled = $disabled ? ' disabled' : '';

        return $this;
    }
}
