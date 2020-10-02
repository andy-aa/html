<?php

namespace TexLab\Html;

class Label extends AbstractTag
{
    use InnerTextTrait;

    /**
     * @var string
     */
    protected $for = '';

    /**
     * @param string $for
     * @return $this
     */
    public function setFor(string $for)
    {
        $this->for = " for='$for'";
        return $this;
    }

    public function html(): string
    {
        return "<label$this->style$this->class$this->attrId$this->for>$this->innerText</label>";
    }
}
