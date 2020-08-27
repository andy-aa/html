<?php

namespace TexLab\Html;

trait DisabledTrait
{

    /**
     * @var string
     */
    protected string $disabled = '';

    /**
     * @return $this
     */
    public function setDisabled()
    {
        $this->disabled = ' disabled';

        return $this;
    }

    /**
     * @return $this
     */
    public function setUnDisabled()
    {
        $this->disabled = '';

        return $this;
    }
}
