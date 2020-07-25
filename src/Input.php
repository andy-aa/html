<?php

namespace TexLab\Html;

class Input extends AbstractTag
{
    use ValueTrait, NameTrait, PlaceholderTrait;

    protected $type = "text";
    protected $checked = '';

    public function setType(string $type)
    {
        if (in_array($type, [
            'text',
            'button',
            'submit',
            'reset',
            'password',
            'file',
            'checkbox',
            'radio',
            'hidden',
            'date'
        ])) {
            $this->type = $type;
        }
        return $this;
    }

    public function setChecked(bool $value)
    {
        if (in_array($this->type, ['radio', 'checkbox']) && $value) {
            $this->checked = " checked";
        }
        return $this;
    }

    public function html()
    {
        return "<input type='$this->type'$this->value$this->name$this->style$this->class$this->id$this->checked$this->placeholder>";

    }
}
