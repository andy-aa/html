<?php


namespace TexLab\Html;


class Select extends AbstractTag
{
    use NameTrait;

    protected $data = "";
    protected $selectedValue = null;
    protected $size = "";
    protected $multiple = "";

    public function setSelectedValue($selectedValue)
    {
        $this->selectedValue = $selectedValue;
        return $this;
    }

    public function setSize($size)
    {
        $this->size = ($size < 2) ? "" : " size='$size'";
        return $this;
    }

    public
    function setMultiple($multiple)
    {
        $this->multiple = ((!$multiple) and ($this->size == "")) ? "" : " multiple";
        return $this;
    }

    public function setData(array $data)
    {
        if (!empty($data)) {
            $str = '';
            $option = new Option();
            foreach ($data as $key => $item) {
                if ($key == $this->selectedValue) {
                    $option->setSelected();
                } else {
                    $option->setUnSelected();
                }
                $str .= "\n\t" .
                    $option
                        ->setValue($key)
                        ->setInnerText($item)
                        ->html();
            }
            $this->data = $str;
        }
        return $this;
    }

    public
    function html()
    {
        return "<select$this->name$this->style$this->class$this->id$this->size$this->multiple>$this->data</select>";
    }
}