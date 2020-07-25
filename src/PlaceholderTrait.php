<?php


namespace TexLab\Html;


trait PlaceholderTrait
{
    protected $placeholder = '';

    public function setPlaceholder(string $placeholder)
    {
        $this->placeholder = " placeholder='" . addslashes($placeholder) . "'";
        return $this;
    }

    public function addPlaceholder(string $placeholder)
    {
        $this->placeholder .= $placeholder;
        return $this;
    }
}