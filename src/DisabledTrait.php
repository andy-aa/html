<?php

namespace TexLab\Html;

trait DisabledTrait
{

    /**
     * @var string
     */
    protected $disabled = '';

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
    public function unsetDisabled()
    {
        $this->disabled = '';

        return $this;
    }
}
