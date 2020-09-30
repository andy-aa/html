<?php

namespace TexLab\Html;

trait TabIndexTrait
{

    /**
     * @var string
     */
    protected $tabIndex = '';

    /**
     * @param string $tabIndex
     * @return $this
     */
    public function setTabIndex(string $tabIndex = '')
    {
        $this->tabIndex = $tabIndex === '' ? '' : " tabindex='$tabIndex'";
        return $this;
    }
}
