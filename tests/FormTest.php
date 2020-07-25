<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TexLab\Html\Form;
use TexLab\Html\Input;


class FormTest extends TestCase
{
    /**
     * test Form creation
     */
    function testForm()
    {
        $this->assertIsString(
            (new Form())->html()
        );

        $this->assertEquals(
            "<form action='' method='GET'></form>",
            (new Form())->html()
        );

        $this->assertEquals(
            "<form action='' method='GET'><input type='text' name='login'><input type='password' name='pass'><input type='submit' value='Ok'></form>",
            (new Form())
                ->setInnerText(
                    (new Input())
                        ->setName('login')
                        ->html()
                )
                ->addInnerText(
                    (new Input())
                        ->setType('password')
                        ->setName('pass')
                        ->html()
                )
                ->addInnerText(
                    (new Input())
                        ->setType('submit')
                        ->setValue('Ok')
                        ->html()
                )
                ->html()
        );

        $this->assertEquals(
            "<form action='' method='GET'><input type='text' name='login'><input type='password' name='pass'><input type='submit' value='Ok'></form>",
            (new Form())
                ->addInnerText(
                    (new Input())
                        ->setName('login')
                        ->html()
                )
                ->addInnerText(
                    (new Input())
                        ->setType('password')
                        ->setName('pass')
                        ->html()
                )
                ->addInnerText(
                    (new Input())
                        ->setType('submit')
                        ->setValue('Ok')
                        ->html()
                )
                ->html());

    }

}