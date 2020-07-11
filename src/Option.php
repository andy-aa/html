<?php


namespace TexLab\Html;


class Option extends AbstractTag
{
    use InnerTextTrait, ValueTrait;


    protected $selected;

    public function setSelected()
    {
        $this->selected = ' selected';

        return $this;
    }
    public function setUnSelected()
    {
        $this->selected = '';

        return $this;
    }
    public function html()
    {
        return "<option$this->style$this->class$this->id$this->value$this->selected>$this->innerText</option>";
    }
}