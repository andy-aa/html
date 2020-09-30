<?php

namespace TexLab\Html;

class Option extends AbstractTag
{
    use InnerTextTrait;
    use ValueTrait;

    /**
     * @var string
     */
    protected $selected = '';

    /**
     * @return $this
     */
    public function setSelected()
    {
        $this->selected = ' selected';

        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSelected()
    {
        $this->selected = '';

        return $this;
    }

    /**
     * @param bool $selected
     * @return Option
     */
    public function select(bool $selected)
    {
        $this->selected = $selected ? ' selected' : '';

        return $this;
    }

    public function html(): string
    {
        return "<option$this->style$this->class$this->id$this->value$this->selected>$this->innerText</option>";
    }
}
