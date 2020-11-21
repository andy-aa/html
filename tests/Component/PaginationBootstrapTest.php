<?php

namespace Test\Component;

use TexLab\Html\Component\PaginationBootstrap;
use PHPUnit\Framework\TestCase;

class PaginationBootstrapTest extends TestCase
{
    /**
     * @return $this
     */
    public function testHtml()
    {
        $this->assertIsString(
            (new PaginationBootstrap())->html()
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function testSetJustify()
    {
        $this->assertEquals(
            "<nav>" .
            "<ul class='pagination justify-content-end'>" .
            "<li><li class='page-item active'>" .
            "<a class='page-link' href='&page=1'>1</a>" .
            "</li></li></ul></nav>",
            (new PaginationBootstrap())
                ->setJustify('justify-content-end')
                ->html()
        );
        $this->assertEquals(
            "<nav>" .
            "<ul class='pagination justify-content-center'>" .
            "<li><li class='page-item active'>" .
            "<a class='page-link' href='&page=1'>1</a>" .
            "</li></li></ul></nav>",
            (new PaginationBootstrap())
                ->setJustify('justify-content-center')
                ->html()
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function testSetAriaLabel()
    {
        $this->assertEquals(
            "<nav aria-label='arial-label'>" .
            "<ul class='pagination'>" .
            "<li><li class='page-item active'>" .
            "<a class='page-link' href='&page=1'>1</a>" .
            "</li></li></ul></nav>",
            (new PaginationBootstrap())
                ->setAriaLabel('arial-label')
                ->html()
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function testSetSize()
    {
        $this->assertEquals(
            "<nav>" .
            "<ul class='pagination pagination-lg'>" .
            "<li><li class='page-item active'>" .
            "<a class='page-link' href='&page=1'>1</a>" .
            "</li></li></ul></nav>",
            (new PaginationBootstrap())
                ->setSize('pagination-lg')
                ->html()
        );
        return $this;
    }
}
