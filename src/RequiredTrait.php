<?php

namespace TexLab\Html;

trait RequiredTrait
{
    /**
     * @var string
     */
    protected $attrRequired = '';

    /**
     * @param bool $required
     * @return $this
     */
    public function required(bool $required = true)
    {
        $this->attrRequired = $required ? ' required' : '';

        return $this;
    }
}
