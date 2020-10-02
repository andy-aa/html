<?php

namespace TexLab\Html;

class Label extends AbstractPairedTag
{
    /**
     * @var string
     */
    protected $attrFor = '';

    /**
     * @param string $for
     * @return $this
     */
    public function setFor(string $for)
    {
        $this->attrFor = " for='$for'";
        return $this;
    }
}
