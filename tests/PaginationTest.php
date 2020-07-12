<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TexLab\Html\Pagination;


class PaginationTest extends TestCase
{

    function testPagination()
    {
        $this->assertIsString(
            (new Pagination())->html()
        );

        $this->assertEquals(
            "<div>\n" .
            "\t<a  href='?action=show&type=anyType&page=1'>1 </a>\n" .
            "\t<a class=\"curPage\" href='?action=show&type=anyType&page=2'>2 </a>\n" .
            "\t<a  href='?action=show&type=anyType&page=3'>3 </a>\n" .
            "</div>\n",
            (new Pagination())
                ->setControllerType("anyType")
                ->setPageCount(3)
                ->setCurPage(2)
                ->html()
        );

    }

}