<?php

namespace TexLab\Html;

trait PlaceholderTrait
{
    /**
     * @var string
     */
    protected $attrPlaceholder = '';

    /**
     * @param string $placeholder
     * @return $this
     */
    public function setPlaceholder(string $placeholder)
    {
        $this->attrPlaceholder = $placeholder === '' ? '' : " placeholder='" . addslashes($placeholder) . "'";

        return $this;
    }
}
