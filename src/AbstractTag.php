<?php

namespace TexLab\Html;

abstract class AbstractTag implements TagInterface
{
    protected string $class = '';
    protected string $style = '';
    protected string $id = '';

    /**
     * @param string $class
     * @return $this
     */
    public function setClass(string $class)
    {
        $this->class = " class='$class'";
        return $this;
    }

    /**
     * @param string $style
     * @return $this
     */
    public function setStyle(string $style)
    {
        $this->style = " style='$style'";
        return $this;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = " id='$id'";
        return $this;
    }
}
