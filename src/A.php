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
        return "<a$this->attrStyle$this->class$this->attrId$this->href$this->tabIndex>$this->innerText</a>";
    }
}
