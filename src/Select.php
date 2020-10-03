<?php

namespace TexLab\Html;

class Select extends AbstractPairedTag
{
    use NameTrait;
    use RequiredTrait;
    use DisabledTrait;

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
     * @var array<mixed, string>
     */
    protected $data = [];

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
    public function html()
    {
        $this->setInnerText('');

        if (!empty($this->data)) {
            $option = new Option();

            foreach ($this->data as $key => $item) {
                $this->addInnerText(
                    $option
                        ->selected(in_array($key, $this->selectedValues))
                        ->setValue("$key")
                        ->setInnerText($item)
                        ->html()
                );
            }
        }

        return parent::html();
    }
}
