<?php

namespace TexLab\Html;

trait RequiredTrait
{

    /**
     * @var string
     */
    protected string $required = '';

    /**
     * @return $this
     */
    public function setRequired()
    {
        $this->required = ' required';

        return $this;
    }

    /**
     * @return $this
     */
    public function setUnRequired()
    {
        $this->required = '';

        return $this;
    }
}
