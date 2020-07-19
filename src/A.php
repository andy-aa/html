<?php


namespace TexLab\Html;


class A extends AbstractTag
{
    use InnerTextTrait;

    protected $href = '';

    public function setHref(string $href)
    {
        $this->href = " href='$href'";
        return $this;
    }

    public function html()
    {
        return "<a$this->style$this->class$this->id$this->href>$this->innerText</a>";
    }
}