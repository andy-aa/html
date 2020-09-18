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
            "<div>\n\t" .
            "<a href='?action=show&type=controller&page=1'>1</a>\n\t" .
            "<a href='?action=show&type=controller&page=2' class='current'>2</a>\n\t" .
            "<a href='?action=show&type=controller&page=3'>3</a>\n" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPage(2)
                ->html()
        );

        $this->assertEquals(
            "<div>\n\t" .
            "<a href='?action=show&type=controller&page=1' class='current'>1</a>\n\t" .
            "<a href='?action=show&type=controller&page=2'>2</a>\n\t" .
            "<a href='?action=show&type=controller&page=3'>3</a>\n" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPage(0)
                ->html()
        );

        $this->assertEquals(
            "<div>\n\t" .
            "<a href='?action=show&type=controller&page=1'>1</a>\n\t" .
            "<a href='?action=show&type=controller&page=2'>2</a>\n\t" .
            "<a href='?action=show&type=controller&page=3' class='current'>3</a>\n" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPage(5)
                ->html()
        );

        $this->assertEquals(
            "<div>\n\t" .
            "<a href='?action=show&type=controller&page=1'>1</a>\n\t" .
            "<a href='?action=show&type=controller&page=2'>2</a>\n\t" .
            "<a href='?action=show&type=controller&page=3' class='active'>3</a>\n" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPageClass('active')
                ->setCurrentPage(5)
                ->html()
        );

        $this->assertEquals(
            "<div>\n\t" .
            "<a href='?action=show&type=controller&page=1'>First</a>\n\t" .
            "<a href='?action=show&type=controller&page=1'>1</a>\n\t" .
            "<a href='?action=show&type=controller&page=2'>2</a>\n\t" .
            "<a href='?action=show&type=controller&page=3' class='current'>3</a>\n\t" .
            "<a href='?action=show&type=controller&page=3'>Last</a>\n" .
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
            "<div>\n\t" .
            "<a href='?action=show&type=controller&page=2'>Previous</a>\n\t" .
            "<a href='?action=show&type=controller&page=1'>First</a>\n\t" .
            "<a href='?action=show&type=controller&page=1'>1</a>\n\t" .
            "<a href='?action=show&type=controller&page=2'>2</a>\n\t" .
            "<a href='?action=show&type=controller&page=3' class='current'>3</a>\n\t" .
            "<a href='?action=show&type=controller&page=2'>4</a>\n\t" .
            "<a href='?action=show&type=controller&page=3'>Last</a>\n\t" .
            "<a href='?action=show&type=controller&page=4'>Next</a>\n" .
            "</div>",
            (new Pagination())
                ->setUrlPrefix("?action=show&type=controller")
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
