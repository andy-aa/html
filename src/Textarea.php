<?php

namespace TexLab\Html;


class Textarea extends AbstractTag
{
    protected $rows = " rows='30'";
    protected $cols = " cols='30'";
    protected $name;
    protected $innerText;

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

    public function setInnerText(string $innerText)
    {
        $this->innerText = $innerText;
        return $this;
    }

    public function setName(string $name)
    {
        $this->name = " name='$name'";
        return $this;
    }

    public function html()
    {
        return "<textarea $this->name$this->class$this->style$this->id$this->cols$this->rows>$this->innerText</textarea>";
    }
}
