<?php

namespace TexLab\Html;

abstract class AbstractTag implements TagInterface
{
    protected $class = '';
    protected $style = '';
    protected $id = '';

    /**
     * @param string $class
     * @return $this|TagInterface
     */
    public function setClass(string $class): TagInterface
    {
        $this->class = " class='$class'";
        return $this;
    }

    /**
     * @param string $style
     * @return $this|TagInterface
     */
    public function setStyle(string $style): TagInterface
    {
        $this->style = " style='$style'";
        return $this;
    }

    /**
     * @param string $id
     * @return $this|TagInterface
     */
    public function setId(string $id): TagInterface
    {
        $this->id = " id='$id'";
        return $this;
    }
}
