<?php

namespace TexLab\Html;

class Table extends AbstractTag
{
    protected $table;
    protected $data;
    protected $headers;


    public function __construct()
    {
        $this->clear();
    }

    public function clear(): self
    {
        $this->style = '';
        $this->data = '';
        return $this;
    }

    public function setHeaders(array $headers) {
        $str = '';

        foreach ($headers as $value) {
            $str .= "\t<th>$value</th>\n";
        }
        $this->headers = $str;
        return $this;
    }

    public function data(array $data)
    {
        $str = "";

        foreach ($data as $row) {
            $str .= "\t<tr>\n";
            foreach ($row as $cell) {
                $str .= "\t\t<td>$cell</td>\n";
            }
            $str .= "\t</tr>\n";
        }

        $this->data = $str;
        return $this;
    }

    public function html()
    {
        return "<table class='table table-striped table-dark'  $this->style$this->class>\n<tr>\n$this->headers</tr>\n$this->data</table>\n";
    }
}
