<?php

namespace TexLab\Html;

trait AriaLabelTrait
{
    /**
     * @var string
     */
    protected $attrAriaLabel = '';

    /**
     * @param string $ariaLabel
     * @return $this
     */
    public function setAriaLabel(string $ariaLabel = '')
    {
        $this->attrAriaLabel = $ariaLabel === '' ? '' : " aria-label='$ariaLabel'";

        return $this;
    }
}
