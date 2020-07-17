<?php


namespace TexLab\Html\Component;


use TexLab\Html\AbstractTag;

class Pagination extends AbstractTag
{
    protected $pageCount = 1;
    protected $urlPrefix = '';
    protected $urlPageVariableName = 'page';
    protected $currentPage = 1;
    protected $currentPageCssClass = 'current';

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

    public function setCurrentPage(int $pageCurrent)
    {
//        if ($pageCurrent <= 0) {
//            $pageCurrent = 1;
//        } elseif ($pageCurrent > $this->pageCount) {
//            $pageCurrent = $this->pageCount;
//        }
//
//        $this->currentPage = $pageCurrent;

        $this->currentPage =
            ($pageCurrent <= 0) ? 1 : (($pageCurrent > $this->pageCount) ? $this->pageCount : $pageCurrent);

        return $this;
    }

    public function html()
    {
        $str = "<div$this->class$this->style$this->id>\n";

        for ($i = 1; $i <= $this->pageCount; $i++) {
            $classCurrentPage = ($i == $this->currentPage) ? " class='$this->currentPageCssClass'" : '';
            $str .= "\t<a href='$this->urlPrefix&$this->urlPageVariableName=$i'$classCurrentPage>$i</a>\n";
        }

        $str .= "</div>";

        return $str;
    }
}