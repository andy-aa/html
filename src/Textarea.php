<?php

namespace TexLab\Html;


class Textarea extends AbstractTag
{
    use NameTrait, InnerTextTrait;

    protected $rows = '';
    protected $cols = '';

    public function setRows(int $row)
    {
        $this->rows = " rows='$row'";
        return $this;
    }

    public function setCols(int $col)
    {
        $this->cols = " cols='$col'";
        return $this;
    }

    public function html()
    {
        return "<textarea$this->name$this->class$this->style$this->id$this->cols$this->rows>$this->innerText</textarea>";
    }
}
