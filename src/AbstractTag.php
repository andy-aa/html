<?php

namespace TexLab\Html;

abstract class AbstractTag implements TagInterface
{
    /**
     * @var string
     */
    protected $attrClass = '';

    /**
     * @var string
     */
    protected $attrStyle = '';

    /**
     * @var string
     */
    protected $attrId = '';

    /**
     * @var string
     */
    protected $tagName = '';


    public function __construct()
    {
        $this->tagName = strtolower((new \ReflectionClass($this))->getShortName());
    }

    /**
     * @param string $class
     * @return $this
     */
    public function setClass(string $class = '')
    {
        $this->attrClass = $class === '' ? '' : " class='$class'";
        return $this;
    }

    /**
     * @param string $class
     * @return $this
     */
    public function addClass(string $class)
    {
        if (empty($this->attrClass)) {
            return $this->setClass($class);
        } else {
            $classes = explode(" ", explode("'", $this->attrClass)[1]);
            return $this->setClass(implode(" ", array_merge($classes, [$class])));
        }
    }

    /**
     * @param string $class
     * @return $this
     */
    public function removeClass(string $class)
    {
        if (empty($class) || empty($this->attrClass)) {
            return $this;
        } else {
            $classes = explode(" ", explode("'", $this->attrClass)[1]);
            return $this->setClass(implode(" ", array_diff($classes, [$class])));
        }
    }

    /**
     * @param string $style
     * @return $this
     */
    public function setStyle(string $style)
    {
        $this->attrStyle = $style === '' ? '' : " style='$style'";
        return $this;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->attrId = $id === '' ? '' : " id='$id'";
        return $this;
    }

    /**
     * @return string
     */
    public function html()
    {
        $html = '';

        foreach (array_keys(get_object_vars($this)) as $value) {
            if (substr($value, 0, 4) === 'attr') {
                $html .= $this->{$value};
            }
        }

        return "<$this->tagName$html>";
    }
}
