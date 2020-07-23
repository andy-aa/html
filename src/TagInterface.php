<?php

namespace TexLab\Html;

interface TagInterface
{
    public function setClass(string $class): TagInterface;

    public function setStyle(string $style): TagInterface;

    public function setId(string $id): TagInterface;
}