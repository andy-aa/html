<?php


namespace TexLab\Html;


class Pagination extends AbstractTag
{
    protected $pageCount = 1;
    protected $urlPrefix;
    protected $pageCurrent = 1;

    public function setUrlPrefix(string $urlPrefix)
    {
        $this->urlPrefix = $urlPrefix;
        return $this;
    }

    public function setPageCount(int $pageCount)
    {
        $this->pageCount = ($pageCount > 0) ? $pageCount : 1;
        return $this;
    }

    public function setPageCurrent(int $pageCurrent)
    {
        if ($pageCurrent <= 0) {
            $pageCurrent = 1;
        } elseif ($pageCurrent > $this->pageCount) {
            $pageCurrent = $this->pageCount;
        }
        $this->pageCurrent = $pageCurrent;
        return $this;
    }

    public function html()
    {
        $str = "<div$this->class$this->style$this->id>\n";
        for ($i = 1; $i <= $this->pageCount; $i++) {
            $classCurrentPage = ($i == $this->pageCurrent) ? ' class="current"' : '';
            $str .= "\t<a href='?action=show&type=$this->type&page=$i'$classCurrentPage>$i</a>\n";
        }
        $str .= "</div>";
        return $str;
    }
}