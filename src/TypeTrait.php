<?php

namespace TexLab\Html;

trait TypeTrait
{
    /**
     * @var string
     */
    protected $attrType = '';

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type = '')
    {
        $this->attrType = $type === '' ? '' : " type='$type'";

        return $this;
    }
}
