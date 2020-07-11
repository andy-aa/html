<?php

namespace TexLab\Html;

interface TagInterface
{
    public function setClass(string $class);

    public function setStyle(string $style);

    public function setId(string $id);
}