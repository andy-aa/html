<?php


namespace TexLab\Html;


class Select extends AbstractTag
{
    protected $name;
    protected $data;
    protected $value;

    public function setName(string $name)
    {
        $this->name = " name='$name'";
        return $this;
    }

    public function setValue(int $value)
    {
        $this->value = $value;
        return $this;
    }

    public function data(array $data)
    {
        $str = "\n";
        foreach ($data as $key => $item) {
            if ($key == $this->value) {
                $str .= "\t<option value=" . $key . ' selected>' . $item . "</option>\n";
            } else {
                $str .= "\t<option value=" . $key . '>' . $item. "</option>\n";
            }
        }
        $this->data = $str;
        return $this;
    }

    public function html()
    {
        return "\t\n<select$this->name$this->style$this->class$this->id>$this->data</select>\n<br>";
    }
}