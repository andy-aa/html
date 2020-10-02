<?php

namespace TexLab\Html;

class Option extends AbstractPairedTag
{
    use ValueTrait;

    /**
     * @var string
     */
    protected $attrSelected = '';

    /**
     * @param bool $selected
     * @return $this
     */
    public function selected(bool $selected = true)
    {
        $this->attrSelected = $selected ? ' selected' : '';

        return $this;
    }

    public function html(): string
    {
        return '<option' . parent::attr() . ">$this->innerText</option>";
    }
}
