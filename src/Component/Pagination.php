<?php

namespace TexLab\Html\Component;

use TexLab\Html\A;
use TexLab\Html\AbstractTag;
use TexLab\Html\Html;

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
        $this->pageCount = max($pageCount, 1);
//        $this->pageCount = ($pageCount > 0) ? $pageCount : 1;
        return $this;
    }

    /**
     * @param int $currentPage
     * @return $this
     */
    public function setCurrentPage(int $currentPage)
    {
        $this->currentPage = min(max($currentPage, 1), $this->pageCount);
// $this->currentPage = ($currentPage < 1) ? 1 : (($currentPage > $this->pageCount) ? $this->pageCount : $currentPage);
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
    public function setPrevious(string $previous = '')
    {
        $this->previous = $previous === '' ? '' : $previous;
        return $this;
    }

    /**
     * @param string $next
     * @return $this
     */
    public function setNext(string $next = '')
    {
        $this->next = $next === '' ? '' : $next;
        return $this;
    }

    /**
     * @param string $first
     * @return $this
     */
    public function setFirst(string $first = '')
    {
        $this->first = $first === '' ? '' : $first;
        return $this;
    }

    /**
     * @param string $last
     * @return $this
     */
    public function setLast(string $last = '')
    {
        $this->last = $last === '' ? '' : $last;
        return $this;
    }

    /**
     * @return string
     */
    public function html()
    {
        $a = new A();

        $html = '';

        $url = "$this->urlPrefix&$this->urlPageVariableName=";

        if ($this->first != '') {
            $html .= $a
                ->setHref($url . '1')
                ->setInnerText($this->first)
                ->html();
        }

        if (($this->previous != '')) {
            $html .= $a
                ->setHref($url . max($this->currentPage - 1, 1))
                ->setInnerText($this->previous)
                ->html();
        }

        for ($i = 1; $i <= $this->pageCount; $i++) {
            $html .= Html::a()
                ->setHref($url . $i)
                ->setClass(($i == $this->currentPage) ? $this->currentPageClass : '')
                ->setInnerText("$i")
                ->html();
        }

        $a->setClass();

        if (($this->next != '')) {
            $html .= $a
                ->setHref($url . min($this->currentPage + 1, $this->pageCount))
                ->setInnerText($this->next)
                ->html();
        }

        if ($this->last != '') {
            $html .= $a
                ->setHref($url . $this->pageCount)
                ->setInnerText($this->last)
                ->html();
        }

        return "<div" . $this->getAttr() . ">$html</div>";
    }
}
