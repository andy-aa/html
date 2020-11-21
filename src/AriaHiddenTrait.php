<?php

namespace TexLab\Html;

trait AriaHiddenTrait
{
    /**
     * @var string
     */
    protected $attrAriaHidden = '';

    /**
     * @param string $ariaHidden
     * @return $this
     */
    public function setAriaHidden(string $ariaHidden = '')
    {
        $this->attrAriaHidden = $ariaHidden === '' ? '' : " aria-hidden='$ariaHidden'";

        return $this;
    }
}
