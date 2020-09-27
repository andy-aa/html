<?php

namespace TexLab\Html\Component;

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
        $str = ($this->aria_label != '') ? "<nav aria-label='$this->aria_label'>\n" : "<nav>\n";

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

        $str .= "<ul class='$ulClass'>\n";

        if ($this->first != '') {
            $str .= "<li class='page-item" .
                (($this->currentPage == 1) ? ' disabled' : '') .
                "'>\n";

            $str .= "\t<a class='page-link' href='$this->urlPrefix&$this->urlPageVariableName=1'" .
                (($this->currentPage == 1) ? " tabindex='-1'" : '') .
                ">$this->first</a>\n" .
                "</li>\n";
        }

        if ($this->previous != '') {
            $pagePrevious = max($this->currentPage - 1, 1);
            $str .= "<li class='page-item" .
                (($this->currentPage == 1) ? ' disabled' : '') .
                "'>\n";

            $str .= "\t<a class='page-link'" .
                " href='$this->urlPrefix&$this->urlPageVariableName=$pagePrevious' aria-label='Previous'" .
                (($this->currentPage == 1) ? " tabindex='-1'" : '') .
                ">\n" .
                "\t<span aria-hidden='true'>$this->previous</span>\n" .
                "\t<span class='sr-only'>Previous</span>\n" .
                "</a>\n" .
                "</li>\n";
        }

        for (
            $i = 1;
            $i <= $this->pageCount;
            $i++
        ) {
            $str .= "<li class='page-item" .
                (($i == $this->currentPage) ? ' active' : '') .
                "'>\n" .
                "\t<a class='page-link' href='$this->urlPrefix&$this->urlPageVariableName=$i'>$i</a>\n" .
                "</li>\n";
        }

        if ($this->next != '') {
            $pageNext = min($this->currentPage + 1, $this->pageCount);

            $str .= "<li class='page-item" .
                (($this->currentPage == $this->pageCount) ? ' disabled' : '') .
                "'>\n\t" .
                "<a class='page-link' href='$this->urlPrefix&$this->urlPageVariableName=$pageNext' aria-label='Next'" .
                (($this->currentPage == $this->pageCount) ? " tabindex='-1'" : '') .
                ">\n" .
                "\t<span aria-hidden='true'>$this->next</span>\n" .
                "\t<span class='sr-only'>Next</span>\n" .
                "\t</a>\n" .
                "</li>\n";
        }

        if ($this->last != '') {
            $str .= "<li class='page-item" .
                (($this->currentPage == $this->pageCount) ? ' disabled' : '') .
                "'>\n" .
                "\t<a class='page-link' href='$this->urlPrefix&$this->urlPageVariableName=$this->pageCount'" .
                (($this->currentPage == $this->pageCount) ? " tabindex='-1'" : '') .
                ">$this->last</a>\n" .
                "</li>\n";
        }

        $str .= "</ul>\n</nav>";

        return $str;
    }
}
