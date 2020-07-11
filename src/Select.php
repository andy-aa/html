<?php


namespace TexLab\Html;


class Select extends AbstractTag
{
    use NameTrait;

    protected $data;
    protected $selectedValue;

    public function setSelectedValue($selectedValue)
    {
        $this->selectedValue = $selectedValue;

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

                $str .= "\t" .
                    $option
                        ->setValue($key)
                        ->setInnerText($item)
                        ->html() .
                    "\n";
            }
            $this->data = $str;
        }

        return $this;
    }

    public function html()
    {
        return "<select$this->name$this->style$this->class$this->id>$this->data</select>";
    }
}