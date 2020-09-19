<?php

namespace TexLab\Html\Component;

use TexLab\Html\AbstractTag;

class Pagination extends AbstractTag
{
    /**
     * @var int
     */
    protected $pageCount = 1;

    /**
     * @var string
     */
    protected $urlPrefix = '';

    /**
     * @var string
     */
    protected $urlPageVariableName = 'page';

    /**
     * @var int
     */
    protected $currentPage = 1;

    /**
     * @var string
     */
    protected $currentPageClass = 'current';

    /**
     * @var string
     */
    protected $previous = '';

    /**
     * @var string
     */
    protected $first = '';

    /**
     * @var string
     */
    protected $last = '';

    /**
     * @var string
     */
    protected $next = '';


    /**
     * @param string $urlPrefix
     * @return $this
     */
    public function setUrlPrefix(string $urlPrefix)
    {
        $this->urlPrefix = $urlPrefix;
        return $this;
    }

    /**
     * @param int $pageCount
     * @return $this
     */
    public function setPageCount(int $pageCount)
    {
        $this->pageCount = ($pageCount > 0) ? $pageCount : 1;
        return $this;
    }

    /**
     * @param int $currentPage
     * @return $this
     */
    public function setCurrentPage(int $currentPage)
    {
        $this->currentPage =
            ($currentPage < 1) ? 1 : (($currentPage > $this->pageCount) ? $this->pageCount : $currentPage);

        return $this;
    }

    /**
     * @param string $currentPageClass
     * @return $this
     */
    public function setCurrentPageClass(string $currentPageClass)
    {
        $this->currentPageClass = $currentPageClass;

        return $this;
    }

    /**
     * @param string $previous
     * @return $this
     */
    public function setPrevious(string $previous)
    {
        $this->previous = $previous;
        return $this;
    }

    /**
     * @param string $next
     * @return $this
     */
    public function setNext(string $next)
    {
        $this->next = $next;
        return $this;
    }

    /**
     * @param string $first
     * @return $this
     */
    public function setFirst(string $first)
    {
        $this->first = $first;
        return $this;
    }

    /**
     * @param string $last
     * @return $this
     */
    public function setLast(string $last)
    {
        $this->last = $last;
        return $this;
    }

    /**
     * @return string
     */
    public function html()
    {
        $str = "<div$this->class$this->style$this->id>\n";

        if ($this->first != '') {
            $str .= "\t<a href='$this->urlPrefix&$this->urlPageVariableName=1'>$this->first</a>\n";
        }

        if (($this->previous != '')) {
            if (($this->currentPage - 1) >= 1) {
                $pageNext = $this->currentPage - 1;
            } else {
                $pageNext = 1;
            }
            $str .= "\t<a href='$this->urlPrefix&$this->urlPageVariableName=$pageNext'>$this->previous</a>\n";
        }

        for ($i = 1; $i <= $this->pageCount; $i++) {
            $classCurrentPage = ($i == $this->currentPage) ? " class='$this->currentPageClass'" : '';
            $str .= "\t<a href='$this->urlPrefix&$this->urlPageVariableName=$i'$classCurrentPage>$i</a>\n";
        }

        if (($this->next != '')) {
            if (($this->currentPage + 1) <= $this->pageCount) {
                $pageNext = $this->currentPage + 1;
            } else {
                $pageNext = 1;
            }
            $str .= "\t<a href='$this->urlPrefix&$this->urlPageVariableName=$pageNext'>$this->next</a>\n";
        }

        if ($this->last != '') {
            $str .= "\t<a href='$this->urlPrefix&$this->urlPageVariableName=$this->pageCount'>$this->last</a>\n";
        }

        $str .= "</div>";

        return $str;
    }
}
