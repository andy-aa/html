<?php


namespace TexLab\Html;


class Label extends AbstractTag
{
    use InnerTextTrait;

    protected $for;

    public function setFor(string $for)
    {
        $this->for = " for='$for'";
        return $this;
    }

    public function html()
    {
        return "<label$this->style$this->class$this->id$this->for>$this->innerText</label>";
    }
}