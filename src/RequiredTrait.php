<?php

namespace TexLab\Html;

trait RequiredTrait
{

    /**
     * @var string
     */
    protected $required = '';

    /**
     * @param bool $required
     * @return $this
     */
    public function required(bool $required = true)
    {
        $this->required = $required ? ' required' : '';

        return $this;
    }
}
