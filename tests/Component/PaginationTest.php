<?php

namespace Test\Component;

use TexLab\Html\Component\Pagination;
use PHPUnit\Framework\TestCase;

class PaginationTest extends TestCase
{
    /**
     * @return $this
     */
    public function testHtml()
    {
        $this->assertIsString(
            (new Pagination())->html()
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function testSetCurrentPage()
    {
        $this->assertEquals(
            "<div>" .
            "<a class='current' href='&page=1'>1</a>" .
            "</div>",
            (new Pagination())
                ->setCurrentPage(-1)
                ->html()
        );

        $this->assertEquals(
            "<div>" .
            "<a class='current' href='&page=1'>1</a>" .
            "</div>",
            (new Pagination())
                ->setCurrentPage(0)
                ->html()
        );

        $this->assertEquals(
            "<div>" .
            "<a class='current' href='&page=1'>1</a>" .
            "</div>",
            (new Pagination())
                ->setCurrentPage(2)
                ->html()
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function testSetNext()
    {
        $this->assertEquals(
            "<div>" .
            "<a href='?action=show&type=controller&page=1'>1</a>" .
            "<a href='?action=show&type=controller&page=2'>2</a>" .
            "<a class='current' href='?action=show&type=controller&page=3'>3</a>" .
            "<a href='?action=show&type=controller&page=3'>Next</a>" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPage(3)
                ->setNext('Next')
                ->html()
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function testSetFirst()
    {
        $this->assertEquals(
            "<div>" .
            "<a href='?action=show&type=controller&page=1'>First</a>" .
            "<a class='current' href='?action=show&type=controller&page=1'>1</a>" .
            "<a href='?action=show&type=controller&page=2'>2</a>" .
            "<a href='?action=show&type=controller&page=3'>3</a>" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setFirst('First')
                ->html()
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function testSetLast()
    {
        $this->assertEquals(
            "<div>" .
            "<a class='current' href='&page=1'>1</a>" .
            "<a href='&page=1'>Last</a>" .
            "</div>",
            (new Pagination())
                ->setLast('Last')
                ->html()
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function testSetUrlPrefix()
    {
        $this->assertEquals(
            "<div>" .
            "<a class='current' href='?action=show&type=controller&page=1'>1</a>" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
                ->html()
        );
        return $this;
    }


    /**
     * @return $this
     */
    public function testSetCurrentPageClass()
    {
        $this->assertEquals(
            "<div>" .
            "<a href='&page=1'>1</a>" .
            "</div>",
            (new Pagination())
                ->setCurrentPageClass('')
                ->html()
        );

        $this->assertEquals(
            "<div>" .
            "<a class='active' href='&page=1'>1</a>" .
            "</div>",
            (new Pagination())
                ->setCurrentPageClass('active')
                ->html()
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function testSetPageCount()
    {
        $this->assertEquals(
            "<div>" .
            "<a class='current' href='?action=show&type=controller&page=1'>1</a>" .
            "<a href='?action=show&type=controller&page=2'>2</a>" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(2)
                ->html()
        );

        $this->assertEquals(
            "<div>" .
            "<a href='?action=show&type=controller&page=1'>1</a>" .
            "<a class='current' href='?action=show&type=controller&page=2'>2</a>" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(2)
                ->setCurrentPage(3)
                ->html()
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function testSetPrevious()
    {
        $this->assertEquals(
            "<div>" .
            "<a href='?action=show&type=controller&page=1'>Previous</a>" .
            "<a href='?action=show&type=controller&page=1'>1</a>" .
            "<a class='current' href='?action=show&type=controller&page=2'>2</a>" .
            "<a href='?action=show&type=controller&page=3'>3</a>" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPage(2)
                ->setPrevious('Previous')
                ->html()
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function testSetPageVariable()
    {
        $this->assertEquals(
            "<div>" .
            "<a class='current' href='?action=show&type=controller&pg=1'>1</a>" .
            "<a href='?action=show&type=controller&pg=2'>2</a>" .
            "<a href='?action=show&type=controller&pg=3'>3</a>" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageVariable('pg')
                ->setPageCount(3)
                ->html()
        );
        return $this;
    }
}
