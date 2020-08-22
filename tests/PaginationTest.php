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
    }
}
