<?php

namespace TexLab\Html;

class Textarea extends AbstractTag
{
    use NameTrait;
    use InnerTextTrait;
    use PlaceholderTrait;
    use RequiredTrait;
    use DisabledTrait;
    use TabIndexTrait;


    /**
     * @var string
     */
    protected $rows = '';
    /**
     * @var string
     */
    protected $cols = '';

    /**
     * @param int $row
     * @return $this
     */
    public function setRows(int $row = 0)
    {
        $this->rows = $row ? " rows='$row'" : '';
        return $this;
    }

    /**
     * @param int $col
     * @return $this
     */
    public function setCols(int $col = 0)
    {
        $this->cols = $col ? " cols='$col'" : '';
        return $this;
    }

    public function html(): string
    {
        return '<textarea' .
            $this->name .
            $this->class .
            $this->style .
            $this->attrId .
            $this->cols .
            $this->rows .
            $this->placeholder .
            $this->required .
            $this->disabled .
            $this->tabIndex .
            '>' .
            $this->innerText .
            '</textarea>';
    }
}
