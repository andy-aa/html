<?php

namespace TexLab\Html;

trait DisabledTrait
{
    /**
     * @var string
     */
    protected $disabled = '';

    /**
     * @param bool $disabled
     * @return $this
     */
    public function disabled(bool $disabled = true)
    {
        $this->disabled = $disabled ? ' disabled' : '';

        return $this;
    }
}
