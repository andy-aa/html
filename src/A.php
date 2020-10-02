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
        return '<a' . parent::attr() . ">$this->innerText</a>";
    }
}
