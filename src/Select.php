<?php

namespace TexLab\Html;

class Select extends AbstractTag
{
    use NameTrait;
    use InnerTextTrait;

    protected string $selectedValue = '';
    protected string $size = '';
    protected string $multiple = '';

    /**
     * @param string $selectedValue
     * @return $this
     */
    public function setSelectedValue(string $selectedValue)
    {
        $this->selectedValue = $selectedValue;
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
                if ($key == $this->selectedValue) {
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
            '>' .
            $this->innerText .
            '</select>';
    }
}
