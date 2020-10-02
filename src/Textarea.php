<?php

namespace TexLab\Html;

class Textarea extends AbstractTag
{
    use NameTrait;
    use InnerTextTrait;
    use PlaceholderTrait;
    use RequiredTrait;
    use DisabledTrait;
    use TabIndexTrait;


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

    public function html(): string
    {
        return '<textarea' . parent::attr() . ">$this->innerText</textarea>";
    }
}
