<?php

namespace TexLab\Html;

trait RequiredTrait
{

    /**
     * @var string
     */
    protected $required = '';

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
    public function unsetRequired()
    {
        $this->required = '';

        return $this;
    }
}
