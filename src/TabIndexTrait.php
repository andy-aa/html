<?php

namespace TexLab\Html;

trait TabIndexTrait
{

    /**
     * @var string
     */
    protected $attrTabIndex = '';

    /**
     * @param string $tabIndex
     * @return $this
     */
    public function setTabIndex(string $tabIndex = '')
    {
        $this->attrTabIndex = $tabIndex === '' ? '' : " tabindex='$tabIndex'";
        return $this;
    }
}
