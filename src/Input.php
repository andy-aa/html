<?php

namespace TexLab\Html;

class Input extends AbstractTag
{
    use ValueTrait;
    use NameTrait;
    use PlaceholderTrait;
    use RequiredTrait;
    use DisabledTrait;
    use TabIndexTrait;

    /**
     * @var string
     */
    protected $type = " type='text'";

    /**
     * @var array<string>
     */
    protected $allowedTypes = [
        'button',
        'checkbox',
        'file',
        'hidden',
        'image',
        'password',
        'radio',
        'reset',
        'submit',
        'text',
        'color',
        'date',
        'datetime',
        'datetime-local',
        'email',
        'number',
        'range',
        'search',
        'tel',
        'time',
        'url',
        'month',
        'week'
    ];

    /**
     * @var string
     */
    protected $checked = '';

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type = "text")
    {
        if (in_array($type, $this->allowedTypes)) {
            $this->type = " type='$type'";
        }
        return $this;
    }

    /**
     * @param bool $checked
     * @return $this
     */
    public function checked(bool $checked = true)
    {
//        if (in_array($this->type, ['radio', 'checkbox']) && $value) {
//            $this->checked = " checked";
//        }
        $this->checked = $checked ? " checked" : '';

        return $this;
    }

    public function html(): string
    {
        return "<input" .
            $this->type .
            $this->value .
            $this->name .
            $this->attrStyle .
            $this->class .
            $this->attrId .
            $this->placeholder .
            $this->checked .
            $this->required .
            $this->disabled .
            $this->tabIndex .
            ">";
    }
}
