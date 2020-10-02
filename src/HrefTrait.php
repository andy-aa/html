<?php

namespace TexLab\Html;

trait HrefTrait
{
    /**
     * @var string
     */
    protected $attrHref = '';

    /**
     * @param string $href
     * @return $this
     */
    public function setHref(string $href = '')
    {
        $this->attrHref = $href === '' ? '' : " href='$href'";
        return $this;
    }
}
