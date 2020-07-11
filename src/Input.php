<?php

namespace TexLab\Html;

class Input extends AbstractTag
{
    protected $value = '';
    protected $type = " type='text'";
    protected $name;
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
            'hidden',
            'date'
        ])) {
            $this->type = " type='$type'";
        }
        return $this;
    }

    public function setValue(string $value)
    {
        $this->value = " value='$value'";
        return $this;
    }

    public function setChecked(string $value)
    {
        if ($value) {
            $this->checked = " checked='checked'";
        }
        return $this;
    }


    public function setName(string $name)
    {
        $this->name = " name='$name'";
        return $this;
    }

    public function html()
    {
        if ($this->type == " type='checkbox'") {
            return "<input$this->type$this->value$this->name$this->style$this->class$this->id$this->checked><br>";
        } else {
            if ($this->type == " type='date'") {
                return "<input$this->type$this->value$this->name$this->style$this->class$this->id$this->checked>";
            } else {
                return "<input$this->type$this->value$this->name$this->style$this->class$this->id$this->checked>";
            }
        }

    }
}
