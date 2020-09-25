<?php

namespace TexLab\Html\Component;

class PaginationBootstrap extends Pagination
{
    /**
     * @var string
     */
    protected $aria_label = '';

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
     * @return string
     */
    public function html()
    {
        $str = ($this->aria_label != '') ? "<nav aria-label='$this->aria_label'>\n" : "<nav>\n";

        $str .= "<ul class='pagination'>\n";

        if ($this->first != '') {
            if ($this->currentPage != 1) {
                $str .= "<li class='page-item'>\n";
            } else {
                $str .= "<li class='page-item disabled'>\n";
            }

            $str .= "\t<a class='page-link' href='$this->urlPrefix&$this->urlPageVariableName=1'>$this->first</a>\n"
                . "</li>\n";
        }

        if ($this->previous != '') {
            $pagePrevious = max($this->currentPage - 1, 1);

            if ($this->currentPage != 1) {
                $str .= "<li class='page-item'>\n";
            } else {
                $str .= "<li class='page-item disabled'>\n";
            }

            $str .= <<<"TAG"
\t<a class='page-link' href='$this->urlPrefix&$this->urlPageVariableName=$pagePrevious' aria-label='Previous'>
<span aria-hidden='true'>«</span>
<span class='sr-only'>$this->previous</span>
</a>
</li>\n
TAG;
        }

        for ($i = 1; $i <= $this->pageCount; $i++) {
            if ($i != $this->currentPage) {
                $str .= "<li class='page-item'>\n";
            } else {
                $str .= "<li class='page-item active'>\n";
            }

            $str .= <<<"TAG"
\t<a class='page-link' href='$this->urlPrefix&$this->urlPageVariableName=$i'>$i</a>
</li>\n
TAG;
        }

        if ($this->next != '') {
            $pageNext = min($this->currentPage + 1, $this->pageCount);

            if ($this->currentPage != $this->pageCount) {
                $str .= "<li class='page-item'>\n";
            } else {
                $str .= "<li class='page-item disabled'>\n";
            }

            $str .= <<<"TAG"
\t<a class='page-link' href='$this->urlPrefix&$this->urlPageVariableName=$pageNext' aria-label='Next'>
<span aria-hidden='true'>»</span>
<span class='sr-only'>Next</span>
</a></li>\n
TAG;
        }

        if ($this->last != '') {
            if ($this->currentPage != $this->pageCount) {
                $str .= "<li class='page-item'>\n";
            } else {
                $str .= "<li class='page-item disabled'>\n";
            }

            $str .= <<<"TAG"
\t<a class='page-link' href='$this->urlPrefix&$this->urlPageVariableName=$this->pageCount'>$this->last</a>
</li>\n
TAG;
        }

        $str .= "</ul>\n</nav>";

        return $str;
    }
}
