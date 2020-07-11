<?php


namespace TexLab\Html;


class Pagination extends AbstractTag
{
    protected $pageCount;
    protected $type;

    public function setControllerType(string $type)
    {
        $this->type = $type;
        return $this;
    }

    public function setPageCount($pageCount)
    {
        $this->pageCount = $pageCount;
        return $this;
    }

    public function html()
    {
        $str = "<div$this->class$this->style$this->id>\n";
        for ($i = 1; $i <= $this->pageCount; $i++) {
            $str .= "\t<a href='?action=show&type=$this->type&page=$i'>$i </a>\n";
        }
        $str .= "</div>\n";

        return $str;
    }
}