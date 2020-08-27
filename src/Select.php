<?php

namespace TexLab\Html;

class Select extends AbstractTag
{
    use NameTrait;
    use InnerTextTrait;
    use RequiredTrait;
    use DisabledTrait;

    /**
     * @var mixed[]
     */
    protected $selectedValues = [];
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
     * @param array<string|int, string> $data
     * @return $this
     */
    public function setData(array $data)
    {
        if (!empty($data)) {
            $this->setInnerText('');
            $option = new Option();

            foreach ($data as $key => $item) {
                if (in_array($key, $this->selectedValues)) {
                    $option->setSelected();
                } else {
                    $option->setUnSelected();
                }

                $this->addInnerText(
                    "\n\t" .
                    $option
                        ->setValue("$key")
                        ->setInnerText($item)
                        ->html()
                );
            }
        }
        return $this;
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
            $this->innerText .
            '</select>';
    }
}
