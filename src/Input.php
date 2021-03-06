<?php

namespace TexLab\Html;

class Input extends AbstractTag
{
    use ValueTrait;
    use NameTrait;
    use PlaceholderTrait;
    use RequiredTrait;
    use DisabledTrait;

    /**
     * @var string
     */
    protected $attrType = " type='text'";

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
    protected $attrChecked = '';

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type = "text")
    {
        if (in_array($type, $this->allowedTypes)) {
            $this->attrType = " type='$type'";
        }
        return $this;
    }

    /**
     * @param bool $checked
     * @return $this
     */
    public function checked(bool $checked = true)
    {

        $this->attrChecked = $checked ? " checked" : '';

        return $this;
    }
}
