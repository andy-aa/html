<?php

namespace TexLab\Html;

class Label extends AbstractTag
{
    use InnerTextTrait;

    protected string $for = '';

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
        return "<label$this->style$this->class$this->id$this->for>$this->innerText</label>";
    }
}
