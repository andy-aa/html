<?php

namespace TexLab\Html;

class Textarea extends AbstractTag
{
    use NameTrait;
    use InnerTextTrait;
    use PlaceholderTrait;

    protected string $rows = '';
    protected string $cols = '';

    /**
     * @param int $row
     * @return $this
     */
    public function setRows(int $row)
    {
        $this->rows = " rows='$row'";
        return $this;
    }

    /**
     * @param int $col
     * @return $this
     */
    public function setCols(int $col)
    {
        $this->cols = " cols='$col'";
        return $this;
    }

    public function html(): string
    {
        return '<textarea' .
            $this->name .
            $this->class .
            $this->style .
            $this->id .
            $this->cols .
            $this->rows .
            $this->placeholder .
            '>' .
            $this->innerText .
            '</textarea>';
    }
}
