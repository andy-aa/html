<?php

namespace TexLab\Html;

class Label extends AbstractTag
{
    use InnerTextTrait;

    /**
     * @var string
     */
    protected $attrFor = '';

    /**
     * @param string $for
     * @return $this
     */
    public function setFor(string $for)
    {
        $this->attrFor = " for='$for'";
        return $this;
    }

    public function html(): string
    {
        return '<label' . parent::attr() . ">$this->innerText</label>";
    }
}
