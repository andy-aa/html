<?php


namespace TexLab\Html;


class Pagination extends AbstractTag
{
    protected $pageCount;
    protected $type;
    protected $curPage;

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

    public function setCurPage($curPage)
    {
        $this->curPage = $curPage;
        return $this;
    }

    public function html()
    {
        $str = "<div$this->class$this->style$this->id>\n";
        for ($i = 1; $i <= $this->pageCount; $i++) {
            $classCurrentPage = ($i == $this->curPage) ? 'class="curPage"' : '';
            $str .= "\t<a $classCurrentPage href='?action=show&type=$this->type&page=$i'>$i </a>\n";
        }
        $str .= "</div>\n";

        return $str;
    }
}