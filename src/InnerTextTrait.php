<?php


namespace TexLab\Html;


trait InnerTextTrait
{
    protected string $innerText = '';

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