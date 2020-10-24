<?php

namespace TexLab\Html;

trait ListTrait
{
    /**
     * @var string
     */
    protected $attrStyle = '';

    /**
     * @var array<mixed, string>
     */
    protected $data = [];

    /**
     * @param string $style
     * @return $this
     */
    public function setStyle(string $style)
    {
        $this->attrStyle = " style='list-style-type:$style'";
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
     * @param string $str
     * @return $this
     */
    public function addItem(string $str)
    {
        $this->data[] = $str;

        return $this;
    }

    /**
     * @return string
     */
    public function html()
    {
        $this->setInnerText('');

        if (!empty($this->data)) {
            $listItem = new Li();

            foreach ($this->data as $item) {
                $this->addInnerText(
                    $listItem
                        ->setInnerText($item)
                        ->html()
                );
            }
        }

        return parent::html();
    }
}
