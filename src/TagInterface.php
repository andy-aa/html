<?php

namespace TexLab\Html;

interface TagInterface
{
    /**
     * @param string $class
     * @return $this
     */
    public function setClass(string $class);

    /**
     * @param string $class
     * @return $this
     */
    public function addClass(string $class);

    /**
     * @param string $class
     * @return $this
     */
    public function removeClass(string $class);

    /**
     * @param string $style
     * @return $this
     */
    public function setStyle(string $style);

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);
}
