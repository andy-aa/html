<?php

namespace TexLab\Html;

class Select extends AbstractTag
{
    use NameTrait;
    use RequiredTrait;
    use DisabledTrait;
    use TabIndexTrait;


    /**
     * @var mixed[]
     */
    protected $selectedValues = [];

    /**
     * @var array<mixed, string>
     */
    protected $data = [];

    /**
     * @var string
     */
    protected $attrSize = '';

    /**
     * @var string
     */
    protected $attrMultiple = '';

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
    public function setSize(int $size = 0)
    {
        $this->attrSize = $size ? " size='$size'" : "";
        return $this;
    }

    /**
     * @param bool $multiple
     * @return $this
     */
    public function setMultiple(bool $multiple = true)
    {
        $this->attrMultiple = $multiple ? " multiple" : '';
        return $this;
    }

    /**
     * @param array<mixed, string> $data
     * @return $this
     */
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return string
     */
    protected function generateSelectHtml()
    {
        $html = "";

        if (!empty($this->data)) {
            $option = new Option();

            foreach ($this->data as $key => $item) {
                $html .= "\n\t" .
                    $option
                        ->selected(in_array($key, $this->selectedValues))
                        ->setValue("$key")
                        ->setInnerText($item)
                        ->html();
            }
        }

        return $html;
    }

    public function html(): string
    {
        return '<select' . parent::attr() . '>' . $this->generateSelectHtml() . '</select>';
    }
}
