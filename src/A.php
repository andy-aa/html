<?php

namespace TexLab\Html;

class A extends AbstractTag
{
    use InnerTextTrait;
    use HrefTrait;
    use TabIndexTrait;

    /**
     * @return string
     */
    public function html()
    {
        return "<a$this->style$this->class$this->attrId$this->href$this->tabIndex>$this->innerText</a>";
    }
}
