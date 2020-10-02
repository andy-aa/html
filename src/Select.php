<?php

namespace TexLab\Html;

class Select extends AbstractTag
{
    use NameTrait;
    use RequiredTrait;
    use DisabledTrait;
    use TabIndexTrait;
    use InnerTextTrait;

    /**
     * @var mixed[]
     */
    protected $selectedValues = [];

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
        $html = "";

        if (!empty($data)) {
            $option = new Option();

            foreach ($data as $key => $item) {
                $html .= "\n\t" .
                    $option
                        ->selected(in_array($key, $this->selectedValues))
                        ->setValue("$key")
                        ->setInnerText($item)
                        ->html();
            }
        }

        $this->setInnerText($html);

        return $this;
    }

    public function html(): string
    {
        return '<select' . parent::attr() . ">$this->innerText</select>";
    }
}
