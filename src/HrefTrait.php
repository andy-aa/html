<?php

namespace TexLab\Html;

trait HrefTrait
{
    /**
     * @var string
     */
    protected $href = '';

    /**
     * @param string $href
     * @return $this
     */
    public function setHref(string $href = '')
    {
        $this->href = $href === '' ? '' : " href='$href'";
        return $this;
    }
}
