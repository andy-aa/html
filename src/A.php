<?php

namespace TexLab\Html;

class A extends AbstractPairedTag
{
    use HrefTrait;
    use TabIndexTrait;

    /**
     * @return string
     */
    public function html()
    {
        return parent::html() . "$this->innerText</$this->tagName>";
    }
}
