<?php

namespace TexLab\Html;

trait InnerTextTrait
{
    /**
     * @var string
     */
    protected $innerText = '';

    /**
     * @param string $innerText
     * @return $this
     */
    public function setInnerText(string $innerText)
    {
        $this->innerText = $innerText;
        return $this;
    }

    /**
     * @param string $innerText
     * @return $this
     */
    public function addInnerText(string $innerText)
    {
        $this->innerText .= $innerText;
        return $this;
    }
}
