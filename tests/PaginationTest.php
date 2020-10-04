<?php

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use TexLab\Html\Component\Pagination;

class PaginationTest extends TestCase
{

    public function testPagination(): void
    {
        $this->assertIsString(
            (new Pagination())->html()
        );

        $this->assertEquals(
            "<div>" .
            "<a href='?action=show&type=controller&page=1'>1</a>" .
            "<a class='current' href='?action=show&type=controller&page=2'>2</a>" .
            "<a href='?action=show&type=controller&page=3'>3</a>" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPage(2)
                ->html()
        );

        $this->assertEquals(
            "<div>" .
            "<a class='current' href='?action=show&type=controller&page=1'>1</a>" .
            "<a href='?action=show&type=controller&page=2'>2</a>" .
            "<a href='?action=show&type=controller&page=3'>3</a>" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPage(0)
                ->html()
        );

        $this->assertEquals(
            "<div>" .
            "<a href='?action=show&type=controller&page=1'>1</a>" .
            "<a href='?action=show&type=controller&page=2'>2</a>" .
            "<a class='current' href='?action=show&type=controller&page=3'>3</a>" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPage(5)
                ->html()
        );

        $this->assertEquals(
            "<div>" .
            "<a href='?action=show&type=controller&page=1'>1</a>" .
            "<a href='?action=show&type=controller&page=2'>2</a>" .
            "<a class='active' href='?action=show&type=controller&page=3'>3</a>" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPageClass('active')
                ->setCurrentPage(5)
                ->html()
        );

        $this->assertEquals(
            "<div>" .
            "<a href='?action=show&type=controller&page=1'>First</a>" .
            "<a href='?action=show&type=controller&page=1'>1</a>" .
            "<a href='?action=show&type=controller&page=2'>2</a>" .
            "<a class='current' href='?action=show&type=controller&page=3'>3</a>" .
            "<a href='?action=show&type=controller&page=3'>Last</a>" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPage(3)
                ->setFirst('First')
                ->setLast('Last')
                ->html()
        );

        $this->assertEquals(
            "<div class='pagination'>" .
            "<a href='?action=show&type=controller&pg=1'>First</a>" .
            "<a href='?action=show&type=controller&pg=2'>Previous</a>" .
            "<a href='?action=show&type=controller&pg=1'>1</a>" .
            "<a href='?action=show&type=controller&pg=2'>2</a>" .
            "<a class='current' href='?action=show&type=controller&pg=3'>3</a>" .
            "<a href='?action=show&type=controller&pg=4'>4</a>" .
            "<a href='?action=show&type=controller&pg=4'>Next</a>" .
            "<a href='?action=show&type=controller&pg=4'>Last</a>" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
                ->setClass("pagination")
                ->setPageVariable('pg')
                ->setPageCount(4)
                ->setCurrentPage(3)
                ->setPrevious('Previous')
                ->setFirst('First')
                ->setLast('Last')
                ->setNext('Next')
                ->html()
        );
    }
}
