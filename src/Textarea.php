<?php

namespace TexLab\Html;

class Textarea extends AbstractPairedTag
{
    use NameTrait;
    use PlaceholderTrait;
    use RequiredTrait;
    use DisabledTrait;


    /**
     * @var string
     */
    protected $attrRows = '';
    /**
     * @var string
     */
    protected $attrCols = '';

    /**
     * @param int $row
     * @return $this
     */
    public function setRows(int $row = 0)
    {
        $this->attrRows = $row ? " rows='$row'" : '';
        return $this;
    }

    /**
     * @param int $col
     * @return $this
     */
    public function setCols(int $col = 0)
    {
        $this->attrCols = $col ? " cols='$col'" : '';
        return $this;
    }
}
