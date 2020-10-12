<?php

namespace TexLab\Html\Component;

use TexLab\Html\A;
use TexLab\Html\Li;
use TexLab\Html\Nav;
use TexLab\Html\Span;
use TexLab\Html\Ul;

class PaginationBootstrap extends Pagination
{
    /**
     * @var string
     */
    protected $aria_label = '';

    /**
     * @var string
     */
    protected $justify = '';

    /**
     * @var string
     */
    protected $size = '';

    /**
     * @param string $aria_label
     * @return $this
     */
    public function setAriaLabel(string $aria_label)
    {
        $this->aria_label = $aria_label;
        return $this;
    }

    /**
     * @param string $justify
     * @return $this
     */
    public function setJustify(string $justify)
    {
        $this->justify = $justify;
        return $this;
    }

    /**
     * @param string $size
     * @return $this
     */
    public function setSize(string $size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return string
     */
    public function html()
    {

        $ulClass = "pagination";

        switch (strtoupper($this->size)) {
            case 'L':
            case 'LG':
            case 'LARGE':
                $ulClass .= ' pagination-lg';
                break;
            case 'S':
            case 'SM':
            case 'SMALL':
                $ulClass .= ' pagination-sm';
                break;
        }

        switch (strtoupper($this->justify)) {
            case 'C':
            case 'CENTER':
                $ulClass .= ' justify-content-center';
                break;
            case 'E':
            case 'END':
            case 'RIGHT':
                $ulClass .= ' justify-content-end';
                break;
        }

        $ul = new Ul();

        $ul->setClass($ulClass);

        if ($this->first != '') {
            $ul->addItem(
                (new li())
                    ->setClass(
                        'page-item' .
                        (($this->currentPage == 1) ? ' disabled' : '')
                    )
                    ->setInnerText(
                        (new A())
                            ->setClass('page-link')
                            ->setHref("$this->urlPrefix&$this->PageVariable=1")
                            ->setTabIndex(($this->currentPage == 1) ? '-1' : '')
                            ->setInnerText($this->first)
                            ->html()
                    )
                    ->html()
            );
        }

        if ($this->previous != '') {
            $pagePrevious = max($this->currentPage - 1, 1);

            $ul->addItem(
                (new li())
                    ->setClass(
                        'page-item' .
                        (($this->currentPage == 1) ? ' disabled' : '')
                    )
                    ->setInnerText(
                        (new A())
                            ->setClass('page-link')
                            ->setHref("$this->urlPrefix&$this->PageVariable=$pagePrevious")
                            ->setAriaLabel('Previous')
                            ->setTabIndex(($this->currentPage == 1) ? '-1' : '')
                            ->setInnerText(
                                (new Span())
                                    ->setAriaHidden('true')
                                    ->setInnerText($this->previous)
                                    ->html() .
                                (new Span())
                                    ->setClass('sr-only')
                                    ->setInnerText('Previous')
                                    ->html()
                            )
                            ->html()
                    )
                    ->html()
            );
        }

        for (
            $i = 1;
            $i <= $this->pageCount;
            $i++
        ) {
            $ul->addItem(
                (new li())
                    ->setClass(
                        'page-item' .
                        (($i == $this->currentPage) ? ' active' : '')
                    )
                    ->setInnerText(
                        (new A())
                            ->setClass('page-link')
                            ->setHref("$this->urlPrefix&$this->PageVariable=$i")
                            ->setInnerText((string)$i)
                            ->html()
                    )
                ->html()
            );
        }

        if ($this->next != '') {
            $pageNext = min($this->currentPage + 1, $this->pageCount);

            $ul->addItem(
                (new li())
                    ->setClass(
                        'page-item' .
                        (($this->currentPage == $this->pageCount) ? ' disabled' : '')
                    )
                    ->setInnerText(
                        (new A())
                            ->setClass('page-link')
                            ->setHref("$this->urlPrefix&$this->PageVariable=$pageNext")
                            ->setAriaLabel('Next')
                            ->setTabIndex(($this->currentPage == $this->pageCount) ? " tabindex='-1'" : '')
                            ->setInnerText(
                                (new Span())
                                    ->setAriaHidden('true')
                                    ->setInnerText($this->next)
                                    ->html() .
                                (new Span())
                                    ->setClass('sr-only')
                                    ->setInnerText('Next')
                                    ->html()
                            )
                            ->html()
                    )
                    ->html()
            );
        }

        if ($this->last != '') {
            $ul->addItem(
                (new li())
                    ->setClass(
                        'page-item' .
                        (($this->currentPage == $this->pageCount) ? ' disabled' : '')
                    )
                    ->setInnerText(
                        (new A())
                            ->setClass('page-link')
                            ->setHref("$this->urlPrefix&$this->PageVariable=$this->pageCount")
                            ->setAriaLabel('Next')
                            ->setTabIndex(($this->currentPage == $this->pageCount) ? " tabindex='-1'" : '')
                            ->setInnerText($this->last)
                            ->html()
                    )
                    ->html()
            );
        }

        return (new Nav())
            ->setAriaLabel($this->aria_label)
            ->setInnerText($ul->html())
            ->html();
    }
}
