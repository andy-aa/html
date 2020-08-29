<?php

namespace TexLab\Html;

class Select extends AbstractTag
{
    use NameTrait;
    use RequiredTrait;
    use DisabledTrait;

    /**
     * @var mixed[]
     */
    protected $selectedValues = [];

    /**
     * @var array<mixed, string>
     */
    protected $selectData = [];

    /**
     * @var string
     */
    protected $size = '';

    /**
     * @var string
     */
    protected $multiple = '';

    /**
     * @param mixed[] $selectedValues
     * @return $this
     */
    public function setSelectedValues(array $selectedValues)
    {
        $this->selectedValues = $selectedValues;
        return $this;
    }

    /**
     * @param int $size
     * @return $this
     */
    public function setSize(int $size)
    {
        $this->size = ($size < 2) ? "" : " size='$size'";
        return $this;
    }

    /**
     * @param bool $check
     * @return $this
     */
    public function setMultiple(bool $check)
    {
        $this->multiple = ((!$check) and ($this->size == "")) ? "" : " multiple";
        return $this;
    }

    /**
     * @param array<mixed, string> $data
     * @return $this
     */
    public function setData(array $data)
    {
        $this->selectData = $data;

        return $this;
    }

    /**
     * @return string
     */
    protected function generateSelectHtml()
    {
        $html = "";

        if (!empty($this->selectData)) {
            $option = new Option();

            foreach ($this->selectData as $key => $item) {
                if (in_array($key, $this->selectedValues)) {
                    $option->setSelected();
                } else {
                    $option->unsetSelected();
                }

                $html .= "\n\t" .
                    $option
                        ->setValue("$key")
                        ->setInnerText($item)
                        ->html();
            }
        }

        return $html;
    }

    public function html(): string
    {
        return '<select' .
            $this->name .
            $this->style .
            $this->class .
            $this->id .
            $this->size .
            $this->multiple .
            $this->required .
            $this->disabled .
            '>' .
            $this->generateSelectHtml() .
            '</select>';
    }
}
