<?php

namespace TexLab\Html;

class A extends AbstractTag
{
    use InnerTextTrait;
    use HrefTrait;

    /**
     * @return string
     */
    public function html()
    {
        return "<a$this->style$this->class$this->id$this->href>$this->innerText</a>";
    }
}
