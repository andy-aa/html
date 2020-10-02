<?php

namespace TexLab\Html;

abstract class AbstractTag implements TagInterface
{
    /**
     * @var string
     */
    protected $class = '';

    /**
     * @var string
     */
    protected $attrStyle = '';

    /**
     * @var string
     */
    protected $attrId = '';

    /**
     * @param string $class
     * @return $this
     */
    public function setClass(string $class = '')
    {
        $this->class = $class === '' ? '' : " class='$class'";
        return $this;
    }

    /**
     * @param string $class
     * @return $this
     */
    public function addClass(string $class)
    {
        if (empty($this->class)) {
            return $this->setClass($class);
        } else {
            $classes = explode(" ", explode("'", $this->class)[1]);
            return $this->setClass(implode(" ", array_merge($classes, [$class])));
        }
    }

    /**
     * @param string $class
     * @return $this
     */
    public function removeClass(string $class)
    {
        if (empty($class) || empty($this->class)) {
            return $this;
        } else {
            $classes = explode(" ", explode("'", $this->class)[1]);
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

//    /**
//     * @return string
//     */
//    public function html()
//    {
//        $html = '';
//        foreach (array_keys(get_object_vars($this)) as $value) {
//            $html .= $this->{$value};
//        }
//
//        return "<a$html></a>";
//
//        return join(array_keys(get_object_vars($this)));
////        return "<a$this->style$this->class$this->id$this->href$this->tabIndex>$this->innerText</a>";
//    }
}
