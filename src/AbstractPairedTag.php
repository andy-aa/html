<?php

namespace TexLab\Html;

abstract class AbstractPairedTag extends AbstractTag
{
    use InnerTextTrait;

    /**
     * @return string
     */
    public function html()
    {
        return parent::html() . "$this->innerText</$this->tagName>";
    }
}
