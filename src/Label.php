<?php


namespace TexLab\Html;


class Label extends AbstractTag
{
    protected $for;
    protected $innerText;

    public function setFor(string $for)
    {
        $this->for = " for='$for'";
        return $this;
    }

    public function setInnerText(string $text)
    {
        $this->innerText = $text;
        return $this;
    }

    public function html()
    {
        return "<label$this->style$this->class$this->id$this->for>$this->innerText</label><br>";
    }
}