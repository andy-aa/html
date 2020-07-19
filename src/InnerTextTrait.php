<?php


namespace TexLab\Html;


trait InnerTextTrait
{
    protected $innerText = '';

    public function setInnerText(string $innerText)
    {
        $this->innerText = $innerText;
        return $this;
    }

    public function addInnerText(string $innerText)
    {
        $this->innerText .= $innerText;
        return $this;
    }
}