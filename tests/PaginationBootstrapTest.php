<?php

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use TexLab\Html\Component\PaginationBootstrap;

class PaginationBootstrapTest extends TestCase
{

    public function testPaginationBootstrap(): void
    {
        $this->assertIsString(
            (new PaginationBootstrap())->html()
        );

        $this->assertEquals(
            "<nav>\n" .
            "<ul class='pagination'>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=1'>1</a>\n" .
            "</li>\n" .
            "<li class='page-item active'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=2'>2</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=3'>3</a>\n" .
            "</li>\n" .
            "</ul>\n</nav>",
            (new PaginationBootstrap())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPage(2)
                ->html()
        );

        $this->assertEquals(
            "<nav aria-label='Global'>\n" .
            "<ul class='pagination'>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=1'>1</a>\n" .
            "</li>\n" .
            "<li class='page-item active'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=2'>2</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=3'>3</a>\n" .
            "</li>\n" .
            "</ul>\n</nav>",
            (new PaginationBootstrap())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPage(2)
                ->setAriaLabel("Global")
                ->html()
        );

        $this->assertEquals(
            "<nav aria-label='Global'>\n" .
            "<ul class='pagination'>\n" .
            "<li class='page-item active'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=1'>1</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=2'>2</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=3'>3</a>\n" .
            "</li>\n" .
            "</ul>\n</nav>",
            (new PaginationBootstrap())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPage(1)
                ->setAriaLabel("Global")
                ->html()
        );

        $this->assertEquals(
            "<nav>\n" .
            "<ul class='pagination'>\n" .
            "<li class='page-item active'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=1'>1</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=2'>2</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=3'>3</a>\n" .
            "</li>\n" .
            "</ul>\n</nav>",
            (new PaginationBootstrap())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPage(0)
                ->html()
        );

        $this->assertEquals(
            "<nav>\n" .
            "<ul class='pagination'>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=1'>1</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=2'>2</a>\n" .
            "</li>\n" .
            "<li class='page-item active'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=3'>3</a>\n" .
            "</li>\n" .
            "</ul>\n" .
            "</nav>",
            (new PaginationBootstrap())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPage(5)
                ->html()
        );

        $this->assertEquals(
            "<nav>\n" .
            "<ul class='pagination'>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=1'>1</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=2'>2</a>\n" .
            "</li>\n" .
            "<li class='page-item active'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=3'>3</a>\n" .
            "</li>\n" .
            "</ul>\n" .
            "</nav>",
            (new PaginationBootstrap())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPageClass('active')
                ->setCurrentPage(5)
                ->html()
        );

        $this->assertEquals(
            "<nav>\n" .
            "<ul class='pagination'>\n" .
            "<li class='page-item disabled'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=1' tabindex='-1'>First</a>\n" .
            "</li>\n" .
            "<li class='page-item active'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=1'>1</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=2'>2</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=3'>3</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=3'>Last</a>\n" .
            "</li>\n" .
            "</ul>\n" .
            "</nav>",
            (new PaginationBootstrap())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPage(1)
                ->setFirst('First')
                ->setLast('Last')
                ->html()
        );

        $this->assertEquals(
            "<nav>\n" .
            "<ul class='pagination'>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=1'>First</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=1'>1</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=2'>2</a>\n" .
            "</li>\n" .
            "<li class='page-item active'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=3'>3</a>\n" .
            "</li>\n" .
            "<li class='page-item disabled'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=3' tabindex='-1'>Last</a>\n" .
            "</li>\n" .
            "</ul>\n" .
            "</nav>",
            (new PaginationBootstrap())
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(3)
                ->setCurrentPage(3)
                ->setFirst('First')
                ->setLast('Last')
                ->html()
        );

        $this->assertEquals(
            "<nav aria-label='Global'>\n" .
            "<ul class='pagination'>\n" .
            "<li class='page-item disabled'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=1' tabindex='-1'>First</a>\n" .
            "</li>\n" .
            "<li class='page-item disabled'>\n" .
            <<<TAG
	<a class='page-link' href='?action=show&type=controller&page=1' aria-label='Previous' tabindex='-1'>\n
TAG
            .
            "	<span aria-hidden='true'>Prev</span>\n" .
            "	<span class='sr-only'>Previous</span>\n" .
            "</a>\n" .
            "</li>\n" .
            "<li class='page-item active'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=1'>1</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=2'>2</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=3'>3</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=4'>4</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=2' aria-label='Next'>\n" .
            "	<span aria-hidden='true'>Next</span>\n" .
            "	<span class='sr-only'>Next</span>\n" .
            "	</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=4'>Last</a>\n" .
            "</li>\n" .
            "</ul>\n" .
            "</nav>",
            (new PaginationBootstrap())
                ->setAriaLabel("Global")
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(4)
                ->setCurrentPage(1)
                ->setPrevious('Prev')
                ->setFirst('First')
                ->setLast('Last')
                ->setNext('Next')
                ->html()
        );

        $this->assertEquals(
            "<nav aria-label='Global'>\n" .
            "<ul class='pagination'>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=1'>First</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=3' aria-label='Previous'>\n" .
            "	<span aria-hidden='true'>Prev</span>\n" .
            "	<span class='sr-only'>Previous</span>\n" .
            "</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=1'>1</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=2'>2</a>\n" .
            "</li>\n" .
            "<li class='page-item'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=3'>3</a>\n" .
            "</li>\n" .
            "<li class='page-item active'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=4'>4</a>\n" .
            "</li>\n" .
            "<li class='page-item disabled'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=4' aria-label='Next' tabindex='-1'>\n" .
            "	<span aria-hidden='true'>Next</span>\n" .
            "	<span class='sr-only'>Next</span>\n" .
            "	</a>\n" .
            "</li>\n" .
            "<li class='page-item disabled'>\n" .
            "	<a class='page-link' href='?action=show&type=controller&page=4' tabindex='-1'>Last</a>\n" .
            "</li>\n" .
            "</ul>\n" .
            "</nav>",
            (new PaginationBootstrap())
                ->setAriaLabel("Global")
                ->setUrlPrefix("?action=show&type=controller")
                ->setPageCount(4)
                ->setCurrentPage(4)
                ->setPrevious('Prev')
                ->setFirst('First')
                ->setLast('Last')
                ->setNext('Next')
                ->html()
        );
    }
}
